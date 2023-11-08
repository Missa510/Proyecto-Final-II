<?php
#Traer de la base de datos
$id = $con[0]["id_clien"];
$dni = $con[0]["dni_clien"];
$nombre = $con[0]["nom_clien"];
$apellido = $con[0]["ape_clien"];
$telefono = $con[0]["tel_clien"];
$mail = $con[0]["mail_clien"];
$direccion = $con[0]["direc_clien"];

?>

<h1 class="Header">Modificar cliente</h1>


<div class="container">
    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>
    <form action="?control=clientes&&funcion=Actualizar" class="formulario-add mb-4" method="POST">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <div class="mb-3">
            <label for="id_tipo" class="form-label">Tipo de Docuento</label>
            <select name="tipo" id="id_tipo" class="form-select">
                <?php foreach ($select as $CollectiveConsciousness) { ?>

                    <option value="<?= $CollectiveConsciousness["id_tipo"]; ?>"><?= "{$CollectiveConsciousness['nom_tipo']} ({$CollectiveConsciousness['iniciales']})"; ?>
                    </option>

                <?php } ?>
            </select>
            <div class="text-muted"> Si el tipo de documetno que desea insertar no aparece, <a href="?control=tipo&&funcion=Estado">Haga click aquí para insertar o modificarlo</a> </div>
        </div>
        <div class="mb-3">
            <label for="id_dni" class="form-label">DNI</label>
            <input type="number" name="dni" id="id_dni" value="<?= $dni; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="id_nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="id_nombre" value="<?= $nombre; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="id_apellido" class="form-label">Apellido</label>
            <input type="text" name="apellido" id="id_apellido" value="<?= $apellido; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="id_telefono" class="form-label">Teléfono</label>
            <input type="number" name="telefono" id="id_telefono" value="<?= $telefono; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="id_mail" class="form-label">Email</label>
            <input type="mail" name="email" id="id_mail" value="<?= $mail; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="id_direccion" class="form-label">Dirección</label>
            <input type="text" name="direccion" id="id_direccion" value="<?= $direccion; ?>" class="form-control">
        </div>
        <input type="submit" class="btn btn-dark" value="Actualizar">
    </form>
</div>
<?php require_once("vista\web\diseno/footer.php"); ?>