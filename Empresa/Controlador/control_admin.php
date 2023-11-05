<?php
require_once("Modelo/log_admin.php");

$mostrar = new Administradores(NULL, NULL, NULL, NULL, NULL, NULL);
$mostrar_var = $mostrar->Mostrar();
