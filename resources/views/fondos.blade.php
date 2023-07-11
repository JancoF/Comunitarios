
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Headers · Bootstrap v5.3</title>

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">

     <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <style>
    .form-control-dark {
border-color: var(--bs-gray);
}
.form-control-dark:focus {
border-color: #fff;
box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
}

.text-small {
font-size: 85%;
}

.dropdown-toggle:not(:focus) {
outline: 0;
}

  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

 
  .bi {
    vertical-align: -.125em;
    fill: currentColor;
  }

  .nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
  }

  .nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
  }

  .bd-mode-toggle {
    z-index: 1500;
  }

  
  .featurette-divider {
    margin: 5rem 0; /* Space out the Bootstrap <hr> more */
  }
  .featurette-heading {
    letter-spacing: -.05rem;
  }
  .carousel {
    margin-bottom: 4rem;
  }

  .carousel-caption {
    bottom: 3rem;
    z-index: 10;
  }

  .carousel-item {
    height: 32rem;
  }

  .carousel-image {
    object-fit: cover;
    object-position: center;
    width: 100%;
    height: 100%;
  }
</style>


<!-- Custom styles for this template -->
<link href="headers.css" rel="stylesheet">

  <!-- HEADER -->

<main>
<header class="p-3 text-bg" style="background-color: while;">
<div class="container">
  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <a class="navbar-brand" href="#">
        <img src="images/LogoComunitarios.png" alt="logo" width="230" height="50">
      </a>

    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
      <li><a href="conocenos" class="nav-link px-2 text-dark">INICIO</a></li>
      <li><a href="hacemos" class="nav-link px-2 text-dark">PROGRAMAS Y FONDOS</a></li>
      <li><a href="fondos" class="nav-link px-2 text-dark">SERVICIOS</a></li>
      <li><a href="fondos" class="nav-link px-2 text-dark">CONTACTOS</a></li>
    </ul>

    <div class="text-end">
      <button type="button" class="btn btn-primary" style="background-color: #142f43;">Ingresa</button>
      <button type="button" class="btn btn-primary" style="background-color: #142f43;">Regístrate</button>
    </div>
  </div>
</div>
</header>

    
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="https://upload.wikimedia.org/wikipedia/commons/0/00/Vista_de_Puno_y_el_Titicaca%2C_Per%C3%BA%2C_2015-08-01%2C_DD_63.JPG" alt="Imagen" width="100%" height="100%" class="carousel-image">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="https://www.peru.travel/Contenido/Destino/Imagen/pe/37/1.3/Principal/Los%20Uros.jpg" alt="Imagen" width="100%" height="100%" class="carousel-image">

        <div class="container">
          <div class="carousel-caption">
            <h1>Comunitarios 2</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="https://www.peruhop.com/wp-content/uploads/Puno-Guide-Gallery-2.jpg" alt="Imagen" width="100%" height="100%" class="carousel-image">

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>comonitarios 3</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
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

<!---fin de carrusel--->

<div class="container col-xxl-8 px-4 ">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="images/Imagen1.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Nuestro proposito</h1>
      <p class="lead">Al 2026  somos una "Institución promotora de la articulación y filantropía regional siendo catalizador para el cierre de brechas impulsando y promoviendo <strong> el desarrollo de al menos 100 iniciativas que resuelvan desafíos desde y para la comunidad puneña".</strong>
      </p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
       </div>
    </div>
  </div>
</div>


<div class=" mb-1 text-white" style="background-color: #ff4563;">
<div class=" container py-5">
  <h1 class="text-center">¿Cómo facilitamos solución?</h1>
<div class=" py-5 row align-items-md-stretch">
  <div class="col-md-6">
    <div class="h-100 p-5 text-bg-dark rounded-3">
      <h2>Modelo de inpacto</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita molestias animi possimus soluta quos minima officiis architecto, perferendis esse eius id explicabo commodi quia culpa ab! Expedita aliquid minima fugit.</p>
    </div>
  </div>
  <div class=" py-3 col-md-5">
    <img src="images/Imagen1.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
  </div>
</div>
</div>


<div class=" text-white" style="background-color: #004aad;">
<div class="container py-5" ;>
  <h1 class="text-center p-3">Fondos y proyectos</h1>
    
  <!--body cartas -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="Images/PunoColecta2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Puno Colecta</h5>
            <p class="card-text">Dona todo lo que etengas xd</p>
            <p class="card-text">Donativo: 30 </p>

            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar" style="width: 25%">25%</div>
            </div>
            <div class="btn button-center py-2">
              <form action="{{route('paypal')}}" method="POST" >
                <input name="hidden" name="precio" value="30" />
              <button type="submit" class="btn btn-primary">Donar</button>
            </form>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col" >
        <div class="card h-100">
          <img src="Images/FondoAntonia.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a short card.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="Images/CFTP.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
    </div>
    </div>

        <!-- imagen desprp-->

    
    <!-- FOOTER -->
  
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
      </symbol>
      <symbol id="facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
      </symbol>
      <symbol id="instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
      </symbol>
      <symbol id="twitter" viewBox="0 0 16 16">
        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
      </symbol>
        <symbol id="linkedin" viewBox="0 0 24 24">
          <path d="M19 0H5C2.24 0 0 2.24 0 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5V5c0-2.76-2.24-5-5-5zM8 19H5V8h3v11zM6.5 6.71C5.12 6.71 4 5.59 4 4.21s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5zM20 19h-3v-5.59c0-1.42-.03-3.25-2-3.25s-2.31 1.54-2.31 3.16V19h-3V8h3v1h-.03c1-.61 1.67-1.95 3-1.95s3 .91 3 3v8z"/>
       </symbol>
    </svg>


  <!-- Footer -->
  <footer class=" py-4 md-0 text-white" style="background-color: #142f43;" >
    <div class="container p-4">
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <img src="images/LogoComunitarios.png" alt="logo" width="230" height="50">
          <h5> comunitarios.ft@gmail.com</h5>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <div class="row justify-content-center align-items-center">       
           <h5 class="text-uppercase">Contactanos en redes</h5>
          <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#linkedin"/></svg></a></li>
        </ul>
        </div> 
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <form>
              <p>Suscríbete a nuestra comunidad y recibe noticias</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-primary" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>
    </div>
  </footer>
  </main>

 
      <!---End of footer--->
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


    </body>
</html>
