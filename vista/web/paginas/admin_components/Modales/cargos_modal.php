<?php
#Traer de la base de datos
$id = $con[0]["id_cargo"];
$cargo = $con[0]["cargo"];
$sueldo = $con[0]["sueldo"];
$descripcion = $con[0]["descrip_cargo"];

?>

<h1 class="Header">Modificar cargo</h1>

<div class="container">

    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>

    <form action="?control=cargos&&funcion=Actualizar" class="formulario-add mb-4" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <div class="nombre-cargo">
            <label for="id_cargo" class="form-label">Cargo</label>
            <input type="text" value="<?= $cargo; ?>" name="cargo" id="id_cargo" class="form-control">
        </div>
        <div class="sueldo">
            <label for="id_sueldo" class="form-label">Sueldo (&dollar;COP)</label>
            <input type="number" value="<?= $sueldo; ?>" min="800000" name="sueldo" id="id_sueldo" class="form-control">
        </div>
        <div class="descripcion mb-3">
            <label for="id_descripcion" class="form-label">Una pequeña descripción del cargo</label>
            <textarea name="descripcion" row="5" id="id_descripcion" class="form-control"><?= $descripcion; ?></textarea>
        </div>
        <input type="submit" class="btn btn-dark" value="Actualizar">
    </form>
</div>
<?php require_once("vista\web\diseno/footer.php"); ?>