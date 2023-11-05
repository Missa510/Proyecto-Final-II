<?php

require_once("BasesDeDatos/conexion.php");

class Proveedores
{
    private $Id_prov, $nom_prov, $tel_prov, $mail_prov, $direc_prov, $fkest, $datos;

    public function __construct($id, $proovedores, $telefonos, $mail, $direccion, $estado)
    {
        $this->Id_prov = $id;
        $this->nom_prov = $proovedores;
        $this->tel_prov = $telefonos;
        $this->mail_prov = $mail;
        $this->direc_prov = $direccion;
        $this->fkest = $estado;
    }

    #Métodos get
    public function getId_prov()
    {
        return $this->Id_prov;
    }
    public function getNom_prov()
    {
        return $this->nom_prov;
    }
    public function getTel_prov()
    {
        return $this->tel_prov;
    }
    public function getMail_prov()
    {
        return $this->mail_prov;
    }
    public function getDirec_prov()
    {
        return $this->direc_prov;
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
        $sql = "SELECT prov.id_prov, prov.nom_prov, prov.tel_prov, prov.mail_prov, prov.direc_prov, est.nom_est FROM Proveedores AS prov, Estado AS est WHERE prov.fkest = est.id_est;";

        #Procesar la consulta de datos
        $resuls_proveedores = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_proveedores;
    }

    public function MostrarHabilitados()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Proveedores WHERE fkest = 5;";

        #Procesar la consulta de datos
        $resuls_proveedores = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_proveedores;
    }

    public function Modificar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE Proveedores SET nom_prov = '{$this->getNom_prov()}', tel_prov = '{$this->getTel_prov()}', mail_prov = '{$this->getMail_prov()}', direc_prov = '{$this->getDirec_prov()}' WHERE id_prov = '{$this->getId_prov()}';";

        #Procesar la consulta de datos
        $resuls_proveedores = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_proveedores);
        return $resuls_proveedores;
    }

    public function Eliminar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE Proveedores SET fkest = '{$this->getEstado()}' WHERE id_prov = '{$this->getId_prov()}';";

        #Procesar la consulta de datos
        $resuls_proveedores = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_proveedores);
        return $resuls_proveedores;
    }

    public function Agregar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "INSERT INTO Proveedores(nom_prov, tel_prov, mail_prov, direc_prov, fkest) VALUES('{$this->getNom_prov()}', '{$this->getTel_prov()}', '{$this->getMail_prov()}', '{$this->getDirec_prov()}', 5);";

        #Procesar la consulta de datos
        $resuls_proveedores = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_proveedores);
        return $resuls_proveedores;
    }

    public function Buscar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Proveedores WHERE id_prov = '{$this->getId_prov()}';";

        #Procesar la consulta de datos
        $resuls_proveedores = mysqli_query($conex_var, $sql);

        while ($registro = mysqli_fetch_array($resuls_proveedores)) {
            $this->datos[] = $registro;
        }

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $this->datos;
    }
}
