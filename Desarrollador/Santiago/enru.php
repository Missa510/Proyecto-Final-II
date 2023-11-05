<?php
    $nave = "home";
    if(!isset($_GET['nave']) or $_GET['nave'] == 'home'){ 
        include('Contenidos/contenido_prin.php'); 
    }
    else{
        if($_GET['nave'] == "misiones"){
            include('Contenidos/mision.php');
        }
        elseif($_GET['nave'] == "visiones"){
            include('Contenidos/vision.php');
        }
        elseif($_GET['nave'] == "biografias"){
            include('Contenidos/biografia.php');
        }
        elseif($_GET['nave'] == "habilidades"){
            include('Contenidos/Habilidades.php');
        }
    }
?>