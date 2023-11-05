<?php

require_once("Modelo\log_administrador.php");

class AdministradorControl
{
    public function verificacion()
    {
        if(isset($_POST['Btn-2'])){ 
            $user = $_POST['user'];
            $password = $_POST['password'];

            $base = new Administrador(null, $user, $password, null);
            $base_consul = $base->Login();
            $base_consul_fila = $base->Login();
    
            $fila = $base_consul_fila->fetch_array();
            $veri = mysqli_num_rows($base_consul);
    
            if($veri == 1){
                $_SESSION['id_usu'] = $fila['id_admin'];
                header("location: ?control=administrador&&funcion=home");
            } else {
                require_once("vista/web/paginas/errors/error_login.php");
                require_once("vista\web\paginas\loginAdministrador.php");
            }
        }
    }
    
    public function home()
    {
        $base = new Administrador($_SESSION['id_usu'], null, null, null);
        $base_consul = $base->Buscar();

        $fila = $base_consul->fetch_array();

        require_once("vista\web\paginas\administrador.php");
    }

    public function login()
    {
        require_once("vista\web\paginas\loginAdministrador.php");
    }

    public function LogOut() {
        if(!empty($_SESSION["id_usu"])){
            session_destroy();
            session_unset();

            header("location: ?control=home&&funcion=principal");
        }
    }
}
