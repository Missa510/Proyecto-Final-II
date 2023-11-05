<?php
use Vtiful\Kernel\Excel;

require_once("Modelo\log_".$control.".php");
class ProductosControl{
    public function Estado()
    {
        $produc = new Productos(null, null, null, null, null, null, null);
        $tabla = $produc->Mostrar();
        require_once("vista\web\paginas\admin_components\productos.php");
    }

    public function MarcarEnExistencia()
    {
        $id = $_GET['id'];

        $prodcuto = new Productos($id, null, null, null, null, null, null);
        $verificar = $prodcuto->Buscar();

        if($verificar){
            $cambiar = $prodcuto->Existente();
        } else {
            require_once('vista\web\paginas\errors\data_unknown.php');
        }
        $this->Estado();
    }

    public function MarcarComoAgotado()
    {
        $id = $_GET['id'];

        $prodcuto = new Productos($id, null, null, null, null, null, null);
        $verificar = $prodcuto->Buscar();

        if($verificar){
            $cambiar = $prodcuto->Agotado();
        } else {
            require_once('vista\web\paginas\errors\data_unknown.php');
        }
        $this->Estado();
    }

    public function Agregar() 
    {
        $codigo = $_POST['codigo'];
        $producto = $_POST['producto'];
        $precio_compra = $_POST['precio_compra'];
        $precio_venta = $precio_compra + ($precio_compra * 0.25);
        $notas = $_POST['notas'];

        $parametersText = "/^[A-Za-z0-9]/i";
        $parametersNumber = "/^[0-9]/i";

        if (preg_match($parametersText, $producto) and preg_match($parametersNumber, $precio_compra)) {

            $productos = new Productos(null, $codigo, null, null, null, null, null);
            $verificar = $productos->VerificarCodigo();

            if ( mysqli_fetch_row($verificar) ) {
                require_once("vista\web\paginas\admin_components\Specifics_errors\product_code_iqual.php");
            } else {
                $productos = new Productos(null, $codigo, $producto, $precio_compra, $precio_venta, $notas, null);
                $tabla = $productos->Agregar();
            }
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function Actualizar() 
    {
        $id = $_POST['id'];
        $codigo = $_POST['codigo'];
        $producto = $_POST['producto'];
        $precio_compra = $_POST['precio_compra'];
        $precio_venta = $precio_compra + ($precio_compra * 0.25);
        $notas = $_POST['notas'];

        $parametersText = "/^[A-Za-z0-9]/i";
        $parametersNumber = "/^[0-9]/i";

        if (preg_match($parametersText, $producto) and preg_match($parametersNumber, $precio_compra)) {

            $productos = new Productos($id, $codigo, null, null, null, null, null);
            $verificar = $productos->VerificarCodigoConID();

            if ( mysqli_fetch_row($verificar) ) {
                require_once("vista\web\paginas\admin_components\Specifics_errors\product_code_iqual.php");
            } else {
                $productos = new Productos($id, $codigo, $producto, $precio_compra, $precio_venta, $notas, null);
                $tabla = $productos->Modificar();
            }
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function Editar()
    {
        $id = $_GET['id'];

        $consulta = new Productos($id, null, null, null, null, null, null);
        $con = $consulta->Buscar();

        if ($con) {
            if($con[0]['fkest'] == 4){

                require_once("vista\web\paginas\admin_components\Warnings\producto_debe_estar_en_existencia.php");
                require_once("vista\web\paginas\admin_components\Modales\productos_modal.php");

            } else {
                require_once("vista\web\paginas\admin_components\Modales\productos_modal.php");
            }
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }
}