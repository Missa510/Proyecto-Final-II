<?php
require_once "Vista/Componentes/PartesDePagina/hd.php";
require_once "Vista/Componentes/PartesDePagina/nav_users.php";

#Traer de la base de datos
$id = $rep[0]["id_admin"];
$sus = $rep[0]["nom_admin"];
$pass = $rep[0]["pass_admin"];
$mail = $rep[0]["mail_admin"];
$tipo = $rep[0]["tipo_admin"];
$est = $rep[0]["fkestado"];
?>
<main>
    <div class="main-puro">
        <h1 class="display-1 text-center mb-4" id="titulo">Modificar administradores</h1>
        <p class="fs-5">
            <strong>Nota de los desarrolladores:</strong> Cuando termines de actualizar el usuario, la sesión se te acabará y
            debes volver a ingresar, pedimos perdón por eso. Para regresar a la página principal sin hacer ningún cambio
            al usuario, debes apretar la tecla <code>alt</code> seguido de la flecha izquiera <code>&leftarrow;</code>.
            A continuación, debes refrescar la página y listo 
        </p>
        <form action="?control=modificar&&funcion=actualizar" method="post" class="mt-4 mb-4">
            <input type="hidden" name="id" id="Id" value="<?= $id; ?>">
            <div class="row g-2 mb-3">
                <div class="form-floating col">
                    <input type="text" name="sus" class="form-control" id="Usuarios" value="<?= $sus; ?>"
                        placeholder="Usuario" required>
                    <label for="Usuarios">Usuario</label>
                </div>
                <div class="form-floating col">
                    <div class="form-floating">
                        <input type="password" name="pass" class="form-control" id="Password" value="<?= $pass; ?>"
                            placeholder="Password" required>
                        <label for="Password">Password</label>
                    </div>
                </div>
            </div>
            <button class="btn btn-dark mb-3 col-2" type="button" onclick="ViewPassword()">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye"
                    viewBox="0 0 16 16">
                    <path
                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                </svg>
                View Password
            </button>
            <div class="row g-2 mb-4">
                <div class="form-floating col">
                    <input type="email" name="email" class="form-control" id="Email" value="<?= $mail; ?>"
                        placeholder="Email" required>
                    <label for="Email">Email</label>
                </div>
                <div class="form-floating col">
                    <select class="form-select" id="tipo" aria-label="Floating label select example" name="tipo"
                        required>
                        <option value="<?= $tipo ?>"><?= $tipo ?></option>
                    </select>
                    <label for="tipo">Tipo de usuario</label>
                    <div class="form-text text-dark">No se puede modificar el tipo de nivel</div>
                </div>
                
            </div>
            <input type="submit" class="enviar mx-auto d-block" value="Actualizar">
        </form>
    </div>
</main>
<?php require_once "Vista/Componentes/PartesDePagina/foot.php" ?>