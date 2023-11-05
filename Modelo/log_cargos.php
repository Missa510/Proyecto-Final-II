<?php

require_once("BasesDeDatos/conexion.php");

class Cargos
{
    private $id_car, $cargo, $sueldo, $descrip_cargo, $fkest, $datos;

    public function __construct($id, $cargo, $sueldo, $descripcion, $estado)
    {
        $this->id_car = $id;
        $this->cargo = $cargo;
        $this->sueldo = $sueldo;
        $this->descrip_cargo = $descripcion;
        $this->fkest = $estado;
    }

    public function getIdcargo()
    {
        return $this->id_car;
    }
    public function getCargo()
    {
        return $this->cargo;
    }
    public function getSueldo()
    {
        return $this->sueldo;
    }
    public function getDescripcion()
    {
        return $this->descrip_cargo;
    }
    public function getEstado(){
        return $this->fkest;
    }
    
    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT crg.id_cargo, crg.sueldo, crg.cargo, crg.descrip_cargo, est.nom_est FROM Cargos as crg, Estado as est WHERE crg.fkest = est.id_est;";

        #Procesar la consulta de datos
        $resuls_cargos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_cargos;
    }
    public function Agregar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "INSERT INTO Cargos(cargo, sueldo, descrip_cargo, fkest) VALUES ('{$this->getCargo()}', {$this->getSueldo()}, '{$this->getDescripcion()}', 1);";

        #Procesar la consulta de datos
        $resuls_cargos = mysqli_query($conex_var, $sql);

        # Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_cargos;
    }

    public function Buscar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Cargos WHERE id_cargo = {$this->getIdcargo()} AND fkest = 1;";

        #Procesar la consulta de datos
        $resuls_cargos = mysqli_query($conex_var, $sql);

        # Retornar el valor de la consulta
        # var_dump($resuls_cargos);  
        
        while ($registro = mysqli_fetch_array($resuls_cargos)) {
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
        $sql = "UPDATE Cargos SET cargo = '{$this->getCargo()}', sueldo = {$this->getSueldo()}, descrip_cargo = '{$this->getDescripcion()}' WHERE id_cargo = {$this->getIdcargo()};";

        # var_dump($sql);
        #Procesar la consulta de datos
        $resuls_cargos = mysqli_query($conex_var, $sql);

        # Retornar el valor de la consulta
        # echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_cargos;
    }

    public function Eliminar(){
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE Cargos SET fkest = 2 WHERE id_cargo = {$this->getIdcargo()};";

        # var_dump($sql);
        #Procesar la consulta de datos
        $resuls_cargos = mysqli_query($conex_var, $sql);

        # Retornar el valor de la consulta
        # echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_cargos;
    }
};