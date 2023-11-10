<?php
use Dompdf\Frame\FrameList;

require_once("Modelo\log_".$control.".php");


class FacturasdeproveedoresControl
{
    public function Estado()
    {
        require_once("Modelo\log_productos.php");
        require_once("Modelo\log_sedes.php");
        require_once("Modelo\log_proveedores.php");

        $factucompras = new Facturasdeproveedores(null, null, null, null, null, null, null, null, null);
        $tabla = $factucompras->Mostrar();

        $productos = new Productos(null, null, null, null, null, null, null);
        $selectProductos = $productos->MostrarHabilitados();

        $proveedores = new Proveedores(null, null, null, null, null, null);
        $selectProveedores = $proveedores->MostrarHabilitados();

        $sedes = new Sedes(null, null, null, null, null);
        $selectSedes = $sedes->MostrarHabilitadas();

        require_once("vista/web/paginas/admin_components/facturadeproveedores.php");
    }

    public function Agregar()
    {
        $codigo_facompras = $_POST['codigo_facompras'];
        $fecha_facompras = $_POST['fecha_facompras'];
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $descuento = $_POST['descuento'];
        $sede = $_POST['sede'];
        $proveedor = $_POST['proveedor'];

        $parametersNumber = "/^[0-9]/i";
        $parametersText = "/^[A-Za-z0-9]/i";

        if (preg_match($parametersNumber, $cantidad) and preg_match($parametersNumber, $descuento) and preg_match($parametersText, $codigo_facompras)) {
            $factura = new Facturasdeproveedores(null, $codigo_facompras, $fecha_facompras, $producto, $cantidad, $descuento, $proveedor, $sede, null);
            $sisi = $factura->VerificarCodigo();

            if (mysqli_fetch_row($sisi)) {
                require_once("vista\web\paginas\admin_components\Specifics_errors\code_iqual.php");
            } else {
                $consulta = $factura->Agregar();
            }

        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function Pagada()
    {
        $id = $_GET["id"];

        $facturas = new Facturasdeproveedores($id, null, null, null, null, null, null, null, 9);
        $consulta = $facturas->Pagar();

        $this->Estado();
    }

    public function Imprimir()
    {

        $codigo_facompras = $_GET['codigo_facompras'];
        
        $factura = new Facturasdeproveedores(null, $codigo_facompras, null, null, null, null, null, null, null);
        $consulta = $factura->VerificarCodigo();
        
        #var_dump(mysqli_fetch_row($consulta));
        
        if (mysqli_fetch_row($consulta)) {
            
            ob_start();
            
            require("FPDF/fpdf.php");
            
            $FPDF = new FPDF();
            
            $FPDF->AddPage();

            foreach($consulta as $UwU){

                $FPDF->Image('Imagenes\Logo.jpg',10,10,-550);
    
                $FPDF->SetX(140);
    
                $FPDF->SetFont("Arial","",16);

                $FPDF->Write(10, "Codigo: ".$UwU['codigo_facompras']);
                
                $FPDF->SetXY(100,20);
                
                $FPDF->Write(10, "Fecha emitida: ".date_format(date_create($UwU["fecha_facompras"]), "F dS, Y H:i"));
                
                $FPDF->SetXY(60,30);
                
                $FPDF->Write(10, "FACTURA DE ADQUISICION DE PRODUCTO");

                $FPDF->SetY(55);

                $FPDF->Write(10, "Producto: {$UwU['nom_produc']}");

                $FPDF->SetY(65);

                $FPDF->Write(10, "Cantidad: ". number_format( $UwU['cant_produc'], 0));

                $FPDF->SetY(75);

                $FPDF->Write(10, "Precio por unidad: ". number_format($UwU["precio_compra"], 2). " \$COP");

                $FPDF->SetY(85);

                $FPDF->Write(10, "Descuento: {$UwU['descuento_proveedores']}%");

                $FPDF->SetY(95);

                $FPDF->Write(10, "Subtotal: ". number_format($UwU["precio_compra"] * $UwU["cant_produc"], 2));

                $FPDF->SetY(105);

                $FPDF->SetFont('Arial', '', 24);

                if($UwU['descuento_proveedores'] == 0){
    
                    $FPDF->Write(10, "Total: ". number_format($UwU["precio_compra"] * $UwU["cant_produc"], 2). " \$COP");

                } else {

                    $descuento = $UwU["descuento_proveedores"] / 100;
                    $precio = $UwU["precio_compra"];
                    $cantidad = $UwU["cant_produc"];
                    
                    $FPDF->Write(10, "Total: ".number_format(($precio * $cantidad) - ($precio * $cantidad * $descuento), 2). " \$COP");

                }

                $FPDF->SetFont('Arial', '', 16);

                $FPDF->SetY(125);

                $FPDF->Write(10, "Proveedores: ". $UwU["nom_prov"]);

                $FPDF->SetY(135);

                $FPDF->Write(10, "Sede que se surtio: ". $UwU["nom_sed"]);


            }

            $FPDF->Output('', '', true);

            ob_end_flush();


        } else {

            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();

        }

    }
}