<?php
    session_start();
    session_destroy();
    header("Location: index.php");
    // Cerrrar Sesion y direcionar al Home(index)
?>