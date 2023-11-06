<?php

require_once("Modelo\log_$control.php");
require_once("Modelo\log_productos.php");
require_once("Modelo\log_sedes.php");

class ExistenciadeproductosControl{
    public function Estado()
    {
        $exist = new Existenciadeproductos(null, null, null, null, null, null);
        $tabla = $exist->Mostrar();

        $productos = new Productos(null, null, null, null, null, null, null);
        $selectProductos = $productos->MostrarHabilitados();

        $sedes = new Sedes(null, null, null, null, null);
        $selectSedes = $sedes->MostrarHabilitadas();

        require_once("vista/web/paginas/admin_components/existencias.php");
    }

    public function Agregar()
    {
        $fecha_entrada = $_POST["fecha_entrada"];
        $producto = $_POST["producto"];
        $sede = $_POST["sede"];
        $cantidad = $_POST["cantidad"];

        $parametersNumber = "/^[0-9]/i";

        if (preg_match($parametersNumber, $cantidad)) {
            $exist = new Existenciadeproductos(null, $fecha_entrada, $cantidad, $sede, $producto, null);
            $tabla = $exist->Agregar();
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function Editar()
    {
        $id = $_GET['id'];

        $exist = new Existenciadeproductos($id, null, null, null, null, null);
        $con = $exist->Buscar();

        $productos = new Productos(null, null, null, null, null, null, null);
        $selectProductos = $productos->MostrarHabilitados();

        $sedes = new Sedes(null, null, null, null, null);
        $selectSedes = $sedes->MostrarHabilitadas();

        if ($con) {
            require_once("vista/web/paginas/admin_components/Modales/exisprod_modal.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }

    public function Actualizar()
    {
        $id = $_POST["id"];
        $fecha_entrada = $_POST["fecha_entrada"];
        $producto = $_POST["producto"];
        $sede = $_POST["sede"];
        $cantidad = $_POST["cantidad"];

        $parametersNumber = "/^[0-9]/i";

        if (preg_match($parametersNumber, $cantidad)) {
            if($cantidad == 0){
                $exist = new Existenciadeproductos($id, $fecha_entrada, $cantidad, $sede, $producto, 11);
                $tabla = $exist->Modificar();
            } else {
                $exist = new Existenciadeproductos($id, $fecha_entrada, $cantidad, $sede, $producto, 5);
                $tabla = $exist->Modificar();
            }
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }
}