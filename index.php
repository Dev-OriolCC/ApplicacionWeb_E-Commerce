<?php
  // @Acceso a la DB
  require_once("include/conexion.php");
  // Coger categorias de la db
  include_once "include/categoria.php";
  
  // Iniciar Session
  session_start();
  // Checar si esta loggeado
  include_once "SesionUsuario.php";
  // @Acceso a estilos
  include_once "include/LinkBS.php"; 
  ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Fuentes de Ortiz -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos_home2.css">
</head>
<body>
  <?php include_once "include/Header_Home.php"; ?>
  <!-- SLIDER -->
    <?php include_once "include/Slider.php"; ?>
  <!-- Termina el Slider -->
  <br> <!-- Cuadro de texto -->
  <div class="col-2">
      <h3 class="cuadroTexto"><b>Categorias</b></h3>
  </div>
  <!-- Cuadro de categorias -->
  <div class="cuadro-cat ml-3 mr-3">
    <div class="row">
      <div class="col-8 bg-white mt-3 ml-4 barra-blanca">
        <p class="text-center encabezado">Descubre nuestras categorias de productos gamer.</p>
        <!-- AQUI VAN LAS CATEGORIAS COMO TAL -->
        <div class="row">
        <!-- CREAR LAS CATEGORIAS CON CICLO FOR-->
        <?php 
          for ($i=0; $i <=3 ; $i++) {   
        ?>
          <div class="col-3">
            <img src="<?php echo $dataCategory[$i]["Cat_Imagenes"]; ?>" class="mt-3 img-sub-cat mx-auto">
            <p class="text-white mt-3 text-cat"><?php echo $dataCategory[$i]["Cat_Nombre"]; ?></p>
          </div>
        <?php } ?>

        </div><!-- NUEVO ROW-->
      </div> <!-- FINAL DE CATEGORIAS -->
      <!-- PEWDIEPIE -->
      <img class=" mt-3 mb-3 mx-auto img-cat" src="https://as.com/meristation/imagenes/2019/08/09/noticias/1565327197_259166_1565327391_noticia_normal.jpg">
    </div> <!-- Termina el Row de las categorias-->
  </div>
  <!-- Descuentos Semanales -->
  <br>
  <div class="col-4">
      <h3 class="cuadroTexto"><b>Descuentos Semanal</b></h3>
  </div>
  <!-- ESTE ES EL BUENO QUE ES DINAMICO -->
  <div class="cuadro-cat ml-3 mr-3">
      <?php include_once "include/Producto-Cards.php"; ?>
  </div>
  <!-- ******************************** -->
  <!-- Productos -->
  <br>
  <div class="col-4">
    <h3 class="cuadroTexto"><b>Productos</b></h3>
  </div>
  <div class="cuadro-cat ml-3 mr-3">
      <!-- Aqui esta el Slider 1 y 2 que no son dinamicos-->
      <?php include_once "include/Producto-Slider_1.php";
      ?>

      <?php include_once "include/Producto-Slider_2.php";
      ?>
  </div>
          <!-- Nuestras marcas -->
  <div class="col-4">
      <h3 class="cuadroTexto"><b>Nuestras marcas</b></h3>
  </div>
   <!-- ESTO NO ES DINAMICO -->
  <div class="cuadro-cat ml-3 mr-3">
    <div class="row">
      <div class="col-8 bg-white mt-3 ml-4 barra-blanca">
        <p class="text-center encabezado">Contamos con las mejores marcas gamer del mundo.</p>
        <!-- AQUI VAN LAS MARCAS COMO TAL -->
        <div class="row">
          <div class="col-3">
            <img src="https://i1.wp.com/www.gerryanderson.co.uk/wp-content/uploads/2019/02/pop1-4-750x400.jpg?fit=750%2C400&ssl=1" class="mt-3 mx-auto marcas">
          </div>
          <!-- DOS -->
          <div class="col-3">
            <img src="https://www.corsair.com/corsairmedia/sys_master/productcontent/blog_Introducing-The-New-Sails-Logo-Content-1.png" class="mt-3 mx-auto marcas">
          </div>
          <!-- TRES -->
          <div class="col-3">
            <img src="https://hardwareviews.com/wp-content/uploads/2019/06/xbox-logo-100571878-large.jpg"
              class="mt-3 mx-auto marcas">
          </div>
          <!-- TRES -->
          <div class="col-3">
            <img src="https://1000marcas.net/wp-content/uploads/2020/02/Logitech-logotipo.jpg"
              class="mt-3 mx-auto marcas">
          </div>
        </div><!-- NUEVO ROW-->
        <div class="row">
          <div class="col-3">
            <img src="https://thegroyne.com/wp-content/uploads/2015/03/Playstation-4-PS4-Logo.png" class="mt-3 mx-auto marcas">
          </div>
          <!-- DOS -->
          <div class="col-3">
            <img src="https://1000marcas.net/wp-content/uploads/2020/03/Razer-logo.png" class="mt-3 mx-auto marcas">
          </div>
          <!-- TRES -->
          <div class="col-3">
            <img src="https://i.ytimg.com/vi/Qt0GFuslOjk/maxresdefault.jpg"
              class="mt-3 mx-auto marcas">
          </div>
          <!-- TRES -->
          <div class="col-3">
            <img src="https://fanaticosdelhardware.com/wp-content/uploads/2018/08/nvidia-logo.jpg"
              class="mt-3 mx-auto marcas">
          </div>
        </div><!-- NUEVO ROW-->
      </div> <!-- FINAL DE CATEGORIAS -->
      <!-- PEWDIEPIE -->
      <img class=" mt-3 mb-3 mx-auto img-cat-2" src="https://sm.ign.com/ign_latam/screenshot/default/gamer-11_q25r.jpg">
    </div> <!-- Termina el Row de las categorias-->
  </div><br><br>
    <!-- FOOTER DE LA WEB PAGE -->
    <?php  include_once "include/Footer.php"; 
    ?>
</body>
</html>
