<?php

require_once("BasesDeDatos\conexion.php");

class EPS
{
    private $id_eps, $eps, $fkest, $datos;

    public function __construct($id, $EPS, $estado)
    {
        $this->id_eps = $id;
        $this->eps = $EPS;
        $this->fkest = $estado;
    }

    public function getIdeps()
    {
        return $this->id_eps;
    }
    public function getEps()
    {
        return $this->eps;
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
        $sql = "SELECT eps.id_eps, eps.eps, est.nom_est FROM EPS AS eps, Estado AS est WHERE eps.fkest = est.id_est;";

        #Procesar la consulta de datos
        $resuls_eps = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        # var_dump($resuls_eps, $sql);
        return $resuls_eps;
    }

    public function Agregar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "INSERT INTO EPS(eps, fkest) VALUES('{$this->getEps()}', 1);";

        #Procesar la consulta de datos
        $resuls_eps = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_eps;
    }
    public function Buscar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM EPS WHERE id_eps = {$this->getIdeps()} AND fkest = 1;";

        #Procesar la consulta de datos
        $resuls_eps = mysqli_query($conex_var, $sql);


        while ($registro = mysqli_fetch_array($resuls_eps)) {
            $this->datos[] = $registro;
        }

        return $this->datos;

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
    }
    public function Modificar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE EPS SET eps = '{$this->getEps()}' WHERE id_eps = {$this->getIdeps()};";

        #Procesar la consulta de datos
        $resuls_eps = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta 
        #var_dump($resuls_eps, $sql);
        return $resuls_eps;
    }

    public function Eliminar(){
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE EPS SET fkest = {$this->getEstado()} WHERE id_eps = {$this->getIdeps()};";

        #var_dump($sql);
        #Procesar la consulta de datos
        $resuls_eps = mysqli_query($conex_var, $sql);

        # Retornar el valor de la consulta
        # echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_eps;
    }
}