<?php

include_once('../config/config.php');

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
  <?php include_once('../linkcss.php'); ?>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="preloader"><img src="../assets/img/loading.gif"/><span class="sr-only">Loading...</span></div>
    <?php include_once('../menu.php'); ?>
    <section id="intro" class="intro-mediano">
      <div class="header-content">
      </div>
    </section>
    <section class="seccion">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pad-bot-10">
          <h2><a href="../index.php">INICIO</a> > PRÓXIMOS EVENTOS</h2>
            <hr class="concolor">
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 fondo-gris">
            <div class="col-lg-6 col-md-6 col-sm-6 pad-evento">
              <img class="img-responsive center-block imagen-evento" src="../assets/img/eventos/IMG-20170823-WA0003.jpg">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 texto-blanco">
              <h3>1ER TORNEO DE TAEKWONDO TEOTIHUACAN "EL CAMINO DEL GUERRERO"</h3>
              <h4>Sábado 23 de Septiembre 2017</h4>
              <p>Moo Duk Kwan Costa Rica con el apoyo del Municipio de Teotihuacan, Esencia de Teotihuacan y el aval de la Federación Mexicana de Taekwondo A. C y de la Asociación de Taekwondo del Estado de México invitan al 1er Torneo de Taekwondo Teotihuacan “El Camino del Guerrero” el sábado, 23 de septiembre del 2017, en el Deportivo Filiberto Cedillo, Teotihuacan, Estado de México.</p>
              <a href="2017-09-23-torneo-taekwondo" class="btn btn-primary">Ver más</a>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 fondo-gris">
            <div class="col-lg-6 col-md-6 col-sm-6 pad-evento">
              <img class="img-responsive center-block imagen-evento" src="../assets/img/eventos/LONA 2x2 JIRAFA.jpg">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 pad-evento texto-blanco">
              <h3>1ER CARRERA CAMINATA REINO ANIMAL RUN “AL RESCATE DE LA BIODIVERSIDAD”</h3>
              <h4>Domingo 08 de Octubre 2017</h4>
              <p>Es una carrera que comprende una ruta de 7 km y una caminata familiar de 3k diseñada para vivir una experiencia extrema junto a más de 1,400 animales en semi-libertad dentro de un ambiente natural. Al rescate de nuestra Biodiversidad.</p>
              <a href="2017-10-08-carrera-reino-animal" class="btn btn-primary">Ver más</a>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 fondo-gris">
            <div class="col-lg-6 col-md-6 col-sm-6 pad-evento">
              <img class="img-responsive center-block imagen-evento" src="../assets/img/eventos/volante FTE@2x.png">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 pad-evento texto-blanco">
              <h3>4TA CARRERA DEL PULQUE 2017 EDOMEX</h3>
              <h4>Domingo 29 de Octubre 2017</h4>
              <p>4ta Feria y Carrera del Pulque ”Una Carrera con Tradición”, promoviendo el rescate de las tradiciones del cultivo del maguey, la producción del pulque y la conservación del Acueducto del Padre Tembleque que es Patrimonio Cultural de la Humanidad, en el Municipio de Nopaltepec.</p>
              <a href="2017-10-29-4ta-carrera-pulque" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include_once('../footer.php'); ?>
    <?php include_once('../scripts.php'); ?>
  </body>
  </html>