<?php
include("Vista/Componentes/PartesDePagina/hd.php");
include("Vista/Componentes/PartesDePagina/nav.php");
?>
<main>
    <div class="main-puro">
        <div class="cardeta">
            <h1 class="display-1 text-center" id="titulo">Registro de Administradores</h1>
            <p class="fs-4 text-center">
                Este es el registro para crear nuevos usuarios que harán parte la empresa. Bienvenido
            </p>
            <p class="fs-5 text-justify">
                Cabe resaltar que <strong>La empresa S&J no se hace responsable si usted proporciona
                    sus datos de registro a entidades que no sean pertenecientes a la empresa. Si tiene
                    alguna inquietud al momento de su sesión, por favor contactenos directamente a los
                    correos admitidos de la empresa cuyos dueños se encargarán de resolver y solventar
                    sus inquietudes</strong>
                <br><br>
                Después de su registro, se le enviará un correo de verificación por su correo electrónico
                proporcionado por usted

                <br>
                <br>

                <strong>Nota del desarrollador:</strong> Cuando termines de actualizar el usuario, la sesión se te
                acabará y
                debes volver a ingresar, pio perdo por eso -_- Para regresar a la página principal sin hacer ningún
                cambio
                al usuario, debes apretar la tecla <code>alt</code> seguido de la flecha izquiera
                <code>&leftarrow;</code>.
                A continuación, debes refrescar la página y listo 
            </p>
            <form action="?control=registro&&funcion=registroAdmin" method="post">
                <h1 class="display-6 text-center">Registro de usuario</h1>
                <div class="row g-2 mb-3">
                    <div class="form-floating col-6">
                        <input type="text" name="sus" class="form-control" id="Usuarios" placeholder="Usuario" required>
                        <label for="Usuarios">Usuario</label>
                        <div class="form-text text-dark">Debe ser original y no debe olvidarse nunca</div>
                    </div>
                    <div class="form-floating col-6">
                        <div class="form-floating">
                            <input type="password" name="pass" class="form-control" id="Password" placeholder="Password"
                                required>
                            <label for="Password">Password</label>
                        </div>
                        <div class="form-text text-dark">Debe tener máximo 15 caracteres</div>
                    </div>
                </div>
                <button class="btn btn-dark mb-3 col-2" type="button" onclick="ViewPassword()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye"
                        viewBox="0 0 16 16">
                        <path
                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path
                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                    View Password
                </button>
                <div class="row g-2 mb-4">
                    <div class="form-floating col">
                        <input type="email" name="email" class="form-control" id="Email" placeholder="Email" required>
                        <label for="Email">Email</label>
                        <div class="form-text text-dark">Se le contactará a su correo después del registro</div>
                    </div>
                    <div class="form-floating col">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                            name="tipo" required>
                            <option value="Administrador">Administrador</option>
                        </select>
                        <label for="floatingSelect">Tipo de usuario</label>
                        <div class="form-text text-dark">Solo Administradores</div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="invalidCheck" required>
                            <label for="invalidCheck">
                                Acepto los
                                <a href="?control=navegacion&&funcion=cuentas" class="link-dark">términos y
                                    condiciones</a>
                            </label>
                        </div>
                    </div>
                </div>
                <input type="submit" class="enviar mx-auto d-block" value="Register Now">
            </form>
        </div>
    </div>
</main>
<?php include("Vista/Componentes/PartesDePagina/foot.php"); ?>