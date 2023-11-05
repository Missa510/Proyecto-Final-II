<?php
class Pagina
{
    function principal()
    {
        //CONTENIDO DE PAGINA PRINCIPAL
        include("vista/web/paginas/inicio.php");
    } //FIN PRINCIPAL


    function precios()
    {
        //CONTENIDO DE PAGINA PRECIOS 1
        include("vista/web/paginas/precios/precios1.php");
    } //FIN PRECIOS 1

    function precios2()
    {
        //CONTENIDO DE PAGINA PRECIOS 1
        include("vista/web/paginas/precios/precios2.php");
    } //FIN PRECIOS 2

    function precios3()
    {
        //CONTENIDO DE PAGINA PRECIOS 3
        include("vista/web/paginas/precios/precios3.php");
    } //FIN PRECIOS 3

} //FIN CLASE PAGINA
?>