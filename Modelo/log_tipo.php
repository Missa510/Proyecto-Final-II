<?php

require_once("BasesDeDatos/conexion.php");
class TipoDNI
{
    private $id_tipo, $iniciales, $nom_tipo, $datos;

    public function __construct($id, $iniciales, $tipo_de_documento)
    {
        $this->id_tipo = $id;
        $this->iniciales = $iniciales;
        $this->nom_tipo = $tipo_de_documento;
    }

    public function getIdTipo()
    {
        return $this->id_tipo;
    }
    public function getIniciales()
    {
        return $this->iniciales;
    }
    public function getTipoDNI()
    {
        return $this->nom_tipo;
    }

    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM TipoDNI;";

        #Procesar la consulta de datos
        $resuls_tipos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_tipos);
        return $resuls_tipos;
    }

    public function Buscar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM TipoDNI WHERE id_tipo = '{$this->getIdTipo()}';";

        #Procesar la consulta de datos
        $resuls_tipos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_tipos);
        while ($registro = mysqli_fetch_array($resuls_tipos)) {
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
        $sql = "UPDATE TipoDNI SET iniciales = '{$this->getIniciales()}', nom_tipo = '{$this->getTipoDNI()}' WHERE id_tipo = '{$this->getIdTipo()}';";

        #Procesar la consulta de datos
        $resuls_tipos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_tipos);
        return $resuls_tipos;
    }

    public function Agregar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "INSERT INTO TipoDNI(iniciales, nom_tipo) VALUES('{$this->getIniciales()}', '{$this->getTipoDNI()}');";

        #Procesar la consulta de datos
        $resuls_tipos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_tipos);
        return $resuls_tipos;
    }
}
