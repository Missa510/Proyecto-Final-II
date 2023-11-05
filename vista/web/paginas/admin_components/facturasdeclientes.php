<h1 class="Header">Comprobantes de compra de los clientes </h1>

<div class="container-fluid">

    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>

    <div class="facturas">

        <?php foreach ($tabla as $BuryTherlight) { ?>
            <div class="fact">
                <div class="mb-3">
                    <strong>Id:</strong>
                    <?= $BuryTherlight["id_facentregas"]; ?>
                </div>
                <div class="mb-3">
                    <strong>Codigo:</strong>
                    <?= $BuryTherlight["codigo_faventas"]; ?>
                </div>
                <div class="mb-3">
                    <strong>Fecha de emisión:</strong>
                    <?= date_format(date_create($BuryTherlight["fecha_facentregas"]), "F dS, Y G:i");; ?>
                </div>
                <div class="mb-3">
                    <strong>Fecha de vencimiento:</strong>
                    <?= date_format(date_create($BuryTherlight["fecha_vencimiento"]), "F dS, Y G:i");; ?>
                </div>
                <div class="mb-3">
                    <strong>Producto:</strong>
                    <?= $BuryTherlight["nom_produc"]; ?>
                </div>
                <div class="mb-3">
                    <strong>Cantidad de producto:</strong>
                    <?= $BuryTherlight["cant_produc"]; ?> unid.
                </div>
                <div class="mb-3">
                    <strong>Precio por unidad:</strong>
                    <?= number_format($BuryTherlight["precio_venta"], 2); ?>
                    &dollar;COP
                </div>
                <div class="mb-3">
                    <strong>Descuento: </strong>
                    <?= "{$BuryTherlight['descuento_clientes']} %"; ?>
                </div>
                <div class="mb-3">
                    <strong>Precio total</strong>
                    <?= number_format($BuryTherlight["precio_venta"] * $BuryTherlight["cant_produc"], 2); ?>
                    &dollar;COP
                </div>
                <div class="mb-3">
                    <strong>DNI del cliente:</strong>
                    <?= $BuryTherlight["dni_clien"]; ?>
                </div>
                <div class="mb-3">
                    <strong>Nombre del cliente:</strong>
                    <?= $BuryTherlight["ape_clien"] . ", " . $BuryTherlight["nom_clien"]; ?>
                </div>
                <div class="mb-3">
                    <strong>Sede de la venta:</strong>
                    <?= $BuryTherlight["nom_sed"]; ?>
                </div>
                <a href="Facturas\facturas.php"> imprimir factura </a>
            </div>
        <?php } ?>
    </div>

    <h1 class="display-2 text-center"> Control de información </h1>
    <h1 class="display-6">Añadir una nueva factura de clientes</h1>

    <form action="?control=facturasdeproveedores&&funcion=Agregar" method="post" class="formulario-add">
        <div class="mb-3">
            <label for="id_codigo_facompras" class="form-label">Codigo de facturas</label>
            <input type="text" name="codigo_facompras" id="id_codigo_facompras" class="form-control">
        </div>

        <div class="mb-3">
            <label for="id_fecha_facompras" class="form-label">Fecha de compra</label>
            <input type="datetime-local" name="fecha_facompras" id="id_fecha_facompras" class="form-control">
        </div>

        <div class="mb-3">
            <label for="id_product" class="form-label">Producto</label>
            <select name="producto" class="form-select" id="id_product">

                <?php foreach ($selectProductos as $CollectiveConsciousness) { ?>

                    <option value="<?= $CollectiveConsciousness["id_produc"]; ?>">
                        <?= $CollectiveConsciousness["nom_produc"] . " (" . number_format($CollectiveConsciousness["precio_compra"], 2) . " &dollar;COP)"; ?>

                    </option>

                <?php } ?>

            </select>
        </div>

        <div class="mb-3">
            <label for="id_cantidad" class="form-label">Cantidad del producto</label>
            <input type="number" min="1" name="cantidad" id="id_cantidad" class="form-control">
        </div>

        <div class="mb-3">
            <label for="id_descuento" class="form-label">Descuento por el producto (%)</label>
            <input type="number" min="0" max="99" name="descuento" id="id_descuento" class="form-control">
        </div>


        <div class="mb-3">
            <label for="id_sede" class="form-label">Sede surtida</label>
            <select name="sede" class="form-select" id="id_sede">

                <?php foreach ($selectSedes as $CollectiveConsciousness) { ?>

                    <option value="<?= $CollectiveConsciousness["id_sede"]; ?>">
                        <?= $CollectiveConsciousness["nom_sed"]; ?>
                    </option>

                <?php } ?>

            </select>
        </div>

        <div class="mb-3">
            <label for="id_proveedor" class="form-label">Proveedor</label>
            <select name="proveedor" class="form-select" id="id_proveedor">

                <?php foreach ($selectProveedores as $CollectiveConsciousness) { ?>

                    <option value="<?= $CollectiveConsciousness["id_prov"]; ?>">
                        <?= $CollectiveConsciousness["nom_prov"]; ?>
                    </option>

                <?php } ?>

            </select>
        </div>
        <input type="submit" class="btn btn-dark" value="Añadir">
    </form>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>