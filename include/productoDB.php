<?php
  // @Acceso a la DB
  require_once("conexion.php");
  // Cogemos todos los productos desde la BD :D
  $sqlProd = "SELECT Prod_ID, Prod_Nombre, Prod_Categoria, Prod_Precio, Prod_Color, Prod_Imagenes, Prod_PrecioOferta FROM producto WHERE Prod_ID <= 12";
  $resultProd = mysqli_query($conexion, $sqlProd);
  $dataProducto = array();
  // Aqui viene lo bueno chavales
  if (mysqli_num_rows($resultProd) > 0) {
    while ($row = mysqli_fetch_assoc($resultProd)) {
      $dataProducto [] = $row;
    }
  }
  // Print_r para imprimir el Arrat de Producto
  //print_r($dataProducto);

?>