<?php
#Traer de la base de datos
$id = $con[0]["id_prov"];
$proveedor = $con[0]["nom_prov"];
$telefono = $con[0]["tel_prov"];
$mail = $con[0]["mail_prov"];
$direccion = $con[0]["direc_prov"];
?>

<h1 class="Header">Modificar proveedor</h1>

<div class="container">
    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>
    <form action="?control=proveedores&&funcion=Actualizar" class="formulario-add mb-4" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <div class="mb-3">
            <label for="id_proveedor" class="form-label">Proveedor</label>
            <input type="text" name="proveedor" id="id_proveedor" value="<?= $proveedor; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="id_telefono" class="form-label">Telefono</label>
            <input type="number" min="9999" name="telefono" id="id_proveedor" value="<?= $telefono; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="id_email" class="form-label">Email</label>
            <input type="mail" name="mail" id="id_email" value="<?= $mail; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="id_direccion" class="form-label">Direccion</label>
            <input type="mail" name="direccion" id="id_direccion" value="<?= $direccion; ?>" class="form-control">
        </div>
        <input type="submit" class="btn btn-dark" value="Actualizar">
    </form>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>