<?php

require_once("Modelo\log_" . $control . ".php");
require_once("Modelo\log_tipo.php");
/**
 * Summary of ClientesControl
 */
class ClientesControl
{
    /**
     * Summary of Estado
     * @return void
     */
    public function Estado()
    {
        $cliente = new Clientes(null, null, null, null, null, null, null, null, null);
        $tabla = $cliente->Mostrar();

        $tipo = new TipoDNI(null, null, null);
        $select = $tipo->Mostrar();

        require_once("vista\web\paginas\admin_components\clientes.php");
    }
    /**
     * Summary of Agregar
     * @return void
     */
    public function Agregar()
    {
        $tipo = $_POST['tipo'];
        $DNI = $_POST['DNI'];
        $apellido = $_POST['apellido'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];

        $parametersText = "/^[A-Za-z0-9]/i";

        if (preg_match($parametersText, $apellido) and preg_match($parametersText, $nombre)) {

            $clientes = new Clientes(null, $tipo, $DNI, null, null, null, null, $email, null);
            $coinsidenciaDNI = $clientes->VerificarIdentidadSinID();
            $coinsidenciaEmail = $clientes->VerificarEmailSinID();

            if ($coinsidenciaDNI) {
                require_once("vista\web\paginas\admin_components\Specifics_errors\dni_igual_clientes.php");
            } else if ($coinsidenciaEmail) {
                require_once("vista/web/paginas/admin_components/Specifics_errors/email_igual_clientes.php");
            } else {
                $clientes = new Clientes(null, $tipo, $DNI, $nombre, $apellido, $telefono, $direccion, $email, null);
                $tabla = $clientes->Agregar();
            }
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function Actualizar()
    {
        $id = $_POST['id'];
        $tipo = $_POST['tipo'];
        $DNI = $_POST['dni'];
        $apellido = $_POST['apellido'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];

        $parametersText = "/^[A-Za-z0-9]/i";

        if (preg_match($parametersText, $apellido) and preg_match($parametersText, $nombre)) {

            $clientes = new Clientes($id, $tipo, $DNI, null, null, null, null, $email, null);
            $coinsidenciaDNI = $clientes->VerificarIdentidad();
            $coinsidenciaEmail = $clientes->VerificarEmail();

            if ($coinsidenciaDNI) {
                require_once("vista\web\paginas\admin_components\Specifics_errors\dni_igual_clientes.php");
            } else if ($coinsidenciaEmail) {
                require_once("vista/web/paginas/admin_components/Specifics_errors/email_igual_clientes.php");
            } else {
                $clientes = new Clientes($id, $tipo, $DNI, $nombre, $apellido, $telefono, $direccion, $email, null);
                $tabla = $clientes->Modificar();
            }
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function Eliminar()
    {
        $id = $_GET["id"];

        $consulta = new Clientes($id, null, null, null, null, null, null, null, 2);
        $con = $consulta->Eliminar();

        $this->Estado();
    }

    public function Editar()
    {
        $id = $_GET['id'];

        $consulta = new Clientes($id, null, null, null, null, null, null, null, null);
        $con = $consulta->Buscar();

        $tipo = new TipoDNI(null, null, null);
        $select = $tipo->Mostrar();

        if ($con) {
            require_once("vista\web\paginas\admin_components\Modales\clientes_modal.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }

    public function ConfirmarEliminacion()
    {
        $id = $_GET['id'];

        $consulta = new Clientes($id, null, null, null, null, null, null, null, null);
        $con = $consulta->Buscar();

        if ($con) {
            require_once("vista\web\paginas\admin_components\Confirmaciones\confirm_clientes.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }

    public function Busqueda()
    {

        $query = $_POST["query"];

        $type = $_POST["type"];

        $cliente = match ($type) {
            'TipoDNI' => new Clientes(null, $query, null, null, null, null, null, null, null),
            'dni' => new Clientes(null, null, $query, null, null, null, null, null, null),
            'apellido' => new Clientes(null, null, null, null, $query, null, null, null, null),
            'nombre' => new Clientes(null, null, null, $query, null, null, null, null, null),
            'telefono' => new Clientes(null, null, null, null, null, $query, null, null, null),
            'email' => new Clientes(null, null, null, null, null, null, null, $query, null),
            'direccion' => new Clientes(null, null, null, null, null, null, $query, null, null)
        };

        $tabla = $cliente->ConsultaString();

        if (mysqli_fetch_row($tabla)) {

            $tipo = new TipoDNI(null, null, null);
            $select = $tipo->Mostrar();

            require_once("vista\web\paginas\admin_components\clientes.php");

        } else {

            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }
}