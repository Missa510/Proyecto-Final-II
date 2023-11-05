<h1 class="Header">Estados de administración</h1>
<div class="container-fluid">
    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Estado</th>
        </thead>
        <tbody>
            <?php
            foreach ($tabla as $BuryTherlight) { ?>
                <tr>
                    <td>
                        <?= $BuryTherlight["id_est"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["nom_est"]; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <h1 class="display-2 text-center"> Control de información </h1>
    <h1 class="display-6">Añadir un nuevo estado</h1>
    <form action="?control=estados&&funcion=Agregar" class="formulario-add" method="post">
        <div class="mb-3">
            <label for="id_estado" class="form-label">Estado</label>
            <input type="text" name="estado" id="id_estado" class="form-control">
        </div>
        <input type="submit" class="btn btn-dark" value="Añadir">
    </form>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>