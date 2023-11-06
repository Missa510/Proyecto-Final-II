<?php
#Traer de la base de datos
$id = $con[0]["id_turnos"];
$turno = $con[0]["nom_turno"];
$hora_entrada = $con[0]["entrada"];
$hora_salida = $con[0]["salida"];
?>

<h1 class="Header">Modificar turno</h1>

<div class="container">
    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>
    <form action="?control=turnos&&funcion=Actualizar" class="formulario-add" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <div class="mb-3">
            <label for="id_turno" class="form-label">Nombre del turno</label>
            <input type="text" name="turno" id="id_turno" class="form-control" value="<?= $turno; ?>">
        </div>
        <div class="mb-3">
            <label for="id_entrada" class="form-label">Hora de entrada</label>
            <input type="time" name="entrada" id="id_entrada" class="form-control" value="<?= $hora_entrada; ?>">
            <div class="text-muted">En formato de 24 horas</div>
        </div>
        <div class="mb-3">
            <label for="id_salida" class="form-label">Hora de salida</label>
            <input type="time" name="salida" id="id_salida" class="form-control" value="<?= $hora_salida; ?>">
            <div class="text-muted">En formato de 24 horas</div>
        </div>
        <input type="submit" class="btn btn-dark" value="Añadir">
    </form>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>