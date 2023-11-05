<?php

require_once("Modelo\log_".$control.".php");


class TipoDNIControl{
    public function Estado(){
        
        $tipo = new TipoDNI(null, null, null);
        $tabla = $tipo->Mostrar();

        require_once("vista/web/paginas/admin_components/tipo.php");
    }
}