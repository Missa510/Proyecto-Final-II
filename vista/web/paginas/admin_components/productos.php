<h1 class="Header">Prodcutos que poseemos</h1>
<div class="container-fluid">
    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Codigo</th>
            <th scope="col">Prodcuto</th>
            <th scope="col">Precio de Venta</th>
            <th scope="col">Precio de Compra</th>
            <th scope="col">Notas del producto</th>
            <th scope="col">Estado</th>
            <th scope="col">Editar</th>
            <th scope="col">Agotado</th>
        </thead>
        <tbody>
            <?php
            foreach ($tabla as $BuryTherlight) {
                if ($BuryTherlight["nom_est"] == "En existencia") { ?>
                    <tr>
                        <td>
                            <?= $BuryTherlight["id_produc"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["codigo_product"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["nom_produc"]; ?>
                        </td>
                        <td>
                            <?= number_format($BuryTherlight["precio_venta"], 2); ?> &dollar;COP
                        </td>
                        <td>
                            <?= number_format($BuryTherlight["precio_compra"], 2); ?> &dollar;COP
                        </td>
                        <td>
                            <?= $BuryTherlight['notas_product']; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["nom_est"]; ?>
                        </td>
                        <td>
                            <a class="btn btn-outline-warning" href="?control=productos&&funcion=Editar&&id=<?= $BuryTherlight["id_produc"]; ?>">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-outline-danger" href="?control=productos&&funcion=MarcarComoAgotado&&id=<?= $BuryTherlight["id_produc"]; ?>" title="Marcar como agotado">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-x-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM6.854 5.146a.5.5 0 1 0-.708.708L7.293 7 6.146 8.146a.5.5 0 1 0 .708.708L8 7.707l1.146 1.147a.5.5 0 1 0 .708-.708L8.707 7l1.147-1.146a.5.5 0 0 0-.708-.708L8 6.293 6.854 5.146z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                <?php } else { ?>
                    <tr class="text-muted">
                        <td>
                            <?= $BuryTherlight["id_produc"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["codigo_product"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["nom_produc"]; ?>
                        </td>
                        <td>
                            <?= number_format($BuryTherlight["precio_venta"], 2); ?> &dollar;COP
                        </td>
                        <td>
                            <?= number_format($BuryTherlight["precio_compra"], 2); ?> &dollar;COP
                        </td>
                        <td>
                            <?= $BuryTherlight['notas_product']; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["nom_est"]; ?>
                        </td>
                        <td>
                            <a class="btn btn-outline-warning" href="?control=productos&&funcion=Editar&&id=<?= $BuryTherlight["id_produc"]; ?>">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-outline-success" href="?control=productos&&funcion=MarcarEnExistencia&&id=<?= $BuryTherlight["id_produc"]; ?>" title="Marcar como existente">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-check-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>

    <h1 class="display-2 text-center"> Control de información </h1>

    <h1 class="display-6">Añadir un nuevo producto</h1>

    <form action="?control=productos&&funcion=Agregar" class="formulario-add" method="post">
        <div class="mb-3">
            <label for="id_codigo" class="form-label">Codigo</label>
            <input type="text" name="codigo" id="id_codigo" class="form-control">
        </div>
        <div class="mb-3">
            <label for="id_producto" class="form-label">Nombre del prodcuto</label>
            <input type="text" name="producto" id="id_producto" class="form-control">
        </div>
        <div class="mb-3">
            <label for="id_compra" class="form-label">Precio de compra</label>
            <input type="number" min="1" name="precio_compra" class="form-control" id="id_compra">
            <div class="form-text">Coloque el precio al que se compró el producto a los proveedores. La ganancia se genera automáticamente con el 25% de ganancia</div>
        </div>
        <div class="mb-3">
            <label for="id_notas" class="form-label">Notas del prodcuto</label>
            <textarea class="form-control" name="notas" id="id_notas"></textarea>
        </div>
        <input type="submit" class="btn btn-dark" value="Añadir">
    </form>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>