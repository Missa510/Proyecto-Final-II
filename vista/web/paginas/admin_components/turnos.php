<div class="container-fluid">
    <h1 class="display-6 text-center">Turnos de los empleados</h1>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Turno</th>
            <th scope="col">Hora de entrada</th>
            <th scope="col">Hora de salida</th>
        </thead>
        <?php
        foreach ($tabla as $BuryTherlight) {
        ?>
            <tbody>
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
                </tr>
            </tbody>
        <?php } ?>
    </table>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>