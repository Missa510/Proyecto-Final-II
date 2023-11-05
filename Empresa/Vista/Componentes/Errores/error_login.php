<?php include("Vista/Componentes/PartesDePagina/hd.php"); ?>
<main>
    <div class="error-de-login mb-3">
        <div class="error-logo">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
        </div>
        <div class="mensaje">
            <div class="display-6 text-danger">Error</div>
            <div class="fs-4">
                El usuario, la contraseña o el tipo de nivel
                es incorrecto. Intente nuevamente revisando sus datos ingresados :(
            </div>
        </div>
        <a href="?control=navegacion&&funcion=login" class="btn btn-danger"> &leftarrow; </a>
    </div>
    <div class="main-puro">
        <h1 class="display-1 text-center" id="titulo">Error de login</h1>
        <p class="fs-5">
            Estos tipos de errores son muy comúnes cuando el usuario digitó un dato erroneo durante su proceso de Log In.
            Para evitar esto se debe confirmar el empleo correcto de los datos digitados anteriormente
        </p>
        <img src="Imagenes_generales/mess-error-image15.png" class="img-error mx-auto d-block" alt="Error">

    </div>
</main>
<?php include("Vista/Componentes/PartesDePagina/foot.php"); ?>