<?php

require_once("Modelo\log_".$control.".php");


class EstadosControl
{
    public function Estado()
    {
        $empleado = new Estados(null, null);
        $tabla = $empleado->Mostrar();

        require_once("vista/web/paginas/admin_components/estados.php");
    }
}