<?php

require_once("BasesDeDatos/conexion.php");
class Ciudades
{
    private $Id_ciu, $nom_ciu, $capital_ciudades, $fkest, $datos;

    public function __construct($id, $nombre, $capital, $estado)
    {
        $this->Id_ciu = $id;
        $this->nom_ciu = $nombre;
        $this->capital_ciudades = $capital;
        $this->fkest = $estado;
    }

    # Métodos get
    public function getId_ciu()
    {
        return $this->Id_ciu;
    }
    public function getNom_ciu()
    {
        return $this->nom_ciu;
    }
    public function getCapital()
    {
        return $this->capital_ciudades;
    }
    public function getEstado()
    {
        return $this->fkest;
    }
    # Métodos set

    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT ciu.id_ciu, ciu.nom_ciu, ciu.capital_ciudad, est.nom_est FROM Ciudades AS ciu, Estado as est WHERE ciu.fkest = est.id_est;";

        #Procesar la consulta de datos
        $resuls_ciudades = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_ciudades;
    }

    public function Seleccionar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Ciudades WHERE fkest = 1;";

        #Procesar la consulta de datos
        $resuls_ciudades = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_ciudades);

        return $resuls_ciudades;
    }

    public function Agregar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "INSERT INTO Ciudades(nom_ciu, capital_ciudad, fkest) VALUE ('{$this->getNom_ciu()}', '{$this->getCapital()}', 1);";

        #Procesar la consulta de datos
        $resuls_ciudades = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_ciudades);

        return $resuls_ciudades;
    }

    public function Buscar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Ciudades WHERE id_ciu = {$this->getId_ciu()} AND fkest = 1;";

        #Procesar la consulta de datos
        $resuls_ciudades = mysqli_query($conex_var, $sql);

        # Retornar el valor de la consulta
        #var_dump($resuls_ciudades);  

        while ($registro = mysqli_fetch_array($resuls_ciudades)) {
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
        $sql = "UPDATE Ciudades SET nom_ciu = '{$this->getNom_ciu()}', capital_ciudad = '{$this->getCapital()}' WHERE id_ciu = {$this->getId_ciu()};";

        # var_dump($sql);
        #Procesar la consulta de datos
        $resuls_ciudades = mysqli_query($conex_var, $sql);

        # Retornar el valor de la consulta
        # var_dump($sql);   
        return $resuls_ciudades;
    }

    public function Eliminar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE Ciudades SET fkest = {$this->getEstado()} WHERE id_ciu = {$this->getId_ciu()};";

        # var_dump($sql);
        # Procesar la consulta de datos
        $resuls_ciudades = mysqli_query($conex_var, $sql);

        # Retornar el valor de la consulta
        # echo '<p class="fs-5">' . $sql . '</p>';
        return $resuls_ciudades;
    }
}