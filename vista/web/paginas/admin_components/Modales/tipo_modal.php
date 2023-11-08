<?php
#Traer de la base de datos
$id = $con[0]["id_tipo"];
$iniciales = $con[0]["iniciales"];
$tipo = $con[0]["nom_tipo"];
?>

<h1 class="Header">Modificar tipo de documento</h1>

<div class="container-fluid">
    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>
    <form action="?control=tipo&&funcion=Actualizar" class="formulario-add mb-4" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <div class="mb-3">
            <label for="id_iniciales" class="form-label">Iniciales</label>
            <input type="text" name="iniciales" id="id_iniciales" class="form-control" value="<?= $iniciales; ?>">
        </div>
        <div class="mb-3">
            <label for="id_tipo" class="form-label">Tipo de Documento</label>
            <input type="text" name="tipo" class="form-select" id="id_tipo" value="<?= $tipo; ?>">
        </div>
        <input type="submit" class="btn btn-dark" value="Actualizar">
    </form>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>