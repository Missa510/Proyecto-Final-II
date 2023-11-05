<?php

require_once("Modelo\log_".$control.".php");


class TurnosControl
{
    public function Estado()
    {
        $turnos = new Turnos(null, null, null);
        $tabla = $turnos->Mostrar();

        require_once("vista/web/paginas/admin_components/turnos.php");
    }
}
