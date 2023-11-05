<?php
#Traer de la base de datos
$id = $con[0]["id_caja"];
$caja = $con[0]["caja"];
?>

<h1 class="Header">Modificar caja de compencacion</h1>


<div class="container-fluid">
    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>
    <form action="?control=cajas&&funcion=Actualizar" class="formulario-add mb-4" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <div class="mb-4">
            <label for="id_caja" class="form-label">EPS</label>
            <input type="text" value="<?= $caja; ?>" name="caja" id="id_caja" class="form-control">
        </div>
        <input type="submit" class="btn btn-dark" value="Actualizar">
    </form>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>