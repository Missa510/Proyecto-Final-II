<?php

class Modify
{
    public function modificar()
    {
        #Controlador de niveles
        $type = $_GET["type"];

        #Administradores
        if ($type == "Admin") {

            require_once("Modelo\log_admin.php");

            $idAdmin = $_GET["id_admin"];

            $modify = new Administradores($idAdmin, NULL, NULL, NULL, NULL, NULL);
            $rep = $modify->Buscar();

            require_once("Vista\Contenido\Formularios\Mod_admin.php");
        } /* Moderadores */ elseif ($type == "Moder") {

            require_once("Modelo\log_moders.php");

            $idMod = $_GET["id_mod"];

            $modify = new Moderadores($idMod, NULL, NULL, NULL, NULL);
            $rep = $modify->Buscar();

            require_once("Vista\Contenido\Formularios\Mod_moder.php");
        } /* Usuarios normales */ elseif ($type == "User") {

            require_once("Modelo\log_users.php");

            $idUsu = $_GET["id_usu"];

            $modify = new Usuarios($idUsu, NULL, NULL, NULL, NULL);
            $rep = $modify->Buscar();

            require_once("Vista\Contenido\Formularios\Mod_user.php");
        }
    }
    public function actualizar()
    {
        $nom = $_POST["sus"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];
        $tipo = $_POST["tipo"];
        $id = $_POST["id"];

        if ($tipo == "Administrador") {
            
            require_once("Modelo\log_admin.php");

            $datosAct = new Administradores($id, $nom, $pass, $email, NULL);
            $datosActFunc = $datosAct->Actualizar();

            if($datosActFunc){
                require_once("Vista\Componentes\actualizacion_finalizada.php");
                require_once("Vista\Contenido\Empresa_login.php");
            } else {
                echo "<script>alert('Error, no se pudo actualizar el usuario ".$nom." :(')</script>";
            }

        } elseif ($tipo == "Moderador") {
            
            require_once("Modelo\log_moders.php");

            $datosAct = new Moderadores($id, $nom, $pass, $email, NULL);
            $datosActFunc = $datosAct->Actualizar();

            if($datosActFunc){
                require_once("Vista\Componentes\actualizacion_finalizada.php");
                require_once("Vista\Contenido\Empresa_login.php");
            } else {
                echo "<script>alert('Error, no se pudo actualizar el usuario ".$nom." :(')</script>";
            }

        } elseif ($tipo == "Usuario Corriente") {
            
            require_once("Modelo\log_users.php");

            $datosAct = new Usuarios($id, $nom, $pass, $email, NULL);
            $datosActFunc = $datosAct->Actualizar();

            if($datosActFunc){
                require_once("Vista\Componentes\actualizacion_finalizada.php");
                require_once("Vista\Contenido\Empresa_login.php");
            } else {
                echo "<script>alert('Error, no se pudo actualizar el usuario ".$nom." :(')</script>";
            }

        }
    }
};
