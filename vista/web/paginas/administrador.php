<?php
if (empty($_SESSION["id_usu"])) {
    header('location: ?control=home&&funcion=principal');
    exit();
}
?>

<h1 class="Header">Administración de la Base de Datos</h1>
<div class="card mb-3" style="max-width: 96%; padding: 1rem;">
    <p class="fs-4">
        Bienvenid@: <?= $fila['nom_admin']; ?>, esta es la administración de la base de datos de la empresa Gar - Ochoa
        <br>
    </p>
    <div class="organizador mb-3">
        <button class="acordeon"> Sedes </button>
        <div class="display-obedience">
            <a class="lista" href="?control=sedes&&funcion=Estado"> Sedes </a>
            <a class="lista" href="?control=ciudades&&funcion=Estado"> Ciudades </a>
        </div>

        <button class="acordeon"> Facturas </button>
        <div class="display-obedience">
            <a class="lista" href="?control=facturasdeproveedores&&funcion=Estado"> Facturas proveedores </a>
            <a class="lista" href="?control=facturasdeclientes&&funcion=Estado"> Facturas clientes </a>
        </div>
        <button class="acordeon"> Productos </button>
        <div class="display-obedience">
            <a class="lista" href="?control=productos&&funcion=Estado"> Productos </a>
            <a class="lista" href="?control=proveedores&&funcion=Estado"> Proveedores </a>
            <a class="lista" href="?control=existprod&&funcion=Estado"> Existencias </a>
        </div>
        <button class="acordeon"> Salud </button>
        <div class="display-obedience">
            <a class="lista" href="?control=cajas&&funcion=Estado"> Cajas compensación </a>
            <a class="lista" href="?control=eps&&funcion=Estado"> EPS admitidas </a>
        </div>
        <button class="acordeon"> Personal </button>
        <div class="display-obedience">
            <a class="lista" href="?control=cargos&&funcion=Estado"> Cargos personal </a>
            <a class="lista" href="?control=empleados&&funcion=Estado"> Empleados </a>
            <a class="lista" href="?control=turnos&&funcion=Estado"> Turnos empleados </a>
        </div>
        <a class="acordeon" href="?control=tipo&&funcion=Estado"> Tipo de Documento </a>
        <a class="acordeon" href="?control=clientes&&funcion=Estado"> Clientes </a>
        <a class="acordeon" href="?control=estados&&funcion=Estado"> Estados </a>
    </div>


    <p class="fs-4">
        <strong>Nota del desarrollador:</strong>
        <ul>
            <li class="fs-4">
                La fecha y hora están en un formato de 24 horas y la fecha está en un formato inglés
            </li>
            <li class="fs-4">
                No usar las teclas <code>alt</code> y <code>&leftarrow;</code> para navegar. Existen algunos errores con la navegación que no se pueden reparar 
            </li>
            <li class="fs-4">
                No usar caracteres especiales al momento de insertar datos
            </li>
            <li class="fs-4">
                En el apartado de opciones, después de cada operación, refrescar la página para evitar inconvenientes
            </li>
            <li class="fs-4">
                UNA VEZ QUE UNA FILA SE INHABILITE, NO SE PODRÁ VOLVER A HABILITAR!!. PUEDE CREAR UNA NUEVA FILA CON LOS MISMOS DATOS
            </li>
        </ul>
    </p>
    <a href="?control=administrador&&funcion=LogOut" class="btn btn-dark">Cerrar sesión</a>
</div>

<?php require_once("vista/web/diseno/footer.php"); ?>