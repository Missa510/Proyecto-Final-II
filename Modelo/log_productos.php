<?php

require_once("BasesDeDatos/conexion.php");
class Productos
{
    private $Id_produc, $nom_produc, $codigo_product, $precio_compra, $precio_venta, $notas_product, $fkest, $datos;

    public function __construct($id, $codigo, $producto, $precio_compra, $precio_venta, $notas, $estado)
    {
        $this->Id_produc = $id;
        $this->nom_produc = $producto;
        $this->codigo_product = $codigo;
        $this->precio_compra = $precio_compra;
        $this->precio_venta = $precio_venta;
        $this->notas_product = $notas;
        $this->fkest = $estado;
    }

    # Métodos get
    public function getId_produc()
    {
        return $this->Id_produc;
    }
    public function getNom_produc()
    {
        return $this->nom_produc;
    }
    public function getCodigo()
    {
        return $this->codigo_product;
    }
    public function getEstado()
    {
        return $this->fkest;
    }
    public function getPrecioCompra()
    {
        return $this->precio_compra;
    }
    public function getPrecioVenta()
    {
        return $this->precio_venta;
    }
    public function getNotas()
    {
        return $this->notas_product;
    }
    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT prod.id_produc, prod.codigo_product, prod.nom_produc, prod.precio_venta, prod.precio_compra, prod.notas_product, est.nom_est FROM Productos AS prod, Estado AS est WHERE prod.fkest = est.id_est;";

        #Procesar la consulta de datos
        $resuls_productos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_productos;
    }

    public function VerificarCodigo()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Productos WHERE codigo_product = '{$this->getCodigo()}';";

        #Procesar la consulta de datos
        $resuls_productos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_productos); 
        return $resuls_productos;
    }

    public function VerificarCodigoConID()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Productos WHERE codigo_product = '{$this->getCodigo()}' AND id_produc != '{$this->getId_produc()}';";

        #Procesar la consulta de datos
        $resuls_productos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_productos); 
        return $resuls_productos;
    }

    public function Agregar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "INSERT INTO Productos(codigo_product, nom_produc, precio_venta, precio_compra, notas_product, fkest) VALUES('{$this->getCodigo()}', '{$this->getNom_produc()}', '{$this->getPrecioVenta()}', '{$this->getPrecioCompra()}', '{$this->getNotas()}', 3);";

        #Procesar la consulta de datos
        $resuls_productos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_productos;
    }

    public function Modificar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE Productos SET codigo_product = '{$this->getCodigo()}', nom_produc = '{$this->getNom_produc()}', precio_compra = '{$this->getPrecioCompra()}', precio_venta = '{$this->getPrecioVenta()}', notas_product = '{$this->getNotas()}' WHERE id_produc = '{$this->getId_produc()}';";

        #Procesar la consulta de datos
        $resuls_productos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql, $resuls_productos); 
        return $resuls_productos;
    }
    public function Buscar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Productos WHERE id_produc = '{$this->getId_produc()}';";

        #Procesar la consulta de datos
        $resuls_productos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        while ($registro = mysqli_fetch_array($resuls_productos)) {
            $this->datos[] = $registro;
        }

        return $this->datos;
    }

    public function MostrarHabilitados()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Productos WHERE fkest = 3;";

        #Procesar la consulta de datos
        $resuls_productos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_productos;
    }

    public function Existente()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE Productos SET fkest = 3 WHERE id_produc = '{$this->getId_produc()}';";

        #Procesar la consulta de datos
        $resuls_productos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_productos;
    }

    public function Agotado()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE Productos SET fkest = 4 WHERE id_produc = '{$this->getId_produc()}';";

        #Procesar la consulta de datos
        $resuls_productos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_productos;
    }
}
