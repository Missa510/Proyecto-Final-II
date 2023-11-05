<?php
// // Conection with the database
$ERROR = null;
//Navegación desde cero
if (isset($_GET["control"]) and isset($_GET["funcion"])) {
    $control = $_GET["control"];
    $funcion = $_GET["funcion"];
    Navegacion($control, $funcion, true);
} else {
    $control = "navegacion";
    $funcion = 'principal';
    Navegacion($control, $funcion, false);
}
function Navegacion($control, $funcion, $val)
{
    if ($val == true) {
        if (!file_exists("Controlador/control_" . $control . ".php")) {
            require_once('Vista\Componentes\Errores\error_404.php');
            exit();
        }
    }

    require_once("Controlador/control_" . $control . ".php");

    $control = match ($control) {
        'navegacion' => new Paginas(),
        'login' => new Login(),
        'registro' => new Register(),
        'modificar' => new Modify(),
        'eliminar' => new Eliminar(),
    };
    $control->{$funcion}();
}