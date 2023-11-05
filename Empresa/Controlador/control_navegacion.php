<?php

/**
 * Summary of Paginas
 */
class Paginas
{
    /**
     * Summary of principal
     * @return void
     */
    public function principal()
    {
        include("Vista/Contenido/Empresa_init.php");
    }
    /**
     * Summary of mision
     * @return void
     */
    public function mision()
    {
        include("Vista/Contenido/Empresa_mision.php");
    }
    /**
     * Summary of vision
     * @return void
     */
    public function vision()
    {
        include("Vista/Contenido/Empresa_vision.php");
    }
    /**
     * Summary of login
     * @return void
     */
    public function login()
    {
        include("Vista/Contenido/Empresa_login.php");
    }
    /**
     * Summary of registro
     * @return void
     */
    public function registro()
    {
        include("Vista/Contenido/Empresa_login_registro.php");
    }

    public function registroAdmin()
    {
        include("Vista\Contenido\Formularios\Regis_admin.php");
    }
    public function registroModer()
    {
        include("Vista\Contenido\Formularios\Regis_moder.php");
    }
    public function registroUser()
    {
        include("Vista\Contenido\Formularios\Regis_user.php");
    }

    /**
     * Summary of cuentas
     * @return void
     */
    public function cuentas()
    {
        include("Vista/Contenido/cuentas.php");
    }
};
