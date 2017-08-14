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
  <meta name="theme-color" content="#04e4a0">
  <meta name="keywords" content="pendiente">
  <title>Esencia Teotihuacan</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/main.css" >
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
              <div class="avatar center-block" style="background-image: url(assets/img/circulo/uno.jpg)"></div>
            </div>
            <div class="col-lg-4">
              <div class="avatar center-block" style="background-image: url(assets/img/circulo/dos.jpg)"></div>
            </div>
            <div class="col-lg-4">
              <div class="avatar center-block" style="background-image: url(assets/img/circulo/tres.jpg)"></div>
            </div>
          </div>
          <div class="col-lg-12 visible-xs">
            s
          </div>
        </div>
      </div>
    </section>
    <section id="nosotros" class="seccion nosotros pad-top-50">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </section>
    <section id="que-hacemos" class="seccion servicios pad-top-50">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </section>
    <section id="sitios-web" class="seccion sitios fondo-azul texto-blanco">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </section>
    <section id="diseño" class="seccion publicidad fondo-azul texto-blanco">
      <div class="container">
        <div class="row">

        </div>
      </div>
    </section>
    <section id="publicidad" class="seccion publicidad fondo-azul texto-blanco">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </section>
    <section id="contacto" class="seccion fondo-gris texto-blanco">
    <h3 class="texto-centro">Déjanos un mensaje</h3>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 texto-izquierda">
            <div class="col-lg-5 col-md-8 col-sm-8">
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
            <div class="col-lg-6">
              Otra sección
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="f2">
        <div class="col-lg-12 texto-centro">
          <p>Esencia Teotihuacan 2017</p>
        </div>
      </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>
  </body>
  </html>