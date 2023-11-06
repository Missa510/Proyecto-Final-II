<h1 class="Header">Existencias de un producto en almacen</h1>
<div class="container-fluid">
    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>
    <div class="row m-1 p-1">
        <?php
        foreach ($tabla as $BuryTherlight) {
            if ($BuryTherlight["cant_produc"] > 0 or $BuryTherlight["nom_est"] == "Activo") { ?>
                <div class="card col-4">
                    <div class="card-body">

                        <h1 class="card-title card-header text-center">Existencia <?= $BuryTherlight["id_exist"]; ?> </h1>
                        <h6 class="card-subtitle mb-2 text-body-secondary mt-3"><strong>Estado:</strong> <?= $BuryTherlight["nom_est"]; ?></h6>
                        <p class="card-text">
                            <strong>Fecha de control y/o ingreso:</strong> <?= date_format(date_create($BuryTherlight["fecha_exist_entrada"]), "F dS, Y H:i"); ?> <br>
                            <strong>Producto:</strong> <?= $BuryTherlight["nom_produc"]; ?> <br>
                            <strong>Sede:</strong> <?= $BuryTherlight["nom_sed"]; ?> <br>
                            <strong>Cantidad del producto:</strong> <?= number_format($BuryTherlight["cant_produc"], 0); ?> unid. <br>
                            <strong>Precio de venta:</strong> <?= number_format($BuryTherlight["precio_venta"], 2); ?> &dollar;COP <br>
                            <strong>Ganancia total:</strong> <?= number_format($BuryTherlight["precio_venta"] * $BuryTherlight["cant_produc"], 2); ?> &dollar;COP <br>
                        </p>
                        <a href="?control=existprod&&funcion=Editar&&id=<?= $BuryTherlight["id_exist"]; ?>" class="btn btn-primary col-12">Editar</a>

                    </div>
                </div>
            <?php } else { ?>
                <div class="card col-4">
                    <div class="card-body bg-secondary">
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            <div>
                                <strong>Existencia <?= $BuryTherlight["id_exist"]; ?></strong>
                            </div>
                        </div>
                        <h6 class="card-subtitle mb-2 text-body-secondary mt-3"><strong>Estado:</strong> <?= $BuryTherlight["nom_est"]; ?></h6>
                        <p class="card-text">
                            <strong>Fecha de control y/o ingreso:</strong> <?= date_format(date_create($BuryTherlight["fecha_exist_entrada"]), "F dS, Y H:i"); ?> <br>
                            <strong>Producto:</strong> <?= $BuryTherlight["nom_produc"]; ?> <br>
                            <strong>Sede:</strong> <?= $BuryTherlight["nom_sed"]; ?> <br>
                            <strong>Cantidad del producto:</strong> <?= $BuryTherlight["cant_produc"] ?> unid. <br>
                            <strong>Precio de venta:</strong> <?= number_format($BuryTherlight["precio_venta"], 2); ?> &dollar;COP <br>
                            <strong>Ganancia total:</strong> <?= number_format($BuryTherlight["precio_venta"] * $BuryTherlight["cant_produc"], 2); ?> &dollar;COP <br>
                        </p>
                        <a href="?control=existprod&&funcion=Editar&&id=<?= $BuryTherlight["id_exist"]; ?>" class="btn btn-primary col-12">Editar</a>

                    </div>
                </div>
        <?php }
        } ?>
    </div>

    <h1 class="display-2 text-center"> Control de información </h1>

    <h1 class="display-6">Añadir una nueva existencia</h1>

    <form action="?control=existprod&&funcion=Agregar" class="formulario-add" method="post">
        <div class="mb-3">
            <label for="id_fecha" class="form-label">Fecha de control y/o ingreso</label>
            <input type="datetime-local" name="fecha_entrada" id="id_fecha" class="form-control">
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
            <input type="number" min="1" name="cantidad" class="form-control" id="id_cantidad">
        </div>
        <input type="submit" class="btn btn-dark" value="Añadir">
    </form>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>