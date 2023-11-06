<?php

require_once("BasesDeDatos/conexion.php");
class Sedes
{
    private $Id_sed, $nom_sed, $direc_sed, $fkciudad, $fkest, $datos;

    public function __construct($id, $nombre, $direccion, $ciudad, $estado)
    {
        $this->Id_sed = $id;
        $this->nom_sed = $nombre;
        $this->direc_sed = $direccion;
        $this->fkciudad = $ciudad;
        $this->fkest = $estado;
    }

    # Métodos get
    public function getId_sed()
    {
        return $this->Id_sed;
    }
    public function getNom_sed()
    {
        return $this->nom_sed;
    }
    public function getDirec_sed()
    {
        return $this->direc_sed;
    }
    public function getCiudad()
    {
        return $this->fkciudad;
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
        $sql = "SELECT sed.id_sede, sed.nom_sed, sed.direc_sed, ciu.nom_ciu, est.nom_est FROM Sedes as sed, Ciudades as ciu, Estado as est WHERE sed.fkciudad = ciu.id_ciu AND sed.fkest = est.id_est ORDER BY sed.id_sede ASC;";

        #Procesar la consulta de datos
        $resuls_sedes = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_sedes);
        return $resuls_sedes;
    }

    public function MostrarHabilitadas()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Sedes WHERE fkest = 1;";

        #Procesar la consulta de datos
        $resuls_sedes = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_sedes);
        return $resuls_sedes;
    }

    public function Agregar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "INSERT INTO Sedes(nom_sed, direc_sed, fkciudad, fkest) VALUES('{$this->getNom_sed()}', '{$this->getDirec_sed()}', {$this->getCiudad()}, 1);";

        #Procesar la consulta de datos
        $resuls_sedes = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_sedes);
        return $resuls_sedes;
    }

    public function Buscar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Sedes WHERE id_sede = {$this->getId_sed()};";

        #Procesar la consulta de datos
        $resuls_sedes = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_sedes);
        while ($registro = mysqli_fetch_array($resuls_sedes)) {
            $this->datos[] = $registro;
        }

        return $this->datos;
    }

    public function Eliminar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE Sedes SET fkest = {$this->getEstado()} WHERE id_sede = {$this->getId_sed()};";

        #Procesar la consulta de datos
        #var_dump($sql);
        $resuls_sedes = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        return $resuls_sedes;
    }

    public function Modificar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE Sedes SET nom_sed = '{$this->getNom_sed()}', direc_sed = '{$this->getDirec_sed()}', fkciudad = {$this->getCiudad()} WHERE id_sede = {$this->getId_sed()};";

        #Procesar la consulta de datos
        #var_dump($sql);
        $resuls_sedes = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        return $resuls_sedes;
    }
}
