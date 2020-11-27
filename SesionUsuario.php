<?php    
    if (isset($_SESSION['id'])) {
        // Recuperar las variables de sesion del usuario loggeado
        $idUsuario = $_SESSION['id'];
        $correoUsuario = $_SESSION['correo'];
    }else{
        // En caso de no solo declarar la variable
        $idUsuario = '';
    }
?>