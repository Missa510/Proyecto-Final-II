<?php include("Controlador/control_usersEst.php"); ?>
<div class="tab">
    <h1 class="display-6 text-center">Usuarios Corriente</h1>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Usuario</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Correo (mail)</th>
            <th scope="col">Estado</th>
            <th scope="col">Actualizar Datos</th>
            <th scope="col">Eliminar Usuario</th>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($mostrar_var)) {
                if ($row['estado_nom'] != "Activo") {
                    ?>
                    <tr>
                        <td>
                            <?= $row["id_usu"]; ?>
                        </td>
                        <td>
                            <?= $row["nom_usu"]; ?>
                        </td>
                        <td>
                            <?= $row["pass_usu"]; ?>
                        </td>
                        <td>
                            <?= $row["mail_usu"]; ?>
                        </td>
                        <td>
                            <?= $row["estado_nom"]; ?>
                        </td>
                        <td> No puede ser eidtado </td>
                        <td> No puede ser eliminado </td>
                    </tr>
                <?php } else { ?>
                    <tr>
                        <td>
                            <?= $row["id_usu"]; ?>
                        </td>
                        <td>
                            <?= $row["nom_usu"]; ?>
                        </td>
                        <td>
                            <?= $row["pass_usu"]; ?>
                        </td>
                        <td> <a href="mailto:<?= $row["mail_usu"]; ?>" class="link-light"> <?= $row["mail_usu"]; ?> </a> </td>
                        <td>
                            <?= $row["estado_nom"]; ?>
                        </td>
                        <td> <a href="?control=modificar&&funcion=modificar&&id_usu=<?= $row["id_usu"]; ?>&&type=User"
                                class="btn btn-outline-secondary"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path
                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                </svg></a> </td>
                        <td> <a href="?control=eliminar&&funcion=eliminar&&id_usu=<?= $row["id_usu"]; ?>&&type=User"
                                class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg></a> </td>
                    </tr>
                <?php }
            }
            mysqli_free_result($mostrar_var); ?>
        </tbody>
    </table>
    <a href="?control=navegacion&&funcion=registroUser" class="btn btn-warning">Agregar nuevo usuario &plus; </a>
</div>