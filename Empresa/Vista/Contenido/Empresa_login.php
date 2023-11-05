<?php
include("Vista/Componentes/PartesDePagina/hd.php");
include("Vista/Componentes/PartesDePagina/nav.php");
?>
<main>
    <div class="main-puro">
        <div class="cardeta">
            <h1 class="display-1 text-center" id="titulo">Access</h1>
            <p class="fs-4 text-center">
                Este es el login para los usuarios de la empresa S&J. Si eres uno de ellos, hola :3.
            </p>
            <p class="fs-5 text-justify">
                Cabe resaltar que <strong>La empresa S&J NO se hace responsable si usted proporciona
                    sus datos de registro a entidades que no sean pertenecientes a la empresa</strong>. Si tiene
                    alguna inquietud al momento de iniciar su sesión, por favor contactenos directamente a los
                    correos admitidos de la empresa cuyos dueños se encargarán de resolver y solventar
                    sus inquietudes <br><br>
                ¿Aún no tienes una cuenta? <a href="?control=navegacion&&funcion=registro" class="link-cardeta">Regístrate aquí</a>
                <br><br>
                Al utilizar nuestros servicios, nos confías tus datos. Entendemos que es una gran
                responsabilidad y nos esforzamos al máximo para proteger tu información y mantenerla
                lo más segura posible.<br><br>
            </p>
            <form action="?control=login&&funcion=logear" method="post">
                <div class="row g-2 mb-3">
                    <div class="form-floating col">
                        <input type="text" name="sus" class="form-control" id="Usuario" placeholder="Usuario" required>
                        <label for="Usuario">Usuario</label>
                    </div>
                    <div class="form-floating col">
                        <input type="password" name="pass" class="form-control" id="Password" placeholder="Password" required>
                        <label for="Password">Password</label>
                    </div>
                </div>
                <button class="btn btn-dark mb-3 col-2" type="button" onclick="ViewPassword()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                    View Password
                </button>
                <div class="form-floating mb-3 col">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="tipo" required>
                        <option selected>Tipo de nivel</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Moderador">Moderador</option>
                        <option value="Usuario Corriente">Usuario corriente</option>
                    </select>
                    <label for="floatingSelect">Tipo de usuario</label>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="invalidCheck" required>
                        <label for="invalidCheck">
                            Acepto los
                            <a href="?control=navegacion&&funcion=cuentas" class="link-dark">términos y condiciones</a>
                        </label>
                    </div>
                </div>
                <input type="submit" class="enviar mx-auto d-block" value="Sign up">
                <hr>
                <div class="piedelogin">
                    <a href="?control=navegacion&&funcion=cuentas" class="link-cardeta">¿Olvidaste el usuario?</a>
                    <a href="?control=navegacion&&funcion=cuentas" class="link-cardeta">¿Olvidaste la contraseña?</a>
                    <a href="?control=navegacion&&funcion=cuentas" class="link-cardeta">¿Olvidaste el tipo de usuario?</a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include("Vista/Componentes/PartesDePagina/foot.php"); ?>