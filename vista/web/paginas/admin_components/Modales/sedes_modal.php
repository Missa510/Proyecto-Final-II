<?php
#Traer de la base de datos
$id = $con[0]["id_sede"];
$sede = $con[0]["nom_sed"];
$direccion = $con[0]["direc_sed"];
?>

<h1 class="Header">Modificar sede</h1>

<div class="container">
    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>
    <form action="?control=sedes&&funcion=Actualizar" class="formulario-add mb-4" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <div class="mb-3">
            <label for="id_sede" class="form-label">Nombre</label>
            <input type="text" value="<?= $sede; ?>" name="sede" id="id_sede" class="form-control">
        </div>
        <div class="mb-3">
            <label for="id_ciudad" class="form-label">Ciudad</label>
            <select name="ciudad" class="form-select" id="id_ciudad">

                <?php foreach ($checkBox as $CollectiveConsciousness) { ?>

                    <option value="<?= $CollectiveConsciousness["id_ciu"]; ?>"><?= $CollectiveConsciousness["nom_ciu"]; ?>
                    </option>

                <?php } ?>

            </select>
        </div>
        <div class="mb-4">
            <label for="id_direccion" class="form-label">Direccion</label>
            <input type="text" value="<?= $direccion; ?>" name="direccion" id="id_direccion" class="form-control">
        </div>
        <input type="submit" class="btn btn-dark" value="Actualizar">
    </form>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>