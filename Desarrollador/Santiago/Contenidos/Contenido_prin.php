<!-- Header -->
<?php
    include('Componentes/Header.php');
?>
<!-- Carusel de prueba, papa, para que quede como una página bien de pinga -->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="Imagenes/Carrusel1.jpg" alt="Imagen de carrusel" height="100%" width="100%" class="img-fluid">
        <div class="container">
          <div class="carousel-caption bg-light text-dark">
            <h1>Desarrollador web o Web Developer</h1>
            <p>Aquí se estará diciendo los beneficios para contratar a un web developer.</p>
            <p><a class="btn btn-md btn-outline-danger" href="https://en.wikipedia.org/wiki/Web_developer" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
              Click aquí para saber más
            </a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Imagenes/Carrusel2.jpg" alt="Imagen de carrusel" height="100%" width="100%" class="img-fluid">
        <div class="container">
          <div class="carousel-caption bg-light text-dark">
            <h1>¿Por qué Santiago es tan bueno haciendo websites?</h1>
            <p>¿Quién sabe? La experiencia y práctica para desrrollar habilidades hacen que el ser humano mejore en el aspecto trabajado.</p>
            <p><a class="btn btn-md btn-outline-danger" href="https://www.google.com/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
              <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
            </svg>
              Link a google
            </a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="Imagenes/Carrusel3.jpg" alt="Imagen de carrusel" height="100%" width="100%" class="img-fluid">
        <div class="container">
          <div class="carousel-caption bg-light text-dark">
            <h1>Me gustaría contratar un Web Developer.</h1>
            <p>Excelente! En esta página podrás ver las ventajas de contratarme.</p>
            <p><a class="btn btn-md btn-outline-danger" href="https://mega.nz/file/ZvRXDLwC#afL5LjccRWyESg8RIG8ce2cY39yX_Ltq-GbyQ1wSlkg" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cloud-download" viewBox="0 0 16 16">
              <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
              <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
            </svg>
              Five Nights At Freddy's 2 MEGA link
            </a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Texto de bienvenida -->
<div class="container">
    <h1 class="display-1 text-center fst-italic">Me as developer</h1>
</div>
<!-- Santiago en tarjeta -->
<div class="card mb-3 container-fluid" style="max-width: 850px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="Imagenes/santiagoXD.jpg" class="img-fluid rounded-start" alt="imagen de Santiago">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title text-center fs-1">Santiago Quintero</h5>
        <p class="card-text fst-italic" style="font-size: 19px; text-align: justify;">
            Siendo un jóven ambicioso y muy dedicado, Santiago es un desarrollador nato con habilidades
            impresionantes con las computadoras siempre es demasiado comprometido con sus actividades y
            siempre busca mejorar sus capácidades para la realización de sus metas y poder convertirse en
            un <strong>Web Developer</strong> completo
        </p>
        <p class="card-text"><small class="text-muted">Writed 08th aug. 2022</small></p>
      </div>
    </div>
  </div>
</div>
<!-- Precios -->
<div class="container">
  <hr>
  <h1 class="display-1 text-center">Precios que manejo</h1>
  <p class="fst-italict fs-4">
    Si estás interesado en saber los precios que puedo aceptar por mis servicios para que te desenvuelvas en un
    entorno digital (o solo por hobbie, nunca se juzga a los clientes)
  </div>
</p>
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center container-fluid">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fs-3">Website single</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">10 - 5$USD<small class="text-muted fw-light">/(pocos recursos)</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><strong>Entrega:</strong> 1 semana</li>
              <li><strong>Tiempo de trabajo:</strong> 1 - 2 horas diarias</li>
              <li>
                <strong>Cyber-seguridad:</strong>
                <small class="bg-warning">Media</small> - <small class="bg-success">Alta</small>
              </li>
              <li>
                <strong>Recomendaciones:</strong> El servicio sirve para páginas que solo usan
                <a href="https://es.wikipedia.org/wiki/Desarrollo_web_Front-end" target="_blank" class="link-danger">Front-End</a>. Pero el sitio se verá muy bien
                (garantizado)<br><br><br><br>
              </li>
            </ul>
            <a role="button" class="w-100 btn btn-lg btn-outline-danger" href="mailto:sjqv05@gmail.com">
              Me interesa más este
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fs-3">Website medium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">15$UDS<small class="text-muted fw-light">/(recursos medios)</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><strong>Entrega:</strong> 2 - 3 semanas</li>
              <li><strong>Tiempo de trabajo:</strong> 4 - 5 horas diarias</li>
              <li>
                <strong>Cyber-seguridad:</strong><small class="bg-success">Alta</small>
              </li>
              <li>
                <strong>Recomendaciones:</strong> Este servicio es muy bueno para páginas que usan tanto
                <a href="https://es.wikipedia.org/wiki/Desarrollo_web_Front-end" target="_blank" class="link-danger">Front-End</a> 
                y 
                <a href="https://es.wikipedia.org/wiki/Desarrollo_web_Back-end" target="_blank" class="link-danger">Back-End</a>.
                Una excelente elección para usar en casos de empresarios digitales que iniciaron recientemente<br><br><br>
              </li>
            </ul>
            <a role="button" class="w-100 btn btn-lg btn-danger" href="mailto:sjqv05@gmail.com">
              Me interesa más este
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-danger">
          <div class="card-header py-3 text-bg-primary border-danger">
            <h4 class="my-0 fs-3">Website professional</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">20 - 25$UDS<small class="text-muted fw-light">/(recursos completos)</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><strong>Entrega:</strong> 5 semanas o menos</li>
              <li><strong>Tiempo de trabajo:</strong> 7 - 8 horas diarias</li>
              <li>
                <strong>Cyber-seguridad:</strong><small class="bg-primary">Muy alta</small>
              </li>
              <li>
                <strong>Recomendaciones:</strong> El mejor servicio de páginas y aplicaciones web que ofrezco. Websites
                completos que cuenta con una base de datos que se le proporsiona a su disposición, con acesorias las 24 horas.
              </li>
            </ul>
            <a role="button" class="w-100 btn btn-lg btn-danger" href="mailto:sjqv05@gmail.com">
              Me interesa más este
            </a>
          </div>
        </div>
      </div>
    </div>
<!-- Footer -->
<?php
    include('Componentes/Footer.php');
?>