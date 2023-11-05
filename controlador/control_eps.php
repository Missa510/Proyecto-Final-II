<?php

require_once("Modelo\log_".$control.".php");


class EPSControl
{
    public function Estado()
    {
        $eps = new EPS(null, null, null);
        $tabla = $eps->Mostrar();

        require_once("vista/web/paginas/admin_components/eps.php");
    }
    public function Agregar() {
        $eps = $_POST["eps"];

        $parametersText = "/^[A-Za-z0-9]/i";

        if (preg_match($parametersText, $eps)) {
            $eps = new EPS(null, $eps, null);
            $tabla = $eps->Agregar();
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function Editar() {
        $id = $_GET["id"];
        
        $consulta = new EPS($id, null, null);
        $con = $consulta->Buscar();
        
        if($con){
            require_once("vista/web/paginas/admin_components/Modales/eps_modal.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }
    
    public function Actualizar() {
        $id = $_POST["id"];
        $eps = $_POST["eps"];

        $parametersText = "/^[A-Za-z0-9]/i";

        if (preg_match($parametersText, $eps)) {
            $eps = new EPS($id, $eps, null);
            $tabla = $eps->Modificar();
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function ConfirmarEliminacion() {
        $id = $_GET["id"];

        $consulta = new EPS($id, null, null);
        $con = $consulta->Buscar();

        if($con){
            require_once("vista\web\paginas\admin_components\Confirmaciones\confirm_eps.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }

    public function Eliminar()
    {
        $id = $_GET["id"];

        $consulta = new EPS($id, null, 2);
        $con = $consulta->Eliminar();

        $this->Estado();
    }
}
