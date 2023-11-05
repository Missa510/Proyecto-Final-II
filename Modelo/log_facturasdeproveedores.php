<?php

require_once("BasesDeDatos\conexion.php");
class Facturasdeproveedores
{
    private $Id_facompras, $codigo_facompras, $fecha_facompras, $cant_produc, $descuento_proveedores, $fkproducto, $fkest, $fkproveedor, $fksede, $datos;

    public function __construct($id, $codigo, $fechadecompra, $producto, $cantidad, $descuento, $proveedor, $sede, $estado)
    {
        $this->Id_facompras = $id;
        $this->codigo_facompras = $codigo;
        $this->fecha_facompras = $fechadecompra;
        $this->fkproducto = $producto;
        $this->cant_produc = $cantidad;
        $this->descuento_proveedores = $descuento;
        $this->fkproveedor = $proveedor;
        $this->fksede = $sede;
        $this->fkest = $estado;
    }

    #Métodos get
    public function getId_facompras()
    {
        return $this->Id_facompras;
    }
    public function getCodigo_facompras()
    {
        return $this->codigo_facompras;
    }
    public function getFecha_facompras()
    {
        return $this->fecha_facompras;
    }
    public function getCantidadProducto()
    {
        return $this->cant_produc;
    }
    public function getDescuento()
    {
        return $this->descuento_proveedores;
    }
    public function getFkproducto()
    {
        return $this->fkproducto;
    }
    public function getFkproveedor()
    {
        return $this->fkproveedor;
    }
    public function getFksede()
    {
        return $this->fksede;
    }
    public function getEstado()
    {
        return $this->fkest;
    }

    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT fact.id_facompras, fact.codigo_facompras, fact.fecha_facompras, fact.cant_produc, fact.descuento_proveedores, Productos.precio_compra, Productos.nom_produc, prov.nom_prov, sed.nom_sed, est.nom_est FROM Facturasdeproveedores AS fact, Proveedores AS prov, Sedes AS sed, Estado AS est INNER JOIN Productos ON fact.fkproduc = Productos.id_produc WHERE fact.fkprov = prov.id_prov AND fact.fksede = sed.id_sede AND fact.fkest = est.id_est ORDER BY fact.fecha_facompras;";

        #Procesar la consulta de datos
        $resuls_factucompras = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_factucompras;
    }

    public function VerificarCodigo()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT fact.id_facompras, fact.codigo_facompras, fact.fecha_facompras, fact.cant_produc, fact.descuento_proveedores, prod.precio_compra, prod.nom_produc, prov.nom_prov, sed.nom_sed, est.nom_est FROM Facturasdeproveedores AS fact, Proveedores AS prov, Productos AS prod, Sedes AS sed, Estado AS est WHERE fact.fkproduc = prod.id_produc AND fact.fkprov = prov.id_prov AND fact.fksede = sed.id_sede AND fact.fkest = est.id_est AND codigo_facompras = '{$this->getCodigo_facompras()}';";

        #Procesar la consulta de datos
        $resuls_factucompras = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_factucompras);

        return $resuls_factucompras;
    }

    public function Agregar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "INSERT INTO Facturasdeproveedores(codigo_facompras, fecha_facompras, cant_produc, descuento_proveedores, fkproduc, fkprov, fksede, fkest) VALUES('{$this->getCodigo_facompras()}', '{$this->getFecha_facompras()}', {$this->getCantidadProducto()}, {$this->getDescuento()}, {$this->getFkproducto()}, {$this->getFkproveedor()}, {$this->getFksede()}, 10);";

        #Procesar la consulta de datos
        $resuls_factucompras = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_factucompras;
    }

    public function Pagar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE Facturasdeproveedores SET fkest = {$this->getEstado()} WHERE id_facompras = {$this->getId_facompras()};";

        #Procesar la consulta de datos
        $resuls_factucompras = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_factucompras;
    }
}
