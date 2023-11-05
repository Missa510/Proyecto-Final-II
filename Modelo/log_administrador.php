<?php

require_once("BasesDeDatos\conexion.php");

class Administrador
{
    private $id, $user, $password, $email;

    public function __construct($id, $user, $password, $email)
    {
        $this->id = $id;
        $this->user = $user;
        $this->password = $password;
        $this->email = $email;
    }

    public function getID()
    {
        return $this->id;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function Login(){
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conexUsuarios();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Administradores WHERE nom_admin = '{$this->getUser()}' AND pass_admin = '{$this->getPassword()}' AND fkestado = 1";

        #Procesar la consulta de datos
        $resuls_users = mysqli_query($conex_var, $sql);

        # Retornar el valor de la consulta
        # var_dump($resuls_users, $sql);

        return $resuls_users;
    }

    public function Buscar(){
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conexUsuarios();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Administradores WHERE id_admin = {$this->getID()}";

        #Procesar la consulta de datos
        $resuls_users = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        # var_dump($resuls_users, $sql);

        return $resuls_users;
    }
};
