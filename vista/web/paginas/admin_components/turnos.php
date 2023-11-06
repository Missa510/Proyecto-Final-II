<h1 class="Header">Turnos del personal</h1>
<div class="container-fluid">
    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Turno</th>
            <th scope="col">Hora de entrada</th>
            <th scope="col">Hora de salida</th>
            <th scope="col">Esatdo</th>
            <th scope="col">Editar</th>
            <th scope="col">Inhabilitar</th>
        </thead>
        <tbody>
            <?php
            foreach ($tabla as $BuryTherlight) {
                if ($BuryTherlight["nom_est"] == "Habilitado") {
            ?>
                    <tr>
                        <td>
                            <?= $BuryTherlight["id_turnos"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["nom_turno"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["entrada"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["salida"] ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["nom_est"] ?>
                        </td>
                        <td>
                            <a class="btn btn-outline-warning" href="?control=turnos&&funcion=Editar&&id=<?= $BuryTherlight["id_turnos"]; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-outline-danger" href="?control=turnos&&funcion=ConfirmarEliminacion&&id=<?= $BuryTherlight["id_turnos"]; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                <?php } else { ?>
                    <tr class="text-muted">
                        <td>
                            <?= $BuryTherlight["id_turnos"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["nom_turno"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["entrada"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["salida"] ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["nom_est"] ?>
                        </td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>

    <h1 class="display-2 text-center"> Control de información </h1>
    <h1 class="display-6 md-auto">Añadir un nuevo turno</h1>
    <form action="?control=turnos&&funcion=Agregar" class="formulario-add" method="post">
        <div class="mb-3">
            <label for="id_turno" class="form-label">Nombre del turno</label>
            <input type="text" name="turno" id="id_turno" class="form-control">
        </div>
        <div class="mb-3">
            <label for="id_entrada" class="form-label">Hora de entrada</label>
            <input type="time" name="entrada" id="id_entrada" class="form-control">
            <div class="text-muted">En formato de 24 horas</div>
        </div>
        <div class="mb-3">
            <label for="id_salida" class="form-label">Hora de salida</label>
            <input type="time" name="salida" id="id_salida" class="form-control">
            <div class="text-muted">En formato de 24 horas</div>
        </div>
        <input type="submit" class="btn btn-dark" value="Añadir">
    </form>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>