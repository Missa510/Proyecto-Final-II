<div class="container mt-3">
    <div class="formulario">
        <form action="?control=administrador&&funcion=verificacion" method="post">
            <h1 class="display-5 text-center">Log in</h1>
            <p class="fs-5 text-center">
                Este es el log in para acceder a la administración de la base de datos 
            </p>
            <br>
            <div class="name">
                <input type="text" id="user" name="user" required>
                <label for="user">Usuario</label>
            </div>
            <div class="password">
                <input type="password" id="password" name="password" required>
                <label for="password">Contraseña</label>
                <button class="btn-pass" type="button" onclick="ViewPassword()">
                    <span class="material-symbols-sharp">
                        visibility
                    </span>
                </button>
            </div>
            <div class="check text-center">
                <input type="checkbox" class="form-check-input" id="check" required>
                <label for="check"> Acepto los <a href="Empresa/?control=navegacion&&funcion=cuentas" target="_blank">términos y condiciones</a></label>
            </div>
            <div class="send text-center">
                <input type="submit" class="login" name="Btn-2" value="Log in">
            </div>
        </form>
    </div>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>