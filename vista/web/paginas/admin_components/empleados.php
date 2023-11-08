<style>
    body {
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
    }

    .section {
        margin-bottom: 20px;
    }

    .section h2 {
        border-bottom: 1px solid #ccc;
        padding-bottom: 5px;
    }

    .section p {
        margin: 0;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        margin-bottom: 5px;
    }
</style>

<h1 class="Header">Empleados en nómina</h1>

<div class="container-fluid">

    <?php require_once("vista\web\paginas\admin_components\Opciones.php"); ?>

    <div class="tabla-de-empleados">

        <?php foreach ($tabla as $BuryTherlight) { ?>

            <div class="card mb-3" style="width: 100%;">

                <div class="card-body">
                    <figure class="figure d-flex align-items-center justify-content-center">
                        <img src="Imagenes\foto.png" class="figure-img img-fluid rounded" id="icon" width="200">
                        <figcaption class="figure-caption">photo_
                            <?= "{$BuryTherlight['dni_emp']}"; ?>
                        </figcaption>
                    </figure>
                    <h5 class="card-title text-center fs-1">
                        <?= "{$BuryTherlight["ape_emp"]}, {$BuryTherlight["nom_emp"]}"; ?>/<span class="fs-4 text-muted">
                            <?= $BuryTherlight['nom_est']; ?>
                        </span>
                    </h5>
                    <p class="card-text">
                    <div class="section">
                        <h2 class="text-center">Información Personal</h2>
                        <p><strong>Tipo de documento: </strong>
                            <?= "{$BuryTherlight['iniciales']} ({$BuryTherlight['nom_tipo']})"; ?>
                        </p>
                        <p><strong>DNI: </strong>
                            <?= number_format($BuryTherlight['dni_emp'], 0); ?>
                        </p>
                        <p><strong>Fecha de Nacimiento:</strong>
                            <?= date_format(date_create($BuryTherlight["fecha_de_nacimiento_emp"]), "F dS, Y"); ?>
                        </p>
                        <p><strong>Dirección:</strong>
                            <?= $BuryTherlight["direct_emp"]; ?>
                        </p>
                        <p><strong>Teléfono:</strong> (123) 456-7890</p>
                        <p><strong>Correo Electrónico:</strong> juan.perez@email.com</p>
                        <p> El/la emplead@ se identifica como
                            <?= $BuryTherlight['gender']; ?>
                        </p>
                    </div>
                    <div class="section">
                        <h2 class="text-center">Ámbito laboral</h2>
                        <p> <strong>Fecha de ingreso: </strong>
                            <?= date_format(date_create($BuryTherlight["fecha_ingreso_emp"]), "F dS, Y"); ?>
                        </p>
                        <p> <strong>Fecha de egreso: </strong>
                            <?= date_format(date_create($BuryTherlight["fecha_egreso_emp"]), "F dS, Y"); ?>
                        </p>
                        <p> <strong>Cargo: </strong>
                            <?= $BuryTherlight['cargo']; ?>
                        </p>
                        <p> <strong>Sueldo mensual: </strong>
                            <?= number_format($BuryTherlight['sueldo'], 2); ?> &dollar;COP
                        </p>
                        <p> <strong>Turno: </strong>
                            <?= $BuryTherlight['nom_turno']; ?>
                        </p>
                    </div>
                    <div class="section">
                        <h2 class="text-center">Salud</h2>
                        <p> <strong>EPS: </strong>
                            <?= $BuryTherlight["eps"]; ?>
                        </p>
                        <p> <strong>Caja de compensación: </strong>
                            <?= $BuryTherlight["caja"]; ?>
                        </p>
                        <p>
                            <strong>Descripción del empleado: </strong>
                            <?= $BuryTherlight["descrip_emp"]; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php require_once("vista/web/diseno/footer.php"); ?>