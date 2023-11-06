<?php
#Traer de la base de datos
$id = $con[0]["id_exist"];
$fecha_entrada = $con[0]["fecha_exist_entrada"];
$cantidad = $con[0]["cant_produc"];
?>

<h1 class="Header">Modificar existencia</h1>

<div class="container">
    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>
    <form action="?control=existprod&&funcion=Actualizar" class="formulario-add" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <div class="mb-3">
            <label for="id_fecha" class="form-label">Fecha de control y/o ingreso</label>
            <input type="datetime-local" name="fecha_entrada" id="id_fecha" value="<?= $fecha_entrada; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="id_producto" class="form-label">Producto</label>
            <select name="producto" class="form-select" id="id_producto">

                <?php foreach ($selectProductos as $CollectiveConsciousness) { ?>

                    <option value="<?= $CollectiveConsciousness["id_produc"]; ?>"><?= $CollectiveConsciousness["nom_produc"]; ?>
                    </option>

                <?php } ?>

            </select>
            <div class="text-muted"> Si el producto que desea insertar no aparece, <a href="?control=productos&&funcion=Estado">Haga click aquí para insertar o modificarlo</a> </div>
        </div>
        <div class="mb-3">
            <label for="id_sede" class="form-label">Sede</label>
            <select name="sede" class="form-select" id="id_sede">

                <?php foreach ($selectSedes as $CollectiveConsciousness) { ?>

                    <option value="<?= $CollectiveConsciousness["id_sede"]; ?>"><?= $CollectiveConsciousness["nom_sed"]; ?>
                    </option>

                <?php } ?>

            </select>
            <div class="text-muted"> Si la sede que desea insertar no aparece, <a href="?control=sedes&&funcion=Estado">Haga click aquí para insertar o modificarla</a> </div>
        </div>
        <div class="mb-3">
            <label for="id_cantidad" class="form-label">Cantidad de producto</label>
            <input type="number" min="0" onchange="ZeroBitch()" name="cantidad" class="form-control" value="<?= $cantidad; ?>" id="id_cantidad">
        </div>
        <input type="submit" class="btn btn-dark" value="Añadir">
    </form>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>