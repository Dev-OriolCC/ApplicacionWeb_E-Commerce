
<!-- Header del Home -->
<header class="navbar navbar-light" style= "background-color: #333333; height: 70px;">
    <div class="row cuadro-buscador">
      <div class="col-2 bg-danger cuadro-logo-2">
        <a class="fuente-logo-2 mt-3" href="index.php">PLAYZONE</a>
      </div>
      <div class="col-10 cuadro-buscador">
        <!-- Pruebas -->
          <input type="text" class="nav-barra col-12 buscador" >
      </div>
    </div>
    <div class="col-3">
      <div class="dropdown"> <!-- Bandera de mexico legado de nuestros hereos-->
      <img src="https://images.emojiterra.com/openmoji/v12.2/512px/1f1f2-1f1fd.png" class="col-3" heigth="100" width="100">
        <!-- Icono de perfil-->
        <img src="./img/Profile.png" heigth="54" width="54"
        class="dropdown-toggle col-3" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <!-- Carrito -->
        <img class="col-3" src="./img/Cart2.png" heigth="54" width="54">
        <!-- Corazon de Favorito -->
        <img src="./img/Heart.png" heigth="54" width="54">
        <?php
        if($idUsuario == !null){
          // Si esta Iniciado mostrar estos datos en el DropDown
          ?>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#" type="submit" name="correo"><?php echo $correoUsuario ?></a>
        <a class="dropdown-item" href="NoDisponible.php" type="submit" name="profile">Ver Perfil</a>
        <a class="dropdown-item" href="CerrarSesion.php">Cerrar Sesion</a>
      </div>
      <?php } else{  ?>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="Login_Register.php" type="submit" name="profile">Iniciar Sesion / Registrar</a>
        </div>
        <?php
        } ?>
    </div> <!-- Cierre del dropdown -->
    </div>
  </div>
</header>

