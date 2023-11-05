<?php
//VALIDAR PAGINAS
if (isset($_GET['control']) && isset($_GET['funcion'])) {
    $control = $_GET['control'];
    $funcion = $_GET['funcion'];
    //INVOCAR LA FUNCION LLAMADO Y ENVIAR DATOS
    llamado($control, $funcion);
} //FIN IF
else {
    $control = 'home';
    $funcion = 'principal';
    //INVOCAR LA FUNCION LLAMADO Y ENVIAR DATOS
    llamado($control, $funcion);
}
//FUNCION LLAMADO
function llamado($control, $funcion)
{
    //LLAMAR CUALQUIER ARCHIVO QUE ESTE EN LA CARPETA CONTROLADOR
    require_once("Controlador/control_" . $control . ".php");

    $control = match ($control) {
        'home' => new Pagina(),
        'administrador' => new AdministradorControl(),
        'ciudades' => new CityControl(),
        'sedes' => new SedesControl(),
        'existprod' => new ExistenciadeproductosControl(),
        'productos' => new ProductosControl(),
        'proveedores' => new ProveedoresControl(),
        'clientes' => new ClientesControl(),
        'facturasdeproveedores' => new FacturasdeproveedoresControl(),
        'facturasdeclientes' => new FacturasdeclientesControl(),
        'cargos' => new CargosControl(),
        'eps' => new EPSControl(),
        'turnos' => new TurnosControl(),
        'empleados' => new EmpleadosControl(),
        'cajas' => new CajasControl(),
        'estados' => new EstadosControl(),
        'tipo' => new TipoDNIControl()
    }; //FIN SWITCH

    //LLAMAR FUNCION 
    $control->{$funcion}();
}
; //FIN LLAMADO
