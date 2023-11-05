<?php

require_once("Modelo\log_".$control.".php");

require_once("Modelo\log_ciudades.php");

class SedesControl
{
    public function Estado()
    {
        $sedes = new Sedes(null, null, null, null, null);
        $tabla = $sedes->Mostrar();

        $ciudades = new Ciudades(null, null, null, null);
        $checkBox = $ciudades->Seleccionar();

        require_once("vista\web\paginas\admin_components\sedes.php");
    }

    public function Agregar()
    {
        $sede = $_POST["sede"];
        $ciudad = $_POST["ciudad"];
        $direccion = $_POST["direccion"];

        $parametersText = "/^[A-Za-z0-9]/i";

        if (preg_match($parametersText, $sede) and preg_match($parametersText, $direccion)) {
            $sedes = new Sedes(null, $sede, $direccion, $ciudad, null);
            $tabla = $sedes->Agregar();
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function Actualizar()
    {
        $id = $_POST["id"];
        $sede = $_POST["sede"];
        $ciudad = $_POST["ciudad"];
        $direccion = $_POST["direccion"];

        $parametersText = "/^[A-Za-z0-9]/i";

        if (preg_match($parametersText, $sede) and preg_match($parametersText, $direccion)) {
            $sedes = new Sedes($id, $sede, $direccion, $ciudad, null);
            $tabla = $sedes->Modificar();
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();    
    }

    public function Eliminar()
    {
        $id = $_GET["id"];

        $consulta = new Sedes($id, null, null, null, 2);
        $con = $consulta->Eliminar();

        $this->Estado();
    }

    public function Editar()
    {
        $id = $_GET['id'];

        $consulta = new Sedes($id, null, null, null, null);
        $con = $consulta->Buscar();

        $ciudades = new Ciudades(null, null, null, null);
        $checkBox = $ciudades->Seleccionar();

        if ($con) {
            require_once("vista\web\paginas\admin_components\Modales\sedes_modal.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }

    public function ConfirmarEliminacion()
    {
        $id = $_GET['id'];

        $consulta = new Sedes($id, null, null, null, null);
        $con = $consulta->Buscar();

        if ($con) {
            require_once("vista\web\paginas\admin_components\Confirmaciones\confirm_sedes.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }
}
