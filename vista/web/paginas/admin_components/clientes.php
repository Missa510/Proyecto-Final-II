<h1 class="Header">Clientes afiliados a nosotros</h1>
<div class="container-fluid">
    <div class="d-flex align-items-center justify-content-between">

        <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>

        <form action="?control=<?= $control ?>&&funcion=Busqueda" method="post" class="col-11 mb-3">

            <div class="input-group">
                <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </span>
                <?php if (!empty($_POST['query'])) { ?> <input type="text" class="form-control" name="query" value="<?= $_POST['query']; ?>" placeholder="Ingresa el dato a buscar"> <?php } else { ?> <input type="text" class="form-control" name="query" placeholder="Ingresa el dato a buscar"> <?php } ?>

                <select class="form-select" name="type">
                    <option value="dni">DNI (Docuento)</option>
                    <option value="apellido">Apellido</option>
                    <option value="nombre">Nombre</option>
                    <option value="telefono">Teléfono</option>
                    <option value="email">Email</option>
                    <option value="direccion">Dirección</option>
                </select>

                <input type="submit" class="btn btn-dark" value="Buscar">
            </div>
        </form>
    </div>


    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Tipo</th>
            <th scope="col">DNI</th>
            <th scope="col">Apellido(s)</th>
            <th scope="col">Nombre(s)</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Mail</th>
            <th scope="col">Dirección</th>
            <th scope="col">Estado</th>
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
                            <?= $BuryTherlight["id_clien"]; ?>
                        </td>
                        <td>
                            <div class="d-flex justify-content-center bg-secondary rounded-3" title="<?= $BuryTherlight["nom_tipo"]; ?>" style="cursor: pointer;">
                                <?= $BuryTherlight["iniciales"]; ?>
                            </div>
                        </td>
                        <td>
                            <?= $BuryTherlight["dni_clien"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["ape_clien"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["nom_clien"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["tel_clien"]; ?>
                        </td>
                        <td>
                            <a href="mailto:<?= $BuryTherlight["mail_clien"]; ?>" class="link-light">
                                <?= $BuryTherlight["mail_clien"]; ?>
                            </a>
                        </td>
                        <td>
                            <?= $BuryTherlight["direc_clien"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["nom_est"]; ?>
                        </td>
                        <td>
                            <a class="btn btn-outline-warning" href="?control=clientes&&funcion=Editar&&id=<?= $BuryTherlight["id_clien"]; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-outline-danger" href="?control=clientes&&funcion=ConfirmarEliminacion&&id=<?= $BuryTherlight["id_clien"]; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                <?php } else { ?>
                    <tr class="text-muted">
                        <td>
                            <?= $BuryTherlight["id_clien"]; ?>
                        </td>
                        <td>
                            <div class="d-flex justify-content-center bg-secondary rounded-3" title="<?= $BuryTherlight["nom_tipo"]; ?>" style="cursor: pointer;">
                                <?= $BuryTherlight["iniciales"]; ?>
                            </div>
                        </td>
                        <td>
                            <?= $BuryTherlight["dni_clien"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["ape_clien"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["nom_clien"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["tel_clien"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["mail_clien"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["direc_clien"]; ?>
                        </td>
                        <td>
                            <?= $BuryTherlight["nom_est"]; ?>
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
    <h1 class="display-2 text-center"> Gestión de clientes </h1>
    <h1 class="display-6">Añadir un nuevo cliente</h1>
    <form action="?control=clientes&&funcion=Agregar" class="formulario-add" method="post">
        <div class="mb-3">
            <label for="id_tipo" class="form-label">Tipo de Documento</label>
            <select type="number" class="form-select" name="tipo" id="id_tipo">
                <?php foreach ($select as $CollectiveConsciousness) { ?>

                    <option value="<?= $CollectiveConsciousness["id_tipo"]; ?>"><?= "{$CollectiveConsciousness['nom_tipo']} ({$CollectiveConsciousness['iniciales']})"; ?>
                    </option>

                <?php } ?>
            </select>
            <div class="text-muted"> Si el tipo de documetno que desea insertar no aparece, <a href="?control=tipo&&funcion=Estado">Haga click aquí para insertar o modificarlo</a> </div>
        </div>
        <div class="mb-3">
            <label for="id_dni" class="form-label">DNI</label>
            <input type="number" class="form-control" name="DNI" id="id_dni">
        </div>
        <div class="mb-3">
            <label for="id_ape" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="id_ape">
        </div>
        <div class="mb-3">
            <label for="id_nom" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="id_nom">
        </div>
        <div class="mb-3">
            <label for="id_tel" class="form-label">Teléfono</label>
            <input type="number" class="form-control" name="telefono" id="id_tel">
        </div>
        <div class="mb-3">
            <label for="id_mail" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="id_mail">
        </div>
        <div class="mb-3">
            <label for="id_dir" class="form-label">Dirección</label>
            <input type="text" class="form-control" name="direccion" id="id_dir">
        </div>
        <input type="submit" class="btn btn-dark" value="Añadir">
    </form>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>