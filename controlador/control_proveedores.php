<?php

require_once("Modelo\log_" . $control . ".php");

class ProveedoresControl
{
    public function Estado()
    {
        $proveedores = new Proveedores(null, null, null, null, null, null);
        $tabla = $proveedores->Mostrar();

        require_once("vista\web\paginas\admin_components\proveedores.php");
    }

    public function Agregar()
    {
        $proveedor = $_POST["proveedor"];
        $telefono = $_POST["telefono"];
        $mail = $_POST["mail"];
        $direccion = $_POST["direccion"];

        $parametersText = "/^[A-Za-z0-9]/i";
        $parametersNumber = "/^[0-9]/i";

        if (preg_match($parametersText, $proveedor) and preg_match($parametersNumber, $telefono)) {
            $proveedores = new Proveedores(null, $proveedor, $telefono, $mail, $direccion, null);
            $tabla = $proveedores->Agregar();
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function Editar()
    {
        $id = $_GET['id'];

        $consulta = new Proveedores($id, null, null, null, null, null);
        $con = $consulta->Buscar();

        if ($con) {
            require_once("vista\web\paginas\admin_components\Modales\proveedores_modal.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }

    public function ConfirmarEliminacion()
    {
        $id = $_GET['id'];

        $consulta = new Proveedores($id, null, null, null, null, null);
        $con = $consulta->Buscar();

        if ($con) {
            require_once("vista\web\paginas\admin_components\Confirmaciones\confirm_proveedor.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }

    public function Eliminar()
    {
        $id = $_GET["id"];

        $consulta = new Proveedores($id, null, null, null, null, 11);
        $con = $consulta->Eliminar();

        $this->Estado();
    }

    public function Actualizar()
    {
        $id = $_POST['id'];
        $proveedor = $_POST["proveedor"];
        $telefono = $_POST["telefono"];
        $mail = $_POST["mail"];
        $direccion = $_POST["direccion"];

        $parametersText = "/^[A-Za-z0-9]/i";
        $parametersNumber = "/^[0-9]/i";

        if (preg_match($parametersText, $proveedor) and preg_match($parametersNumber, $telefono)) {
            $proveedores = new Proveedores($id, $proveedor, $telefono, $mail, $direccion, null);
            $tabla = $proveedores->Modificar();
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }
}
