<?php
    // Conectar
    $conexion = new mysqli("localhost","root","","based_playzone");
    mysqli_set_charset($conexion,"utf8");

    if(mysqli_connect_errno()) {
        echo "ERROR DE CONEXION : ".mysqli_connect_error();
    }
?>