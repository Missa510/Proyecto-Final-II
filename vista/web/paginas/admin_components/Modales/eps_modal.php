<?php
#Traer de la base de datos
$id = $con[0]["id_eps"];
$eps = $con[0]["eps"];
?>

<h1 class="Header">Modificar EPS</h1>


<div class="container">
    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>
    <form action="?control=eps&&funcion=Actualizar" class="formulario-add mb-4" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <div class="mb-4">
            <label for="id_eps" class="form-label">EPS</label>
            <input type="text" value="<?= $eps; ?>" name="eps" id="id_eps" class="form-control">
        </div>
        <input type="submit" class="btn btn-dark" value="Actualizar">
    </form>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>