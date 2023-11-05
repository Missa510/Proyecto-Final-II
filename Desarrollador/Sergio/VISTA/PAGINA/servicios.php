
<header class="contenido-encabezado" id="contenido-encabezado">
	<div class="texto-encabezado">
        <?php
	        include("PLANTILLA/menu.php")
        ?>
			
		<h1 class="titulo">
			<br>Inventary Unity<br>¡Entra!<br>
			<span class="titulo-naranja-neon texto-regular">50% de Descuento</span>
		</h1>
		<p class="descripcion">
			Tenemos nueva sucursal<br>
			Por apertura, todas nuestros inventarios a mitad <br>
			de precio en Cra. 143 #143b 23, Col. Suba, Bilbao.
		</p>

			<a href="?opcion=contacto" class="btn-link texto-regular">Más información</a>
		</div>
	</header>

	<main>
		<section class="contenedor">
            <center> <h1 class="titulo">SERVICIOS</h1></center>
            <center><h1 class="titulo"><br>
            <span class="titulo-naranja-neon texto-regular">Desarrollo Web</span><br>
            </h1></center><br>

            
			<p><span class="letra-capital">I</span>NVENTARY UNITY será tu aliado para diseñar y desarrollar tu web, aplicación o proyecto tecnológico que quieras hacer realidad. 
                Fabricamos tu producto de software como te lo has imaginado. Abarcamos todo el proceso que va desde la fase de consultoría hasta la puesta en marcha. 
                Nuestro propósito es darte beneficios en costos y disminución en el tiempo de tu operación.
            </p>
            <center><h1 class="titulo">
            <span class="titulo-naranja-neon texto-regular">Desarrollo De Apps</span></h1><br></center>

			<p><span class="letra-capital">L</span>a presencia móvil es fundamental en la actualidad. Los smartphones y tablets son dos importantes canales de difusión de contenidos para los clientes. 
                Además, suelen ser más fáciles y cómodas de utilizar que una web móvil, permiten el aprovechamiento de las funcionalidades del dispositivo y ademas te 
                garantizamos que tu seguridad es lo mas importante para nosotros.
            </p>

		</section>
	</main>

	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
	<script>
		window.addEventListener('scroll', () => {
			const header = document.getElementById('contenido-encabezado');//OCULTAR AL BAJAR PANTALLA
			header.style.opacity = '1' - window.pageYOffset / 650;
		});
	</script>





<?php
	include("PLANTILLA/footer.php")
?>