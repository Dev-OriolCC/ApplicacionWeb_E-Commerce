<?php
  // @Acceso a la DB
  require_once("conexion.php");
  // Cogemos todas las categorias desde la DB :D
  $sqlCat = "SELECT Cat_ID, Cat_Nombre, Cat_Imagenes FROM categoria WHERE Cat_ID <= 4";
  $resultCat = mysqli_query($conexion, $sqlCat);
  $dataCategory = array();
  // Aqui viene lo bueno chavales
  if (mysqli_num_rows($resultCat) > 0) {
    while ($row = mysqli_fetch_assoc($resultCat)) {
      $dataCategory [] = $row;
    }
  }

  // echo $dataCategory[1]["Cat_Nombre"];


?>