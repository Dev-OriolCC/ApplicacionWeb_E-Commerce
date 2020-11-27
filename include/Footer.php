<?php
// Llamamos los Links de Bootstrap 
include_once('LinkBS.php');
?>
    <style>
    .imagen{
    width: 30px;
}
    .header{
        background-color: #333333;
        height: 9%;
    }
    .logo{
        align-items: center;
        background-color: white;
        width: 20%;
        height: 100%;
    }
    .imagenhe{
        width: 300px;
        height: 100%;
    }
    </style>
    <!-- FOOTER DE LA WEB PAGE -->
    <footer style="background-color: 333333;">
      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left">
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3">
            <h5 class="text-uppercase text-white">Informacion de la compañia</h5>
            <p style="color: #999999;"> Sobre nosotros<br> <br>
            Politica y privacidad <br> <br>
            Terminos y condiciones <br> <br>
            Ayuda</p>
          </div>
            <hr class="clearfix w-100 d-md-none pb-3">
          <div class="col-md-3 mb-md-0 mb-3"></div>
          <div class="col-md-3 mb-md-0 mb-3 ba">
            <h5 class="text-uppercase text-white">Metodos de pago</h5>
            <ul class="list-unstyled" style="color: #999999;">
              <p>Paypal</p>
              <p>Mercado Pago</p>
              <p>Mastercad</p>
              <p>Visa</p>
              <a href="#!"></a>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
          <div class="row">
            <div class="col-2"> <img class = "imagen" src="img/TW.png"></div>
            <div class="col-2"><img class = "imagen" src="img/TG.png"></div>
            <div class="col-2"><img class = "imagen" src="img/WA.png"></div>
            <div class="col-2"> <img class = "imagen" src="img/FB.png"></div>
            <div class="col-2"><img class = "imagen" src="img/instangram.png"></div>
            <div class="col-2"><img class = "imagen" src="img/tiktok.png"></div>
          </div>
          <div class="col-4"></div>
        </div>
      </div>
      <div class="footer-copyright mx-auto text-center py-3 text-white">Copyright © 2020 Todos los derechos reservadas.
        <a style="color: red;" href="index.php"> PLAY ZONE</a>
      </div>
    </footer>