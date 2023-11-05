<?php 
    include("Vista/Componentes/PartesDePagina/hd.php"); 
    include("Vista/Componentes/PartesDePagina/nav_users.php"); 
?>
<main>
    <div class="main-puro">
        <div id="fecha"></div>
        <h1 class="display-1 text-center" id="titulo">Moderadores</h1>
        <div class="mario position-relative start-50"></div>
        <p class="fs-5">
            Esta es una página de desarrolladores para la empresa S&J. Esta página aún está en desarrollo
            pero más adelnate estará en total funcionamiento.
            Mientras los moderadores de la página ponen en funcionamiento esta página, usarán este ejemplo de bloc
            (únicamente estaba en ingles).
        </p>
        <h1 class="display-4">Sample blog post</h1> 
        <p class="text-light">January 1, 2021 by...</p> 
        <p class="fs-5">
            This blog post shows a few different types of content that's supported and styled with Bootstrap. 
            Basic typography, lists, tables, images, code, and more are all supported as expected.

            This is some additional paragraph placeholder content. It has been written to fill the 
            available space and show how a longer snippet of text affects the surrounding content. We'll repeat it 
            often to keep the demonstration flowing, so be on the lookout for this exact same string of text.
        </p>
        <h1 class="display-2 text-center">Profile</h1>
        <div class="profile">
            <img src="Imagenes_generales/user.png" class="logo-user">
            <div class="user">
                <p class="fs-3">Usuario: <?php echo "<strong>".$name."</strong>"; ?></p>
                <p class="fs-3">Contraseña: <?php echo "<strong>".$pass."</strong>"; ?></p>
                <p class="fs-3">Tipo de nivel: <?php echo "<strong>".$tipo."</strong>" ?></p>
            </div>
        </div>
        <h1 class="display-2 text-center">Control de usuarios</h1>
        <?php require_once("Vista/Componentes/Tablas/tabla_usu_PerAdmin.php"); ?>
    </div>
</main>
<?php include("Vista/Componentes/PartesDePagina/foot.php"); ?>