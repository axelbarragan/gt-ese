<?php

include_once('../../config/config.php');

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
  <title>Próximos eventos | Esencia Teotihuacan</title>
  <?php include_once('../../linkcss.php'); ?>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="preloader"><img src="../../assets/img/loading.gif"/><span class="sr-only">Loading...</span></div>
    <?php include_once('../../menu.php'); ?>
    <section id="intro" class="intro">
      <div class="header-content">
      </div>
    </section>
    <section class="seccion">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 pad-bot-10">
          <h2><a href="<?php echo LINK; ?>">INICIO</a> > <a href="<?php echo LINK; ?>eventos">PRÓXIMOS EVENTOS</a> > </h2>
            <hr class="concolor">
          </div>
          <div class="col-lg-12 fondo-gris">
            <div class="col-lg-6 pad-evento">
              <img class="img-responsive center-block imagen-evento" src="<?php echo LINK; ?>assets/img/eventos/IMG-20170823-WA0003.jpg">
            </div>
            <div class="col-lg-6 texto-blanco">
              <h3>1ER TORNEO DE TAEKWONDO TEOTIHUACAN "EL CAMINO DEL GUERRERO"</h3>
              <h4>Sábado 23 de Septiembre 2017</h4>
              <p>Moo Duk Kwan Costa Rica con el apoyo del Municipio de Teotihuacan, Esencia de Teotihuacan y el aval de la Federación Mexicana de Taekwondo A. C y de la Asociación de Taekwondo del Estado de México invitan al 1er Torneo de Taekwondo Teotihuacan “El Camino del Guerrero” el sábado, 23 de septiembre del 2017, en el Deportivo Filiberto Cedillo, Teotihuacan, Estado de México.</p>
              <a href="2017-09-23-torneo-taekwondo" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include_once('../../footer.php'); ?>
    <?php include_once('../../scripts.php'); ?>
  </body>
  </html>