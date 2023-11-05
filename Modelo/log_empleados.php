<?php

require_once("BasesDeDatos\conexion.php");

class Empleados
{
    private $id_emp, $dni_emp, $ape_emp, $nom_emp, $edad_emp, $tel_emp, $email_emp, $direc_emp, $fecha_de_nacimiento_emp, $fecha_ingreso_emp, $fecha_egreso_emp, $fkgender, $fkcargo, $fksede, $fkeps, $fkcaja, $fkturno, $descrip_emp, $datos;

    public function __construct($id, $dni, $apellidos, $nombres, $edad, $telefono, $correo, $direccion, $fecha_de_nacimiento, $fecha_ingreso, $fecha_egreso, $genero, $cargo, $eps, $CajaDeCompensacion, $sede, $turno, $decripcion)
    {
        $this->id_emp = $id;
        $this->dni_emp = $dni;
        $this->ape_emp = $apellidos;
        $this->nom_emp = $nombres;
        $this->edad_emp = $edad;
        $this->tel_emp = $telefono;
        $this->email_emp = $correo;
        $this->direc_emp = $direccion;
        $this->fecha_de_nacimiento_emp = $fecha_de_nacimiento;
        $this->fecha_ingreso_emp = $fecha_ingreso;
        $this->fecha_egreso_emp = $fecha_egreso;
        $this->fkgender = $genero;
        $this->fkcargo = $cargo;
        $this->fkeps = $eps;
        $this->fkcaja = $CajaDeCompensacion;
        $this->fksede = $sede;
        $this->fkturno = $turno;
        $this->descrip_emp = $decripcion;
    }

    public function getIdemp()
    {
        return $this->id_emp;
    }
    public function getDniemp()
    {
        return $this->dni_emp;
    }
    public function getApellidoemp()
    {
        return $this->ape_emp;
    }
    public function getNombreemp()
    {
        return $this->nom_emp;
    }
    public function getEdademp()
    {
        return $this->edad_emp;
    }
    public function getTelefonoemp()
    {
        return $this->tel_emp;
    }
    public function getEmailemp()
    {
        return $this->email_emp;
    }
    public function getDireccionemp()
    {
        return $this->direc_emp;
    }
    public function getFechaNacimiento()
    {
        return $this->fecha_de_nacimiento_emp;
    }
    public function getFechaIngreso()
    {
        return $this->fecha_ingreso_emp;
    }
    public function getFechaEgreso()
    {
        return $this->fecha_egreso_emp;
    }
    public function getGeneroemp()
    {
        return $this->fkgender;
    }
    public function getCargoemp()
    {
        return $this->fkcargo;
    }
    public function getEps()
    {
        return $this->fkeps;
    }
    public function getCajaDeCompensacion()
    {
        return $this->fkcaja;
    }
    public function getSedeemp()
    {
        return $this->fksede;
    }
    public function getTurnoemp()
    {
        return $this->fkturno;
    }
    public function getDescripcionemp()
    {
        return $this->descrip_emp;
    }

    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT emp.id_emp, emp.dni_emp, emp.ape_emp, emp.nom_emp, emp.edad_emp, emp.tel_emp, emp.email_emp, emp.direct_emp, emp.fecha_de_nacimiento_emp, emp.fecha_ingreso_emp, emp.fecha_egreso_emp, gen.gender, car.cargo, car.sueldo, trn.nom_turno, eps.eps, caja.caja, sed.nom_sed, emp.descrip_emp FROM Empleados as emp, Generos as gen, Cargos as car, Turnos as trn, EPS as eps, Cajadecompensacion as caja, Sedes as sed WHERE emp.fkgender = gen.id_gender AND emp.fkeps = eps.id_eps AND emp.fkcaja = caja.id_caja AND emp.fkcargo = car.id_cargo AND emp.fkturno = trn.id_turnos AND emp.fksede = sed.id_sede ORDER BY emp.ape_emp ASC;";

        #Procesar la consulta de datos
        $resuls_empleados = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #var_dump($sql,  $resuls_empleados);
        return $resuls_empleados;
    }
}
