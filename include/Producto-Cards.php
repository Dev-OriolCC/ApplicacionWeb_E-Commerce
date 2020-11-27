<?php include_once "productoDB.php"; ?>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/producto.css">

    <div id="Cuadro">

        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>   
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                          <?php // Ciclo para imprimir 5 Tarjetas de Productos con sus datos
                            for ($i=0; $i <=5 ; $i++) {        
                          ?>
                          <a href="./Producto.php?id=<?php echo $dataProducto[$i]["Prod_ID"]; ?>">
                            <div class="col-sm-2">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="<?php echo $dataProducto[$i]["Prod_Imagenes"]; ?>" class="img-responsive" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4><?php echo $dataProducto[$i]["Prod_Nombre"]; ?></h4>
                                        <p class="item-price"></span><strike>$<?php echo $dataProducto[$i]['Prod_Precio'] ?>.00</strike><br><span>$<?php echo $dataProducto[$i]["Prod_PrecioOferta"]; ?>.00</p>
                                        <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                                    </div>						
                                </div>
                            </div>
                            </a>
                            <?php  } ?>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <?php // Ciclo para imprimir 5 Tarjetas de Productos con sus datos
                                for ($k=6; $k <= 11 ; $k++) { 
                            ?>
                            <a href="./Producto.php?id=<?php echo $dataProducto[$k]["Prod_ID"]; ?>">
                            <div class="col-sm-2">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="<?php echo $dataProducto[$k]["Prod_Imagenes"]; ?>" class="img-responsive" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4><?php echo $dataProducto[$k]["Prod_Nombre"]; ?></h4>
                                        <p class="item-price"></span><strike>$<?php echo $dataProducto[$k]['Prod_Precio'] ?>.00</strike><br><span>$<?php echo $dataProducto[$k]["Prod_PrecioOferta"]; ?>.00</p>
                                        <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                                    </div>						
                                </div>
                            </div>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control left bg-danger" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control right bg-danger" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
            </div>
        </div>
    </div>
