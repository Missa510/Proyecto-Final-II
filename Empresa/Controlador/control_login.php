<?php


class Login
{
    public function logear()
    {

        $name = htmlentities($_POST["sus"]);
        $pass = $_POST["pass"];
        $tipo = $_POST["tipo"];

        sleep(0.7);

        /* Administradores */
        if ($tipo == "Administrador") {
            require_once("Modelo/log_admin.php");

            #Instanciar la clase 
            $clase = new Administradores(NULL, $name, $pass, $tipo, NULL, null);
            $clase_login = $clase->LoginBuscar();

            $rows = mysqli_num_rows($clase_login); // Pasar por cada fila

            if ($rows) {
                session_start();
                include("Vista/Contenido/AdminSNJ.php");
            } else {
                include("Vista/Componentes/Errores/error_login.php");
            }
        } /* Moderadores */ elseif ($tipo == "Moderador") {
            require_once("Modelo/log_moders.php");

            $clase = new Moderadores(NULL, $name, $pass, $tipo, NULL);
            $clase_login = $clase->LoginBuscar();

            $rows = mysqli_num_rows($clase_login); // Pasar por cada fila

            if ($rows) {
                session_start();
                include("Vista/Contenido/ModerSNJ.php");
            } else {
                include("Vista/Componentes/Errores/error_login.php");
            }
        } /* Usuarios normales */ elseif ($tipo == "Usuario Corriente") {
            require_once("Modelo/log_users.php");

            $clase = new Usuarios(NULL, $name, $pass, $tipo, NULL);
            $clase_login = $clase->LoginBuscar();

            $rows = mysqli_num_rows($clase_login); // Pasar por cada fila

            if ($rows) {
                session_start();
                include("Vista/Contenido/UsuNomSNJ.php");
            } else {
                include("Vista/Componentes/Errores/error_login.php");
            }
        } else {
            include("Vista/Componentes/Errores/error_login.php");
        }
    }
};
