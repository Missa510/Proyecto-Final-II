<?php include("Controlador/control_users.php"); ?>
<div class="tab">
    <h1 class="display-6 text-center">Usuarios Corriente</h1>
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
                    <td> <?= $row["nom_usu"]; ?> </td>
                    <td> <?= $row["pass_usu"]; ?> </td>
                    <td> <a href="mailto:<?= $row["mail_usu"]; ?>" class="link-light"> <?= $row["mail_usu"]; ?> </a> </td>
                </tr>
            </tbody>
        <?php }
        mysqli_free_result($mostrar_var); ?>
    </table>
</div>