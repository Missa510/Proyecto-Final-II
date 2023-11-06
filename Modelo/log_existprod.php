<?php

require_once("BasesDeDatos/conexion.php");
Class Existenciadeproductos{
    private $Id_exist, $fecha_entrada, $fksede, $cant_produc, $fkproduc, $fkest, $datos;

    public function __construct($id, $fecha, $cantidad, $sede, $producto, $estado)
    {
        $this->Id_exist = $id;
        $this->fecha_entrada = $fecha;
        $this->cant_produc = $cantidad;
        $this->fksede = $sede;
        $this->fkproduc = $producto;
        $this->fkest = $estado;
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
        $sql = "SELECT exist.id_exist, exist.fecha_exist_entrada, exist.cant_produc, sed.nom_sed, prod.nom_produc, prod.precio_venta, est.nom_est FROM Existenciasdeproductos as exist, Sedes as sed, Productos as prod, Estado AS est WHERE exist.fkest = est.id_est AND exist.fksede = sed.id_sede AND exist.fkproduct = prod.id_produc ORDER BY exist.id_exist ASC;";

        #Procesar la consulta de datos
        $resuls_existencias = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_existencias;
    }

    public function Agregar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "INSERT INTO Existenciasdeproductos(fecha_exist_entrada, cant_produc, fksede, fkproduct, fkest) VALUES('{$this->getFecha()}', '{$this->getCantidaddeproducto()}', '{$this->getSede()}', '{$this->getProducto()}', 5);";

        #Procesar la consulta de datos
        $resuls_existencias = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_existencias;
    }

    public function Buscar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Existenciasdeproductos WHERE id_exist = '{$this->getId_exist()}'";

        #Procesar la consulta de datos
        $resuls_existencias = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        while ($registro = mysqli_fetch_array($resuls_existencias)) {
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
        $sql = "UPDATE Existenciasdeproductos SET fecha_exist_entrada = '{$this->getFecha()}', cant_produc = '{$this->getCantidaddeproducto()}', fksede = '{$this->getSede()}', fkproduct = '{$this->getProducto()}', fkest = '{$this->getEstado()}' WHERE id_exist = '{$this->getId_exist()}';";

        #Procesar la consulta de datos
        $resuls_existencias = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_existencias;
    }
}