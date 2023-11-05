<?php

require_once("Modelo\log_".$control.".php");

class CityControl
{
    public function Estado()
    {
        $ciudad = new Ciudades(null, null, null, null);
        $tabla = $ciudad->Mostrar();

        require_once("vista\web\paginas\admin_components\ciudades.php");
    }

    public function Agregar(){

        $ciudad = $_POST["ciudad"];
        $capital = $_POST["capital"];

        $parametersText = "/^[A-Za-z0-9]/i";

        if (preg_match($parametersText, $ciudad) and preg_match($parametersText, $capital)) {
            $ciudad = new Ciudades(null, $ciudad, $capital, null);
            $tabla = $ciudad->Agregar();
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function Actualizar(){

        $id = $_POST["id"];
        $ciudad = $_POST["ciudad"];
        $capital = $_POST["capital"];

        $parametersText = "/^[A-Za-z0-9]/i";

        if (preg_match($parametersText, $ciudad) and preg_match($parametersText, $capital)) {
            $ciudad = new Ciudades($id, $ciudad, $capital, null);
            $tabla = $ciudad->Modificar();
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function Editar(){
        $id = $_GET['id'];

        $consulta = new Ciudades($id, null, null, null);
        $con = $consulta->Buscar();

        if($con){
            require_once("vista\web\paginas\admin_components\Modales\ciudades_modal.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }

    public function Eliminar()
    {
        $id = $_GET["id"];

        $consulta = new Ciudades($id, null, null, 2);
        $con = $consulta->Eliminar();

        $this->Estado();
    }

    public function ConfirmarEliminacion()
    {
        $id = $_GET["id"];

        $consulta = new Ciudades($id, null, null, null);
        $con = $consulta->Buscar();

        if ($con) {
            require_once("vista\web\paginas\admin_components\Confirmaciones\confirm_ciudades.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }
}
