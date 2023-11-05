<?php
#Conexion a la base de datos

class BaseDeDatosGarochoa
{
    public function conex()
    {
        try {
            return $conexiones_base = mysqli_connect("localhost", "root", "", "ferregarochoa");
        } catch (Exception $e) { //Por si hay error
            echo "<script> alert('Error al conectarse a la base de datos :(') </script> <p class='fs-5'> Error técnico: " . $e . "</p><br>";
        }
    }
    public function conexUsuarios(){
        try{
            return $conexiones_base = mysqli_connect("localhost", "root", "", "usuario_proyecto");
        }
        catch(Exception $e){ //Por si hay error
            echo "<script> alert('Error al conectarse a la base de datos :(') </script> <p class='fs-5'> Error técnico:". $e. "</p><br>";
        }
    }
}
# mysqli_set_charset($conexiones_base, "utf8");
