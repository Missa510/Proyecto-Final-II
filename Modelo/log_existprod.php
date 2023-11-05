<?php

require_once("BasesDeDatos/conexion.php");
Class Existenciadeproductos{
    private $Id_exist, $fecha_entrada, $fksede, $cant_produc, $fkproduc, $datos;

    public function __construct($id, $fecha, $cantidad, $sede, $producto)
    {
        $this->Id_exist = $id;
        $this->fecha_entrada = $fecha;
        $this->cant_produc = $cantidad;
        $this->fksede = $sede;
        $this->fkproduc = $producto;
    }

    #Métodos get
    public function getId_exist()
    {
        return $this->Id_exist;
    }
    public function getFecha()
    {
        return $this->fecha_entrada;
    }
    public function getCantidaddeproducto()
    {
        return $this->cant_produc;
    }
    public function getSede()
    {
        return $this->fksede;
    }
    public function getProducto()
    {
        return $this->fkproduc;
    }
    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT exist.id_exist, exist.fecha_exist_entrada, exist.cant_produc, sed.nom_sed, prod.nom_produc FROM Existenciasdeproductos as exist, Sedes as sed, Productos as prod WHERE exist.fksede = sed.id_sede AND exist.fkproduct = prod.id_produc;";

        #Procesar la consulta de datos
        $resuls_existencias = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_existencias;
    }
}