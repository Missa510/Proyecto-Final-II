<?php

require_once("BasesDeDatos\conexion.php");

class Turnos
{
    private $id_turno, $turno, $entrada, $salida, $fkest, $datos;

    public function __construct($id, $turno, $hora_entrada, $hora_salida, $estado)
    {
        $this->id_turno = $id;
        $this->turno = $turno;
        $this->entrada = $hora_entrada;
        $this->salida = $hora_salida;
        $this->fkest = $estado;
    }

    public function getIdTurno()
    {
        return $this->id_turno;
    }
    public function getTurno()
    {
        return $this->turno;
    }
    public function getHoraentrada()
    {
        return $this->entrada;
    }
    public function getHorasalida()
    {
        return $this->salida;
    }
    public function getEstado()
    {
        return $this->fkest;
    }
    

    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT turn.id_turnos, turn.nom_turno, turn.entrada, turn.salida, est.nom_est FROM Turnos AS turn, Estado AS est WHERE turn.fkest = est.id_est ORDER BY turn.id_turnos ASC;";

        #Procesar la consulta de datos
        $resuls_turnos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_turnos;
    }

    public function MostrarHabilitados()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Turnos WHERE fkest = 1;";

        #Procesar la consulta de datos
        $resuls_turnos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_turnos;
    }

    public function Agregar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "INSERT INTO Turnos(nom_turno, entrada, salida, fkest) VALUES('{$this->getTurno()}', '{$this->getHoraentrada()}', '{$this->getHorasalida()}', 1);";

        #Procesar la consulta de datos
        $resuls_turnos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_turnos;
    }

    public function Modifcar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE Turnos SET nom_turno = '{$this->getTurno()}', entrada = '{$this->getHoraentrada()}', salida = '{$this->getHorasalida()}' WHERE id_turnos = '{$this->getIdTurno()}';";

        #Procesar la consulta de datos
        $resuls_turnos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_turnos;
    }

    public function Eliminar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE Turnos SET fkest = '{$this->getEstado()}' WHERE id_turnos = '{$this->getIdTurno()}';";

        #Procesar la consulta de datos
        $resuls_turnos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_turnos;
    }

    public function Buscar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Turnos WHERE id_turnos = '{$this->getIdTurno()}';";

        #Procesar la consulta de datos
        $resuls_turnos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        while ($registro = mysqli_fetch_array($resuls_turnos)) {
            $this->datos[] = $registro;
        }

        return $this->datos;
    }
}
