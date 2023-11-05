<?php

require_once("BasesDeDatos/conexion.php");
class Clientes
{
    private $Id_cli, $fktipo, $dni_cli, $nom_cli, $ape_cli, $tel_cli, $direc_cli, $mail_cli, $fkest, $datos;

    public function __construct($id, $tipo_de_documento, $dni, $nombre, $apellido, $telefono, $direccion, $mail, $estado)
    {
        $this->Id_cli = $id;
        $this->fktipo = $tipo_de_documento;
        $this->dni_cli = $dni;
        $this->nom_cli = $nombre;
        $this->ape_cli = $apellido;
        $this->tel_cli = $telefono;
        $this->direc_cli = $direccion;
        $this->mail_cli = $mail;
        $this->fkest = $estado;
    }

    #Métodos get
    public function getId_cli()
    {
        return $this->Id_cli;
    }
    public function getTipoDNI()
    {
        return $this->fktipo;
    }
    public function getDni_cli()
    {
        return $this->dni_cli;
    }
    public function getNom_cli()
    {
        return $this->nom_cli;
    }
    public function getApe_cli()
    {
        return $this->ape_cli;
    }
    public function getTel_cli()
    {
        return $this->tel_cli;
    }
    public function getDirec_cli()
    {
        return $this->direc_cli;
    }
    public function getMail_cli()
    {
        return $this->mail_cli;
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
        $sql = "SELECT cli.id_clien, tipo.nom_tipo, tipo.iniciales, cli.dni_clien, cli.nom_clien, cli.ape_clien, cli.tel_clien, cli.mail_clien, cli.direc_clien, est.nom_est FROM Clientes AS cli, Estado AS est, TipoDNI AS tipo WHERE cli.fkest = est.id_est AND cli.fktipo = tipo.id_tipo;";

        #Procesar la consulta de datos
        $resuls_clientes = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        # var_dump($sql, $resuls_clientes);
        return $resuls_clientes;
    }

    public function Agregar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "INSERT INTO Clientes(fktipo, dni_clien, nom_clien, ape_clien, tel_clien, mail_clien, direc_clien, fkest) VALUE ('{$this->getTipoDNI()}', '{$this->getDni_cli()}', '{$this->getNom_cli()}', '{$this->getApe_cli()}', '{$this->getTel_cli()}', '{$this->getMail_cli()}', '{$this->getDirec_cli()}',  1);";

        #Procesar la consulta de datos
        $resuls_clientes = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_clientes);

        return $resuls_clientes;
    }

    public function Modificar() {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE Clientes SET fktipo = '{$this->getTipoDNI()}', dni_clien = {$this->getDni_cli()}, nom_clien = '{$this->getNom_cli()}', ape_clien = '{$this->getApe_cli()}', tel_clien = {$this->getTel_cli()}, mail_clien = '{$this->getMail_cli()}', direc_clien = '{$this->getDirec_cli()}' WHERE id_clien = {$this->getId_cli()};";

        #Procesar la consulta de datos
        $resuls_clientes = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_clientes);

        return $resuls_clientes;
    }

    public function VerificarIdentidad()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Clientes WHERE (dni_clien = {$this->getDni_cli()} AND fktipo = {$this->getTipoDNI()}) AND id_clien != {$this->getId_cli()} AND fkest = 1;";

        #Procesar la consulta de datos
        $resuls_clientes = mysqli_query($conex_var, $sql);

        # Retornar el valor de la consulta
        # var_dump($sql, $resuls_clientes);

        while ($registro = mysqli_fetch_array($resuls_clientes)) {
            $this->datos[] = $registro;
            # var_dump($registro);
            return $registro;
        }
    }

    public function VerificarIdentidadSinID()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Clientes WHERE (dni_clien = {$this->getDni_cli()} AND fktipo = {$this->getTipoDNI()}) AND fkest = 1;";

        #Procesar la consulta de datos
        $resuls_clientes = mysqli_query($conex_var, $sql);

        # Retornar el valor de la consulta
        # var_dump($sql, $resuls_clientes);

        while ($registro = mysqli_fetch_array($resuls_clientes)) {
            $this->datos[] = $registro;
            # var_dump($registro);
            return $registro;
        }
    }

    public function VerificarEmail()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Clientes WHERE mail_clien = '{$this->getMail_cli()}' AND id_clien != {$this->getId_cli()} AND fkest = 1;";

        #Procesar la consulta de datos
        $resuls_clientes = mysqli_query($conex_var, $sql);

        # Retornar el valor de la consulta
        # var_dump($sql, $resuls_clientes);

        while ($registro = mysqli_fetch_array($resuls_clientes)) {
            $this->datos[] = $registro;
            # var_dump($registro);
            return $registro;
        }
    }

    public function VerificarEmailSinID()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Clientes WHERE mail_clien = '{$this->getMail_cli()}' AND fkest = 1;";

        #Procesar la consulta de datos
        $resuls_clientes = mysqli_query($conex_var, $sql);

        # Retornar el valor de la consulta
        # var_dump($sql, $resuls_clientes);

        while ($registro = mysqli_fetch_array($resuls_clientes)) {
            $this->datos[] = $registro;
            # var_dump($registro);
            return $registro;
        }
    }

    public function Buscar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Clientes WHERE id_clien = {$this->getId_cli()} AND fkest = 1;";

        #Procesar la consulta de datos
        $resuls_clientes = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_clientes);

        while ($registro = mysqli_fetch_array($resuls_clientes)) {
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
        $sql = "UPDATE Clientes SET fkest = {$this->getEstado()} WHERE id_clien = {$this->getId_cli()};";

        # var_dump($sql);
        # Procesar la consulta de datos
        $resuls_clientes = mysqli_query($conex_var, $sql);

        # Retornar el valor de la consulta
        # echo '<p class="fs-5">' . $sql . '</p>';
        return $resuls_clientes;
    }

    public function ConsultaString()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();
        
        #Generar la consulta de datos
        if( $this->getApe_cli() ){

            $sql = "SELECT cli.id_clien, tipo.nom_tipo, tipo.iniciales, cli.dni_clien, cli.nom_clien, cli.ape_clien, cli.tel_clien, cli.mail_clien, cli.direc_clien, est.nom_est FROM Clientes AS cli, Estado AS est, TipoDNI AS tipo WHERE cli.fkest = est.id_est AND cli.fktipo = tipo.id_tipo AND (cli.ape_clien LIKE '%{$this->getApe_cli()}%' OR cli.ape_clien LIKE '%{$this->getApe_cli()}' OR cli.ape_clien LIKE '{$this->getApe_cli()}%' OR cli.ape_clien = '{$this->getApe_cli()}');";

        } else if ( $this->getDirec_cli() ){

            $sql = "SELECT cli.id_clien, tipo.nom_tipo, tipo.iniciales, cli.dni_clien, cli.nom_clien, cli.ape_clien, cli.tel_clien, cli.mail_clien, cli.direc_clien, est.nom_est FROM Clientes AS cli, Estado AS est, TipoDNI AS tipo WHERE cli.fkest = est.id_est AND cli.fktipo = tipo.id_tipo AND (cli.direc_clien LIKE '%{$this->getDirec_cli()}%' OR cli.direc_clien LIKE '%{$this->getDirec_cli()}' OR cli.direc_clien LIKE '{$this->getDirec_cli()}%' OR cli.direc_clien = '{$this->getDirec_cli()}');";

        } else if ( $this->getDni_cli() ){

            $sql = "SELECT cli.id_clien, tipo.nom_tipo, tipo.iniciales, cli.dni_clien, cli.nom_clien, cli.ape_clien, cli.tel_clien, cli.mail_clien, cli.direc_clien, est.nom_est FROM Clientes AS cli, Estado AS est, TipoDNI AS tipo WHERE cli.fkest = est.id_est AND cli.fktipo = tipo.id_tipo AND cli.dni_clien = '{$this->getDni_cli()}';";

        } else if ( $this->getMail_cli() ){

            $sql = "SELECT cli.id_clien, tipo.nom_tipo, tipo.iniciales, cli.dni_clien, cli.nom_clien, cli.ape_clien, cli.tel_clien, cli.mail_clien, cli.direc_clien, est.nom_est FROM Clientes AS cli, Estado AS est, TipoDNI AS tipo WHERE cli.fkest = est.id_est AND cli.fktipo = tipo.id_tipo AND (cli.mail_clien LIKE '%{$this->getMail_cli()}%' OR cli.mail_clien LIKE '%{$this->getMail_cli()}' OR cli.mail_clien LIKE '{$this->getMail_cli()}%' OR cli.mail_clien = '{$this->getMail_cli()}');";

        } else if ( $this->getNom_cli() ){

            $sql = "SELECT cli.id_clien, tipo.nom_tipo, tipo.iniciales, cli.dni_clien, cli.nom_clien, cli.ape_clien, cli.tel_clien, cli.mail_clien, cli.direc_clien, est.nom_est FROM Clientes AS cli, Estado AS est, TipoDNI AS tipo WHERE cli.fkest = est.id_est AND cli.fktipo = tipo.id_tipo AND (cli.nom_clien LIKE '%{$this->getNom_cli()}%' OR cli.nom_clien LIKE '%{$this->getNom_cli()}' OR cli.nom_clien LIKE '{$this->getNom_cli()}%' OR cli.nom_clien = '{$this->getNom_cli()}');";

        } else if ( $this->getTel_cli() ) {

            $sql = "SELECT cli.id_clien, tipo.nom_tipo, tipo.iniciales, cli.dni_clien, cli.nom_clien, cli.ape_clien, cli.tel_clien, cli.mail_clien, cli.direc_clien, est.nom_est FROM Clientes AS cli, Estado AS est, TipoDNI AS tipo WHERE cli.fkest = est.id_est AND cli.fktipo = tipo.id_tipo AND cli.tel_clien = '{$this->getTel_cli()}';";

        } else {
            $sql = null;
        }

        #Procesar la consulta de datos
        $resuls_clientes = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_clientes);
        return $resuls_clientes;
    }

}
