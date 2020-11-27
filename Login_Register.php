<?php
  session_start();
  require_once("include/conexion.php");
  // INCLUDE ONCE
  include_once "include/LinkBS.php";
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CRUD">
    <meta name="author" content="UPB">
    <title>Prueba de Login</title>
    <!-- Fuente de Ortiz -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
  </head>

  <body style="background: black;">
    <div class="header">
      <div class="cuadro-logo bg-danger imagenhe">
        <h2 class="fuente-logo">PLAYZONE</h2>
      </div> 
    </div>
  <!--  menu de navegación -->
  <main role="main" class="">
    <!-- Cuadro del Formulario LOGIN -->
    <div class="" id="ingreso" style="display: block;">
      <div class="row">
        <form method="POST" class="mx-auto cuadro-form" action="<?php $_SERVER['PHP_SELF']?>">
        <!-- BOTONES DE SUPERIORES-->
          <div class="row">
            <div class="col-9 ml-4">
              <a href="" class="p-activo">Iniciar Sesion</a>
            </div>
            <div class=""> 
              <p class="p-desactivo" id="registrarUsuario">&nbsp;Registrar</p>
            </div>
          </div> <!-- ASI CREO QUE QUEDA BIEN-->
          <!-- Aqui empieza el formulario como tal.. -->
          <div class="form-group">
            <p class="texto-form" style="color: #FFFFFF;">Correo Electronico</p>
            <input type="email" name="correo" class="form-control col-10 mx-auto" placeholder="Correo Electrónico" required>
          </div>
          <div class="form-group">
            <p class="texto-form" style="color: #FFFFFF;">Contraseña</p>
            <input type="password" name="password" class="form-control col-10 mx-auto" placeholder="Contraseña" required="required">
          </div>
          <!-- BOTONES DEL FORM PARA HACER SUBMIT O OMITIR :D -->
          <div class="row btns">
            <a href="index.php" style="background-color: black; color: white; padding: 6px;" class="col-3 btn-1 mx-auto mt-1">Omitir</a>
            <button type="submit" name="entrar" style="padding: 6px; background-color: red; color: white;" class="col-3 btn-1 mx-auto mt-1">Iniciar</button>
          </div>
        </form>
      </div>
    </div>
      <?php
      // verificar si el usuario dio clic en boton entrar
      if(isset($_POST['entrar'])){
        $email = mysqli_real_escape_string($conexion, $_POST['correo']);
        $pwd = mysqli_real_escape_string($conexion, $_POST['password']);
        $password = MD5($pwd);
        // Buscar el usuario en la base de datos
        $SQL_Usuario = "SELECT C_ID, C_CorreoE FROM cliente WHERE C_CorreoE='$email' AND C_Password='$password'";
        $resultadoUsuario = mysqli_query($conexion, $SQL_Usuario);
        $encontrado = mysqli_num_rows($resultadoUsuario);  // checar si fue encontrado
        if ( $encontrado > 0) {
          $usuario = mysqli_fetch_assoc($resultadoUsuario);
          // Crear las variables de sesión para el usuario loggeado
          $_SESSION['id'] = $usuario['C_ID'];
          $_SESSION['correo'] = $usuario['C_CorreoE'];
          header("Location: index.php"); // Direccionar al Index
        } else {
          echo "Error";
        }
      }
      // TERMINA EL FORMULARIO DE LOGIN
      ?>
      <script> // Damas y caballeros aqui un poco de Javascript
      document.getElementById("registrarUsuario").onclick = function() {registrar()};
      function registrar() {
        document.getElementById("registrarUsuario").style.display = "none";
        // Prueba con mis botones
        document.getElementById("ingreso").style.display = "none";
        document.getElementById("registroUsuario").style.display = "block"; 
      }
      </script>
    <div class="login-form" id="registroUsuario" style="display: none;">
        <!-- FORMULARIO DE REGISTRO -->
      <div class="row">
          <form method="POST" class="mx-auto cuadro-form2" action="<?php $_SERVER['PHP_SELF']?>">
            <div class="row">
              <div class="col-9 ml-4">
                <a href="" class="p-desactivo" id="Login">Iniciar Sesion</a>
              </div>
              <div class=""> 
                <p class="p-activo">&nbsp;Registrar</p>
              </div>
            </div>
            <div class="form-group">
              <p class="texto-form" style="color: #FFFFFF;">Correo Electronico</p> 
              <input type="text" id="Correo" class="form-control col-10 mx-auto" name="Correo" placeholder="Correo" required>
            </div> 
            <div class="form-group">
              <p class="texto-form" style="color: #FFFFFF;">Contraseña</p>
              <input type="password" id="Password" class="form-control col-10 mx-auto" name="Password" placeholder="Contraseña" required>
            </div>
            <div class="form-group">
              <p class="texto-form" style="color: #FFFFFF;">Confirmar Contraseña</p>
              <input type="password" name="password_Dos" id="Password_Dos" class="form-control col-10 mx-auto" placeholder="Confirmar Contraseña" required="required">
            </div><!-- Cuadrito de aceptar termino y condiciones -->
            <input type="checkbox" class="texto-form" id="term" name="term" required>
            <label for="term" class="texto-form"><a href="#">Aceptar Terminos y Condciones</a></label><br>
            <!-- Botones de Omitir o Crear cuenta. -->
            <div class="row btns">
              <a href="index.php" style="background-color: black; color: white; padding: 6px;" class="col-3 btn-1 mx-auto mt-1">Omitir</a>
              <button type="submit" name="crear" class="col-3 btn-1 mx-auto mt-1" style="padding: 6px; background-color: red; color: white;">Registrar</button>  
            </div>
          </form>
        </div><!-- TERMINA EL ROW--> 

          <!-- CONFIRMAR CONTRAS -->
          <script> 
          // Damas y caballeros aqui un poquito de Javascript 
            var password = document.getElementById("Password"), confirm_password = document.getElementById("Password_Dos");
            function validatePassword(){
            if(password.value != confirm_password.value) {
              confirm_password.setCustomValidity("Las contraseñas no coinciden 😓...");
            } else {
              confirm_password.setCustomValidity('');
            }
          }
          password.onchange = validatePassword;
          confirm_password.onkeyup = validatePassword;

          document.getElementById("Login").onclick = function() {Login2()};
          function Login2() {
            document.getElementById("registrarUsuario").style.display = "block";
            // TEST ABOVE
            document.getElementById("registroUsuario").style.display = "none";
            document.getElementById("ingreso").style.display = "block";            
          }
          </script>
          <!--crear nuevo usuario-->
        <?php 
          // Verificar si se hizo click en crear
          if(isset($_POST['crear'])) {
            $Correo = mysqli_real_escape_string($conexion, $_POST['Correo']);
            $pwd = mysqli_real_escape_string($conexion, $_POST['Password']);
            $password = MD5($pwd); // MD5 un metodo de encriptacion para seguridad :)
            // Confirmar que no hay un Correo Duplicado... :D
            $queryCorreo = "SELECT C_CorreoE FROM cliente WHERE C_CorreoE = '$Correo'";
            $resultadoCorreo = mysqli_query($conexion, $queryCorreo) or die(mysqli_error($conexion));
            $correosRegistrados = mysqli_num_rows($resultadoCorreo);
            if($correosRegistrados > 0) {
              echo "<div class='alert alert-danger' role='alert'>
                ERROR El correo electrónico ya se se encuentra registrado!
                </div>";
            } else {
              // Alta del registro del usuario
              $SQL_Registrar = "INSERT INTO cliente (C_ID, C_CorreoE, C_Password) VALUES ('', '$Correo', '$password')";
              if(mysqli_query($conexion, $SQL_Registrar)) {
                echo "<div class='alert alert-success' role='alert'>
                El usuario ha sido registrado<br> Ya puede ingresar! </div>";
              } else {
                echo "<div class='alert alert-danger' role='alert'>
                ERROR No se pudo crear el usuario: ".mysqli_error($conexion)."
                </div>";
              } 
            } 
          } 
        ?>
      </div>
    </main>
    <!-- FOOTER DE LA WEB PAGE -->
    <?php include_once "include/Footer.php"; ?>
  </body>
</html>