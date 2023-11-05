<?php require_once("Controlador/control_admin.php"); ?>
<div class="tab">
    <h1 class="display-6 text-center">Administradores</h1>
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
                    <td> <?= $row["nom_admin"]; ?> </td>
                    <td> <?= $row["pass_admin"]; ?> </td>
                    <td> <a href="mailto:<?=$row["mail_admin"]; ?>" class="link-light"> <?= $row["mail_admin"]; ?> </a> </td>
                </tr>
            </tbody>
        <?php }
        mysqli_free_result($mostrar_var); ?>
    </table>
</div>