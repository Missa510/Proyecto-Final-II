<?php
#Traer de la base de datos
$id = $con[0]["id_ciu"];
$ciudad = $con[0]["nom_ciu"];
$capital = $con[0]["capital_ciudad"];
?>

<h1 class="Header">Modificar ciudad</h1>

<div class="container">
    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>
    <form action="?control=ciudades&&funcion=Actualizar" class="formulario-add mb-4" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <div class="Ciudad">
            <label for="id_ciudad" class="form-label">Ciudad</label>
            <input type="text" value="<?= $ciudad; ?>" name="ciudad" id="id_ciudad" class="form-control">
        </div>
        <div class="Capital mb-4">
            <label for="id_capital" class="form-label">Capital</label>
            <input type="text" value="<?= $capital; ?>" name="capital" id="id_capital" class="form-control">
        </div>
        <input type="submit" class="btn btn-dark" value="Actualizar">
    </form>
</div>
<?php require_once("vista\web\diseno/footer.php"); ?>