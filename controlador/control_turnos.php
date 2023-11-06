<?php

require_once("Modelo\log_$control.php");


class TurnosControl
{
    public function Estado()
    {
        $turnos = new Turnos(null, null, null, null, null);
        $tabla = $turnos->Mostrar();

        require_once("vista/web/paginas/admin_components/turnos.php");
    }

    public function Agregar() {
        $turno = $_POST["turno"];
        $hora_entrada = $_POST["entrada"];
        $hora_salida = $_POST["salida"];

        $parametersText = "/^[A-Za-z0-9]/i";

        if (preg_match($parametersText, $turno)) {
            $caja = new Turnos(null, $turno, $hora_entrada, $hora_salida, null);
            $tabla = $caja->Agregar();
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function Actualizar() {
        $id = $_POST["id"];
        $turno = $_POST["turno"];
        $hora_entrada = $_POST["entrada"];
        $hora_salida = $_POST["salida"];

        $parametersText = "/^[A-Za-z0-9]/i";

        if (preg_match($parametersText, $turno)) {
            $caja = new Turnos($id, $turno, $hora_entrada, $hora_salida, null);
            $tabla = $caja->Modifcar();
        } else {
            require_once("vista/web/paginas/errors/pregmatch.php");
        }
        $this->Estado();
    }

    public function Editar() {
        $id = $_GET["id"];
        
        $consulta = new Turnos($id, null, null, null, null);
        $con = $consulta->Buscar();
        
        if($con){
            require_once("vista/web/paginas/admin_components/Modales/turnos_modal.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }

    public function ConfirmarEliminacion() {
        $id = $_GET["id"];
        
        $consulta = new Turnos($id, null, null, null, null);
        $con = $consulta->Buscar();
        
        if($con){
            require_once("vista\web\paginas\admin_components\Confirmaciones\confirm_turnos.php");
        } else {
            require_once("vista/web/paginas/errors/data_unknown.php");
            $this->Estado();
        }
    }

    public function Eliminar()
    {
        $id = $_GET["id"];

        $consulta = new Turnos($id, null, null, null, 2);
        $con = $consulta->Eliminar();

        $this->Estado();
    }
}
