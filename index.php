<?php

include_once('config/config.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Esencia Teotihuacan. Cultura, Aventura y Deporte.">
  <meta name="author" content="esenciateotihuacan.com">
  <meta name="theme-color" content="#333333">
  <meta name="keywords" content="pendiente">
  <?php include_once('favicon.php'); ?>
  <title>Esencia Teotihuacan</title>
  <?php include_once('linkcss.php'); ?>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="preloader"><img src="assets/img/loading.gif"/><span class="sr-only">Loading...</span></div>
    <?php include_once('menu.php'); ?>
    <section id="intro" class="intro">
      <div class="header-content">
        <div class="header-content-inner">
          <div class="col-lg-12 hidden-xs">
            <div class="col-lg-4">
              <a href="cultura/"><div class="avatar center-block" style="background-image: url(assets/img/circulo/cultura.png)"></div></a>
            </div>
            <div class="col-lg-4">
              <a href="aventura/"><div class="avatar center-block" style="background-image: url(assets/img/circulo/aventura.png)"></div></a>
            </div>
            <div class="col-lg-4">
              <a href="deporte/"><div class="avatar center-block" style="background-image: url(assets/img/circulo/deporte.png)"></div></a>
            </div>
          </div>
          <div class="col-lg-12 visible-xs">
            s
          </div>
        </div>
      </div>
    </section>
    <section class="seccion fondo-blanco">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="texto-centro barrita texto-quicksand texto-d">¡ESTO ES TEOTIHUACAN!</h1>
            <p class="texto-justificado pad-top-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="seccion">
        <div class="container">
          <h1 class="texto-">Próximos eventos</h1>
          <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="item active">
                <img src="https://www.goapp.mx/quehacer-zona-arqueologica-de-teotihuacan-503" alt="...">
                <div class="carousel-caption">
                  <h2>1ER TORNEO DE TAEKWONDO TEOTIHUACAN "EL CAMINO DEL GUERRERO"</h2>
                </div>
              </div>
              <div class="item">
                <img src="http://www.goapp.mx/quehacer-piramides-de-teotihuacan-632" alt="...">
                <div class="carousel-caption">
                  <h2>1ER CARRERA CAMINATA REINO ANIMAL RUN “AL RESCATE DE LA BIODIVERSIDAD”</h2>
                </div>
              </div>
              <div class="item">
                <img src="http://www.goapp.mx/files/articulos/medium/1431622988-1430801087-IMG_6252.JPG" alt="...">
                <div class="carousel-caption">
                  <h2>4TA CARRERA DEL PULQUE 2017 EDOMEX</h2>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
          <div class="visible-xs">
            <a href="eventos/" class="btn btn-primary">Ver los próximos eventos</a>
          </div>
        </div>
      </section>
      <section class="seccion fondo-blanco">
        <div class="owl-carousel owl-theme">
          <div><img src="assets/img/servicios/hoteles/hot01.png"></div>
          <div><img src="assets/img/servicios/hoteles/hot02.png"></div>
          <div><img src="assets/img/servicios/hoteles/hot03.png"></div>
          <div><img src="assets/img/servicios/hoteles/hot04.png"></div>
          <div><img src="assets/img/servicios/hoteles/hot05.png"></div>
          <div><img src="assets/img/servicios/hoteles/hot06.png"></div>
          <div><img src="assets/img/servicios/hoteles/hot07.png"></div>
          <div><img src="assets/img/servicios/hoteles/hot08.png"></div>
          <div><img src="assets/img/servicios/hoteles/hot09.png"></div>
          <div><img src="assets/img/servicios/hoteles/hot10.png"></div>
          <div><img src="assets/img/servicios/restaurantes/rest01.png"></div>
          <div><img src="assets/img/servicios/restaurantes/rest02.png"></div>
          <div><img src="assets/img/servicios/aventura/aven01.png"></div>
          <div><img src="assets/img/servicios/aventura/aven02.png"></div>
          <div><img src="assets/img/servicios/aventura/aven03.png"></div>
          <div><img src="assets/img/servicios/aventura/aven04.png"></div>
          <div><img src="assets/img/servicios/aventura/aven05.png"></div>
          <div><img src="assets/img/servicios/aventura/aven06.png"></div>
          <div><img src="assets/img/servicios/agencias/age01.png"></div>
          <div><img src="assets/img/servicios/agencias/age02.png"></div>
          <div><img src="assets/img/servicios/agencias/age03.png"></div>
          <div><img src="assets/img/servicios/agencias/age04.png"></div>
          <div><img src="assets/img/servicios/agencias/age05.png"></div>
          <div><img src="assets/img/servicios/agencias/age06.png"></div>
          <div><img src="assets/img/servicios/agencias/age07.png"></div>
          <div><img src="assets/img/servicios/agencias/age08.png"></div>
          <div><img src="assets/img/servicios/artesanias/art01.png"></div>
          <div><img src="assets/img/servicios/artesanias/art02.png"></div>
          <div><img src="assets/img/servicios/artesanias/art03.png"></div>
        </div>
      </section>
      <section id="contacto" class="seccion fondo-gris texto-blanco">
        <h3 class="texto-centro">Déjanos un mensaje</h3>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="col-lg-8 col-lg-offset-2">
                <form id="frmContacto">
                  <div class="form-group">
                    <label for="nombre">Escribe tu nombre</label>
                    <input type="text" class="form-control inpu" name="inNombre" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="correo">Escribe tu correo</label>
                    <input type="text" class="form-control inpu" name="inCorreo" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="telefono">Escribe tu teléfono</label>
                    <input type="text" class="form-control inpu" name="inTelefono" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="mensaje">¿Qué nos quieres decir?</label>
                    <textarea name="inMensaje" class="form-control inpu"></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php include_once('footer.php'); ?>
      <?php include_once('scripts.php'); ?>
    </body>
    </html>