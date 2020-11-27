<?php
// Llamamos los Links de Bootstrap 
include_once('LinkBS.php');
?>
    <link rel="stylesheet" href="css/estilos_home.css">
    <div id="carouselExampleIndicators" class="carousel slide col-12 mx-auto" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.mesajilhnos.com/cdn/files/2020/01/06/17740-17740-019480.jpg" class="d-block w-100 h-50" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://imgur.com/ZqSFEXN.png" class="d-block w-100 h-50" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://www.vippng.com/png/full/377-3777881_amd-vega-pc-amd-vega-banner.png" class="d-block w-100 h-50" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>