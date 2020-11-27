<?php
  // @Acceso a la DB
  require_once("include/conexion.php");  
  // Iniciar Session
  session_start();
  // Checar si esta loggeado
  include_once "SesionUsuario.php";
  // @Acceso a estilos
  include_once "include/LinkBS.php"; 
  // Cogemos el ID
  $SearchQuerry = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos_home2.css">
    <link rel="stylesheet" href="css/estilos_producto.css">
</head>
<body>
<?php include_once "include/Header_Home.php"; 
?>
<?php
    $P_ID = $SearchQuerry;//$_POST['ID']; // Recuperamos la clave
    $querry = "SELECT Prod_ID, Prod_Nombre, Prod_Categoria, Prod_PrecioOferta, Prod_Imagenes, Prod_Color, Prod_Disponible, Prod_Marca, 
    Prod_Condicion, Prod_PesoKG, Prod_Material, Prod_Codigo, Prod_Desc FROM producto WHERE Prod_ID = $P_ID";
    $resultado = mysqli_query($conexion, $querry) or die(mysqli_error());
    $numeroProducto = mysqli_num_rows($resultado);
    if($numeroProducto != 0){
      $dato = mysqli_fetch_row($resultado);
       // $dato[0]; ID Producto `       AQUI UNA GUIA O DICCIONARIO DE COMO ESTAN LOS CAMPOS
       // $dato[1];  Nombre
       // $dato[2];  Categoria Numero
       // $dato[3];  Precio
       // $dato[4]; = Imagen
       // $dato[5]; = Color
       // $dato[6]; = Disponible
       // $dato[7]; = Marca
       // $dato[8] = Condicion
       // $dato[9] = Peso
       // $dato[10] Material
       // $dato[11] Codigo Producto
       // $dato[12] Descripcion

    }
?>
<div class="containter">
    <div class="row">
        <div class="col-11 mx-auto">
            <div class="row">
                <div class="col-4">
                    <img src="<?php echo $dato[4] ?>" alt="" class="Prod-Imagen" width="355" heigth="385">
                </div>
                <div class="col-7">
                    <div class="col-12"><p class="nombre-prod"><b><?php echo $dato[1]; ?></b></p></div>
                    <div class="col-12"><p class="subtitulo-prod"><b>Categoria:</b> <?php switch ($dato[2]) {
                        case '1':
                                $Producto_Cat = "Computacion";
                                echo "Computacion";
                            break;
                        case '2':
                                $Producto_Cat = "Gadgets";
                                echo "Gadgets";
                            break;
                        case '3':
                                $Producto_Cat = "Consolas";
                                echo "Consolas";
                            break;
                        default:
                                $Producto_Cat = "Ropa";
                                echo "Ropa";
                            break;
                    }?></p></div>
                    <div class="col-12"><p class="subtitulo-prod"><b>Precio:</b> $<?php echo $dato[3]; ?>.00</p></div>
                    <div class="col-12"><button class="btn-prod">Favorito</button></div><br>
                    <div class="col-12"><button class="btn-prod">Agregar Carrito</button></div><br>
                    <div class="col-12"><button class="btn-prod">Comprar</button></div><br>
                </div>
            </div><!-- Termina el segundo Row --> <br>
            <div class="row">
                <div class="col-11 mx-auto" style="background-color: #A61723;">
                    <p class="titulo-info"><b>Informacion del producto:</b> <?php echo $dato[1]; ?>. </p>
                </div> <!-- Barra Roja con Menu -->
                <div class="col-11 mx-auto" style="background-color: #333333;">
                    <div class="row">
                        <div class="col-6"> <!-- AQUI RELLENAMOS LOS CAMPOS -->
                            <p class="sub-blanco prod_parrafo mt-1"><?php echo $dato[12]; ?></p>
                            <p class="sub-rojo mt-1"><b class="sub-blanco">Precio: </b> $<?php echo $dato[3]; ?>.00</p>
                            <p class="sub-rojo mt-1"><b class="sub-blanco">Color: </b><?php echo $dato[5]; ?> </p>
                            <p class="sub-rojo mt-1"><b class="sub-blanco">Disponibilidad: </b><?php echo $dato[6]; ?> </p>
                        </div>
                        <div class="col-5 mx-auto">
                            <p class="sub-rojo mt-1"><b class="sub-blanco">Marca: </b><?php echo $dato[7]; ?> </p>
                            <p class="sub-rojo mt-1"><b class="sub-blanco">Condicion: </b><?php echo $dato[8]; ?> </p>
                            <p class="sub-rojo mt-1"><b class="sub-blanco">Codigo: </b><?php echo $dato[11]; ?> </p>
                            <p class="sub-rojo mt-1"><b class="sub-blanco">Categoria: <?php echo $Producto_Cat ?></b></p>
                            <p class="sub-rojo mt-1"><b class="sub-blanco">Peso: </b><?php echo $dato[9]; ?> </p>
                        </div>
                    </div>
                </div>
                
            </div> <br>
                <p class="barra-texto "><b>Productos Similares</b></p>
                <div class="cuadro-slider mx-auto" style="background-color: #333333;">
                    <?php include_once "include/Producto-Cards.php"; ?>
                </div>
                <br>
                <br>
                <p class="barra-texto "><b>Descuentos Semanal</b></p>
                <div class="cuadro-slider mx-auto" style="background-color: #333333;">
                    <?php include_once "include/Producto-Slider_1.php"; ?>
                </div>
                <br>
        </div>
        
    </div>
</div>
<!-- FOOTER DE LA WEB PAGE -->
<?php  include_once "include/Footer.php"; 
?>
</body>
</html>