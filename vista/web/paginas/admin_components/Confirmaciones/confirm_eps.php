<h1 class="Header"> Confirmación de datos </h1>

<div class="confirmar">
    <div class="cont">
        <p class="display-6"> ¿Estás completamente segur@? </p>
        <hr>
        <p class="fs-5">
            ¿Estás completamente segur@ de inhabilitar la eps <?= $id; ?> (<?= $con[0]["eps"]; ?>) de manera permanente?
        </p>
        <form class="m-4 p-2" action="?control=eps&&funcion=Eliminar&&id=<?= $id; ?>" method="post">
            <div class="btn-group" role="group">
                <a href="?control=eps&&funcion=Eliminar&&id=<?= $id; ?>" class="btn btn-dark btn-lg"> Aceptar</a>
                <a href="?control=eps&&funcion=Estado" class="btn btn-light btn-lg"> Cancelar &cross; </a>
            </div>
        </form>
    </div>
</div>

<?php require_once("vista/web/diseno/footer.php"); ?>