<?php

require_once("Modelo\log_".$control.".php");


class CajasControl
{
    public function Estado()
    {
        $caja = new Cajas(null, null, null);
        $tabla = $caja->Mostrar();

        require_once("vista/web/paginas/admin_components/cajas.php");
    }
    public function Agregar() {
        $caja = $_POST["caja"];

        $parametersText = "/^[A-Za-z0-9]/i";

        if (preg_match($parametersText, $caja)) {
            $caja = new Cajas(null, $caja, null);
            $tabla = $caja->Agregar();
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function Editar() {
        $id = $_GET["id"];
        
        $consulta = new Cajas($id, null, null);
        $con = $consulta->Buscar();
        
        if($con){
            require_once("vista/web/paginas/admin_components/Modales/cajas_modal.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }
    
    public function Actualizar() {
        $id = $_POST["id"];
        $caja = $_POST["caja"];

        $parametersText = "/^[A-Za-z0-9]/i";

        if (preg_match($parametersText, $caja)) {
            $caja = new Cajas($id, $caja, null);
            $tabla = $caja->Modificar();
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function ConfirmarEliminacion() {
        $id = $_GET["id"];

        $consulta = new Cajas($id, null, null);
        $con = $consulta->Buscar();

        if($con){
            require_once("vista\web\paginas\admin_components\Confirmaciones\confirm_cajas.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }

    public function Eliminar()
    {
        $id = $_GET["id"];

        $consulta = new Cajas($id, null, 2);
        $con = $consulta->Eliminar();

        $this->Estado();
    }
}
