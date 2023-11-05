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

                    <h5 class="card-title text-center fs-1"><?= "{$BuryTherlight["ape_emp"]}, {$BuryTherlight["nom_emp"]}"; ?></h5>
                    <p class="card-text">
                <div class="section">
                    <h2>Información Personal</h2>
                    <p><strong>Fecha de Nacimiento:</strong> <?= date_format( date_create($BuryTherlight["fecha_de_nacimiento_emp"]), "F dS, Y H:i" ); ?> </p>
                    <p><strong>Dirección:</strong> <?= $BuryTherlight["direct_emp"]; ?></p>
                    <p><strong>Teléfono:</strong> (123) 456-7890</p>
                    <p><strong>Correo Electrónico:</strong> juan.perez@email.com</p>
                </div>
                <div class="section">
                    <h2>Experiencia Laboral</h2>
                    <ul>
                        <li>
                            <p><strong>Empresa XYZ</strong></p>
                            <p><em>Cargo:</em> Gerente de Ventas</p>
                            <p><em>Fecha de Inicio:</em> Enero 2010</p>
                            <p><em>Fecha de Finalización:</em> Presente</p>
                        </li>
                        <li>
                            <p><strong>Empresa ABC</strong></p>
                            <p><em>Cargo:</em> Analista de Proyectos</p>
                            <p><em>Fecha de Inicio:</em> Mayo 2005</p>
                            <p><em>Fecha de Finalización:</em> Diciembre 2009</p>
                        </li>
                    </ul>
                </div>
                <div class="section">
                    <h2>Educación</h2>
                    <ul>
                        <li>
                            <p><strong>Universidad XYZ</strong></p>
                            <p><em>Título:</em> Licenciatura en Administración de Empresas</p>
                            <p><em>Fecha de Graduación:</em> Junio 2005</p>
                        </li>
                        <li>
                            <p><strong>Instituto ABC</strong></p>
                            <p><em>Título:</em> Técnico en Informática</p>
                            <p><em>Fecha de Graduación:</em> Mayo 2002</p>
                        </li>
                    </ul>
                </div>


                </div>

            </div>
        <?php } ?>
    </div>
</div>

<?php require_once("vista/web/diseno/footer.php"); ?>


<!-- <div class="empleado">
                <div class="logo">
                    <img src="Imagenes\usericon.jpg" alt="User">
                </div>
                <div class="informacion">
                    <div class="id">
                        <strong>Id del empleado:</strong>
                        <?= $BuryTherlight["id_emp"]; ?>
                    </div>
                    <div class="dni">
                        <strong>Documento de Identidad (Cédula sí o sí):</strong>
                        <?= $BuryTherlight["dni_emp"]; ?>
                    </div>
                    <div class="nombres">
                        <strong>Apellidos y nombres:</strong>
                        <?= $BuryTherlight["ape_emp"] . ", " . $BuryTherlight["nom_emp"]; ?>
                    </div>
                    <div class="edad">
                        <strong>Edad:</strong>
                        <?= $BuryTherlight["edad_emp"]; ?> años de edad
                    </div>
                    <div class="telefono">
                        <strong>Teléfono:</strong>
                        (+57) <?= $BuryTherlight["tel_emp"]; ?>
                    </div>
                    <div class="direccion">
                        <strong>Domicilio:</strong>
                        <?= $BuryTherlight["direct_emp"]; ?>
                    </div>
                    <div class="genero">
                        <strong>Género:</strong>
                        <?php
                        echo $BuryTherlight["gender"];
                        ?>
                    </div>
                    <div class="eps">
                        <strong>EPS:</strong>
                        <?= $BuryTherlight["eps"]; ?>
                    </div>
                    <div class="CajaDeCompensacion">
                        <strong>Caja de compensación:</strong>
                        <?= $BuryTherlight["caja"]; ?>
                    </div>
                    <div class="cargo">
                        <strong>Cargo:</strong>
                        <?= $BuryTherlight["cargo"]; ?>
                    </div>
                    <div class="sueldo">
                        <strong>Sueldo:</strong>
                        <?= number_format($BuryTherlight["sueldo"], 2); ?> &dollar;COP
                    </div>
                    <div class="sede">
                        <strong>Sede:</strong>
                        <?= $BuryTherlight["nom_sed"]; ?>
                    </div>
                    <div class="descripcion">
                        <strong>Descripción u observaciones del empleado:</strong>
                        <?= $BuryTherlight["descrip_emp"]; ?>
                    </div>
                </div>
            </div> -->