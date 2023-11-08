<?php

require_once("Modelo\log_$control.php");

class TipoDNIControl{
    public function Estado(){
        
        $tipo = new TipoDNI(null, null, null);
        $tabla = $tipo->Mostrar();

        require_once("vista/web/paginas/admin_components/tipo.php");
    }

    public function Editar()
    {
        $id = $_GET["id"];

        $consulta = new TipoDNI($id, null, null);
        $con = $consulta->Buscar();
        
        if($con){
            require_once("vista/web/paginas/admin_components/Modales/tipo_modal.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }

    public function Actualizar()
    {
        $id = $_POST["id"];
        $iniciales = $_POST["iniciales"];
        $tipo = $_POST["tipo"];

        $parametersText = "/^[A-Za-z0-9]/i";

        if (preg_match($parametersText, $iniciales) and preg_match($parametersText, $tipo)) {
            $caja = new TipoDNI($id, $iniciales, $tipo);
            $tabla = $caja->Modificar();
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function Agregar()
    {
        $iniciales = $_POST["iniciales"];
        $tipo = $_POST["tipo"];

        $parametersText = "/^[A-Za-z0-9]/i";

        if (preg_match($parametersText, $iniciales) and preg_match($parametersText, $tipo)) {
            $caja = new TipoDNI(null, $iniciales, $tipo);
            $tabla = $caja->Agregar();
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }
}