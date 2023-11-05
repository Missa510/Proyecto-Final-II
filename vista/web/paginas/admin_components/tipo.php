<h1 class="Header">Tipo de Documento</h1>
<div class="container-fluid">
    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Iniciales</th>
            <th scope="col">Tipo</th>
            <th scope="col">Editar</th>
        </thead>
        <tbody>
            <?php
            foreach ($tabla as $BuryTherlight) {
            ?>
                <tr>
                    <td>
                        <?= $BuryTherlight["id_tipo"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["iniciales"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["nom_tipo"]; ?>
                    </td>
                    <td>
                        <a class="btn btn-outline-warning" href="?control=tipo&&funcion=Editar&&id=<?= $BuryTherlight["id_tipo"]; ?>">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                            </svg>
                        </a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
    <h1 class="display-2 text-center"> Control de información </h1>

    <h1 class="display-6">Añadir un nuevo tipo de documento</h1>

    <form action="?control=tipo&&funcion=Agregar" class="formulario-add" method="post">
        <div class="mb-3">
            <label for="id_iniciales" class="form-label">Iniciales</label>
            <input type="text" name="iniciales" id="id_iniciales" class="form-control">
        </div>
        <div class="mb-3">
            <label for="id_tipo" class="form-label">Tipo de Documento</label>
            <input type="text" name="tipo" class="form-select" id="id_tipo">
        </div>
        <input type="submit" class="btn btn-dark" value="Añadir">
    </form>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>