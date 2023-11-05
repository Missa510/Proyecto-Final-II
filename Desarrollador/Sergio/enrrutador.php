<!-- LLAMAR PAGINAS -->
<?php
$opcion="inicio";
if(!isset($_GET['opcion']))
{
    //LLLAMAR INFO PAGINA PRINCIPAL
    include("VISTA/PAGINA/home.php");

}//FIN INICIO
    else{
        if($_GET["opcion"]=='home')
        {
            //LLAMAR HOME
            include("VISTA/PAGINA/home.php");
        }//FIN HOME

        if($_GET["opcion"]=='servicios')
        {
            //LLAMAR SERVICIOS
            include("VISTA/PAGINA/servicios.php");
        }//FIN SERVICIOS

        if($_GET["opcion"]=='proyectos')
        {
            //LLAMAR PROYECTOS
            include("VISTA/PAGINA/proyectos.php");
        }//FIN PROYECTOS

        if($_GET["opcion"]=='contacto')
        {
            //LLAMAR CONTACTO
            include("VISTA/PAGINA/contacto.php");
        }//FIN CONTACTO

        //----------------------------------------- INICIO LLAMAR EMPRESA  --------------------------------------//

        if($_GET["opcion"]=='empresa')
        {
            //LLAMAR EMPRESA
            header("location:../EMPRESAv2.0/index.php");
        }//FIN EMPRESA

        
        //----------------------------------------- FIN LLAMAR EMPRESA   --------------------------------------//

        //----------------------------------------- INICIO LLAMAR BLOG Y PAGINAS DEL BLOG --------------------------------------//     

        if($_GET["opcion"]=='blog')
        {
            //LLAMAR BLOG
            include("VISTA/PAGINA/blog_programacion/principal.html");
        }//FIN BLOG      
        
    if($_GET["opcion"]=='pb')
        {
            //LLAMAR PROGRAMACION BASICA
            include("VISTA/PAGINA/blog_programacion/paginas/programacion.html");
        }//FIN PROGRAMACION BASICA  
        
    if($_GET["opcion"]=='df')
        {
            //LLAMAR DIAGRAMAS DE FLUJO
            include("VISTA/PAGINA/blog_programacion/paginas/diagramas.html");
        }//FIN DIAGRAMAS DE FLUJO
        
    if($_GET["opcion"]=='ps')
        {
            //LLAMAR PSEUDOCODIGO
            include("VISTA/PAGINA/blog_programacion/paginas/pseudocodigo.html");
        }//FIN PSEUDOCODIGO 
        
    if($_GET["opcion"]=='dt')
        {
            //LLAMAR DATOS
            include("VISTA/PAGINA/blog_programacion/paginas/datos.html");
        }//FIN DATOS

    if($_GET["opcion"]=='ds')
        {
            //LLAMAR DISEÑO WEB
            include("VISTA/PAGINA/blog_programacion/paginas/disenio.html");
        }//FIN DISEÑO WEB

    if($_GET["opcion"]=='hps')
        {
            //LLAMAR HIPERLINKS
            include("VISTA/PAGINA/blog_programacion/paginas/index.html");
        }//FIN DISEÑO HIPERLINKS

    if($_GET["opcion"]=='lts')
        {
            //LLAMAR LISTAS
            include("VISTA/PAGINA/blog_programacion/paginas/listas.html");
        }//FIN LISTAS

    if($_GET["opcion"]=='ad')
        {
            //LLAMAR AUDIO
            include("VISTA/PAGINA/blog_programacion/paginas/audio.html");
        }//FIN AUDIO  
        
    //----------------------------------------- FIN LLAMAR BLOG Y PAGINAS DEL BLOG --------------------------------------//        

}
?>