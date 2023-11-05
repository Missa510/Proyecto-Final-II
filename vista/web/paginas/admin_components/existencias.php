<div class="container-fluid">
    <h1 class="display-6 text-center">Existencias de un producto en almacen</h1>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Ultima fecha de actualización</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Sedes</th>
            <th scope="col">Producto</th>
        </thead>
        <?php
        foreach ($tabla as $BuryTherlight) {
            ?>
            <tbody>
                <tr>
                    <td>
                        <?= $BuryTherlight["id_exist"]; ?>
                    </td>
                    <td>
                        <?= date_format( date_create($BuryTherlight["fecha_exist_entrada"]), "F dS, Y H:i" );?>
                    </td>
                    <td>
                        <?= number_format( $BuryTherlight["cant_produc"], 2); ?> unid.
                    </td>
                    <td>
                        <?= $BuryTherlight["nom_sed"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["nom_produc"]; ?>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>