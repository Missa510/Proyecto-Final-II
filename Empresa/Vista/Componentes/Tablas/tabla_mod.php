<?php require_once("Controlador/control_moders.php"); ?>
<div class="tab">
    <h1 class="display-6 text-center">Moderadores</h1>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Usuario</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Correo (mail)</th>
        </thead>
        <?php
        while ($row = mysqli_fetch_assoc($mostrar_var)) {
        ?>
            <tbody>
                <tr>
                    <td> <?= $row["nom_mod"]; ?> </td>
                    <td> <?= $row["pass_mod"]; ?> </td>
                    <td> <a href="mailto:<?= $row["mail_mod"]; ?>" class="link-light"> <?= $row["mail_mod"]; ?> </a> </td>
                </tr>
            </tbody>
        <?php }
        mysqli_free_result($mostrar_var); ?>
    </table>
</div>