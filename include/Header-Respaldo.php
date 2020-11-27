<header class="navbar navbar-light" style="background-color: #333333;">
    <div class="row">
      <div class="col-3">Logotipo</div>
      <div class="col-7">
        <input type="text" class="nav-barra" >
      </div>
    </div>
    <div class="col-2"> 

      <div class="dropdown">
        <img src="https://cdn.iconscout.com/icon/free/png-512/account-profile-avatar-man-circle-round-user-30452.png" heigth="60" width="60"
        class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
  </header>