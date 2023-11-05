<?php

require_once("BasesDeDatos\conexion.php");

class Estados
{
    private $id_estado, $estado, $datos;

    public function __construct($id, $estado)
    {
        $this->id_estado = $id;
        $this->estado = $estado;
    }

    public function getId_stado()
    {
        return $this->id_estado;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function Mostrar()
    {

        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Estado;";

        #Procesar la consulta de datos
        $resuls_estados = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        # var_dump($resuls_estados, $sql);
        return $resuls_estados;
    }
}
