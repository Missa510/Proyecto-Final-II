<h1 class="Header">Ultimas facturas de proveedores</h1>

<div class="container-fluid">

    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>

    <div class="facturas">

        <?php foreach ($tabla as $BuryTheLight) { ?>

            <div class="fact">
                <div class="mb-3 d-grid">
                    <a href="?control=facturasdeproveedores&&funcion=Imprimir&&codigo_facompras=<?= $BuryTheLight["codigo_facompras"]; ?>" class="btn btn-primary" title="PDF de factura <?= $BuryTheLight["codigo_facompras"]; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                            <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z" />
                            <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z" />
                        </svg>
                    </a>
                </div>

                <div class="mb-3">
                    <strong>Id:</strong>
                    <?= $BuryTheLight["id_facompras"]; ?>
                </div>

                <div class="mb-3">
                    <strong>Codigo:</strong>
                    <?= $BuryTheLight["codigo_facompras"]; ?>
                </div>

                <div class="date">
                    <strong>Fecha de emisión:</strong>
                    <?= date_format(date_create($BuryTheLight["fecha_facompras"]), "F dS, Y H:i"); ?>
                </div>

                <div class="mb-3">
                    <strong>Producto:</strong>
                    <?= $BuryTheLight["nom_produc"]; ?>
                </div>

                <div class="mb-3">
                    <strong>Cantidad de producto:</strong>
                    <?= number_format($BuryTheLight["cant_produc"], 0); ?> unid.
                </div>

                <div class="mb-3">
                    <strong>Precio por unidad:</strong>
                    <?= number_format($BuryTheLight["precio_compra"], 2); ?>
                    &dollar;COP
                </div>

                <div class="mb-3">
                    <strong>Descuento:</strong>
                    <?= $BuryTheLight["descuento_proveedores"]; ?>%
                </div>

                <?php if ($BuryTheLight["descuento_proveedores"] == 0) { ?>

                    <div class="mb-3">
                        <strong>Precio total:</strong>
                        <?= number_format($BuryTheLight["precio_compra"] * $BuryTheLight["cant_produc"], 2); ?> &dollar;COP
                    </div>

                <?php } else {
                    $descuento = $BuryTheLight["descuento_proveedores"] / 100;
                    $precio = $BuryTheLight["precio_compra"];
                    $cantidad = $BuryTheLight["cant_produc"]; ?>
                    <div class="mb-3">
                        <strong>Precio total:</strong>
                        <?= number_format(($precio * $cantidad) - ($precio * $cantidad * $descuento), 2); ?> &dollar;COP
                        <br>
                        <strong>Precio sin el descuento:</strong>
                        <?= number_format($BuryTheLight["precio_compra"] * $BuryTheLight["cant_produc"], 2); ?> &dollar;COP
                    </div>

                <?php } ?>


                <div class="mb-3">
                    <strong>Proveedores:</strong>
                    <?= $BuryTheLight["nom_prov"]; ?>
                </div>

                <div class="mb-3">
                    <strong>Sede surtida:</strong>
                    <?= $BuryTheLight["nom_sed"]; ?>
                </div>

                <?php if ($BuryTheLight["nom_est"] == "Pagada") { ?>

                    <h6 class="text-center fs-1 text-light rounded-3 bg-success" style="float: bottom;">

                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                        </svg>

                        <?= $BuryTheLight["nom_est"]; ?>
                    </h6>

                <?php } else { ?>
                    <div class="d-grid">

                        <h6 class="text-center fs-1 rounded-3 bg-warning mb-2" style="float: bottom;">

                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>

                            <?= $BuryTheLight["nom_est"]; ?>
                        </h6>

                        <a class="btn btn-success" href="?control=facturasdeproveedores&&funcion=Pagada&&id=<?= $BuryTheLight["id_facompras"]; ?>" title="Marcar como pagada">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                            </svg>
                        </a>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>

    <h1 class="display-2 text-center"> Control de información </h1>
    <h1 class="display-6">Añadir una nueva factura de proveedores</h1>

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