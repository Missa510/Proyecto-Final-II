<?php

require_once("Modelo\log_".$control.".php");


class CargosControl
{
    public function Estado()
    {
        $cargo = new Cargos(null, null, null, null, null);
        $tabla = $cargo->Mostrar();

        require_once("vista\web\paginas\admin_components\cargos.php");
    }
    public function Agregar()
    {
        $cargo = $_POST['cargo'];
        $sueldo = $_POST['sueldo'];
        $descripcion = $_POST['descripcion'];

        $parametersText = "/^[A-Za-z0-9]/i";

        if (preg_match($parametersText, $cargo) and preg_match($parametersText, $descripcion)) {
            $cargo = new Cargos(null, $cargo, $sueldo, $descripcion, null);
            $tabla = $cargo->Agregar();
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function Actualizar()
    {
        $cargo = $_POST['cargo'];
        $sueldo = $_POST['sueldo'];
        $descripcion = $_POST['descripcion'];
        $id = $_POST["id"];

        $parametersText = "/^[A-Za-z0-9]/i";

        if (preg_match($parametersText, $cargo) and preg_match($parametersText, $descripcion)) {

            $cargo = new Cargos($id, $cargo, $sueldo, $descripcion, null);
            $tabla = $cargo->Modificar();
            $this->Estado();
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function Eliminar()
    {
        $id = $_GET["id"];

        $consulta = new Cargos($id, null, null, null, 2);
        $con = $consulta->Eliminar();

        $this->Estado();
    }

    public function Editar()
    {
        $id = $_GET["id"];

        $consulta = new Cargos($id, null, null, null, null);
        $con = $consulta->Buscar();

        if ($con) {
            require_once("vista\web\paginas\admin_components\Modales\cargos_modal.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }

    public function ConfirmarEliminacion()
    {
        $id = $_GET["id"];

        $consulta = new Cargos($id, null, null, null, null);
        $con = $consulta->Buscar();

        if ($con) {
            require_once("vista\web\paginas\admin_components\Confirmaciones\confirm_cargo.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }
}
