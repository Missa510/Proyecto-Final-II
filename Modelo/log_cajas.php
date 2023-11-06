<?php

require_once("BasesDeDatos\conexion.php");

class Cajas
{
    private $id_caja, $caja, $fkest, $datos;

    public function __construct($id, $caja, $estado)
    {
        $this->id_caja = $id;
        $this->caja = $caja;
        $this->fkest = $estado;
    }

    public function getIdcaja()
    {
        return $this->id_caja;
    }
    public function getcaja()
    {
        return $this->caja;
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
        $sql = "SELECT caja.id_caja, caja.caja, est.nom_est FROM cajadecompensacion AS caja, Estado AS est WHERE caja.fkest = est.id_est;";

        #Procesar la consulta de datos
        $resuls_caja = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        # var_dump($resuls_caja, $sql);
        return $resuls_caja;
    }

    public function Agregar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "INSERT INTO cajadecompensacion(caja, fkest) VALUES('{$this->getcaja()}', 1);";

        #Procesar la consulta de datos
        $resuls_caja = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_caja;
    }
    public function Buscar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM cajadecompensacion WHERE id_caja = {$this->getIdcaja()} AND fkest = 1;";

        #Procesar la consulta de datos
        $resuls_caja = mysqli_query($conex_var, $sql);
        
        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        while ($registro = mysqli_fetch_array($resuls_caja)) {
            $this->datos[] = $registro;
        }

        return $this->datos;
    }
    public function Modificar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE cajadecompensacion SET caja = '{$this->getcaja()}' WHERE id_caja = {$this->getIdcaja()};";

        #Procesar la consulta de datos
        $resuls_caja = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta 
        #var_dump($resuls_caja, $sql);
        return $resuls_caja;
    }

    public function Eliminar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE cajadecompensacion SET fkest = {$this->getEstado()} WHERE id_caja = {$this->getIdcaja()};";

        #var_dump($sql);
        #Procesar la consulta de datos
        $resuls_caja = mysqli_query($conex_var, $sql);

        # Retornar el valor de la consulta
        # echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_caja;
    }
}