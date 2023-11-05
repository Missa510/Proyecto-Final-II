<?php

class Eliminar
{
    public function eliminar()
    {
        if ($_GET["type"] == "Admin") {

            require_once("Modelo/log_admin.php");

            $ID = $_GET["id_admin"];

            require_once("Vista\Componentes\PartesDePagina\advertencia_admin.php");

        } else if ($_GET["type"] == "Moder") {

            require_once("Modelo/log_moders.php");

            $ID = $_GET["id_mod"];

            require_once("Vista\Componentes\PartesDePagina\advertencia_moder.php");

        } else if ($_GET["type"] == "User") {

            require_once("Modelo/log_users.php");

            $ID = $_GET["id_usu"];

            require_once("Vista\Componentes\PartesDePagina\advertencia_user.php");

        }
    }
    public function confirmacion()
    {
        $ID = $_GET["id"];
        
        if ($_GET["type"] == "Admin") {

            if ( isset($_POST["Acpetar"]) ) {
                require_once("Modelo\log_admin.php");

                $delete = new Administradores($ID, NULL, NULL, NULL, 2, NULL);
                $delete_fun = $delete->Eliminar();

                require_once("Vista/Componentes/eliminacion_finalizada.php");
                require_once("Vista\Contenido\Empresa_login.php");

            } else {
                require_once("Vista\Contenido\AdminSNJ.php");
            }
        } else if ($_GET["type"] == "Moder") {

            if ( isset($_POST["Acpetar"]) ) {
                require_once("Modelo\log_moders.php");

                $delete = new Moderadores($ID, NULL, NULL, NULL, 2);
                $delete_fun = $delete->Eliminar();

                require_once("Vista/Componentes/eliminacion_finalizada.php");
                require_once("Vista\Contenido\Empresa_login.php");

            } else {
                require_once("Vista\Contenido\AdminSNJ.php");
            }
        } else if ($_GET["type"] == "User") {
            if ( isset($_POST["Acpetar"]) ) {
                require_once("Modelo\log_users.php");

                $delete = new Usuarios($ID, NULL, NULL, NULL, 2);
                $delete_fun = $delete->Eliminar();

                require_once("Vista/Componentes/eliminacion_finalizada.php");
                require_once("Vista\Contenido\Empresa_login.php");

            } else {
                echo "OK :)";
            }
        }
    }
}