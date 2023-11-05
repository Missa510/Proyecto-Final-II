<?php
#Traer de la base de datos
$id = $con[0]["id_produc"];
$codigo = $con[0]["codigo_product"];
$producto = $con[0]["nom_produc"];
$precio_compra = $con[0]["precio_compra"];
$notas = $con[0]["notas_product"];
?>

<h1 class="Header">Modificar producto</h1>

<div class="container">
    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>
    <form action="?control=productos&&funcion=Actualizar" class="formulario-add mb-4" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <div class="mb-3">
            <label for="id_codigo" class="form-label">Codigo</label>
            <input type="text" name="codigo" id="id_codigo" value="<?= $codigo; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="id_producto" class="form-label">Nombre del prodcuto</label>
            <input type="text" name="producto" id="id_producto" value="<?= $producto; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="id_compra" class="form-label">Precio de compra</label>
            <input type="number" name="precio_compra" class="form-control" value="<?= $precio_compra; ?>" id="id_compra">
            <div class="form-text">Coloque el precio al que se compró el producto a los proveedores. La ganancia se genera automáticamente con el 25% de ganancia</div>
        </div>
        <div class="mb-3">
            <label for="id_notas" class="form-label">Notas del prodcuto</label>
            <textarea class="form-control" name="notas" id="id_notas"><?= $notas; ?></textarea>
        </div>
        <input type="submit" class="btn btn-dark" value="Actualizar">
    </form>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>