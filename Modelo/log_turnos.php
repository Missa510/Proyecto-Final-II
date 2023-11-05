<?php

require_once("BasesDeDatos\conexion.php");

class Turnos
{
    private $id_turno, $entrada, $salida, $datos;

    public function __construct($id, $hora_entrada, $hora_salida)
    {
        $this->id_turno = $id;
        $this->entrada = $hora_entrada;
        $this->salida = $hora_salida;
    }

    public function getIdTurno()
    {
        return $this->id_turno;
    }
    public function getHoraentrada()
    {
        return $this->entrada;
    }
    public function getHorasalida()
    {
        return $this->salida;
    }
    

    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Turnos;";

        #Procesar la consulta de datos
        $resuls_turnos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_turnos;
    }
}
