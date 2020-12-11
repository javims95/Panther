<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Panther - Artículos para tu mascota</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

  <style>
    .ribbon-wrapper2 {
      width: 85px;
      height: 88px;
      overflow: hidden;
      position: absolute;
      top: 5px;
      right: 20px;
    }
    .ribbon2 {
  font-size: 12px;
  color: #FFF;
  text-transform: uppercase;
  font-family: 'Montserrat Bold', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  letter-spacing: .05em;
  line-height: 15px;
  text-align: center;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, .4);
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
  position: relative;
  padding: 7px 0;
  right: -11px;
  top: 10px;
  width: 100px;
  height: 28px;
  -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, .3);
  box-shadow: 0 0 3px rgba(0, 0, 0, .3);
  background-color: #dedede;
  background-image: -webkit-linear-gradient(top, #ffffff 45%, #dedede 100%);
  background-image: -o-linear-gradient(top, #ffffff 45%, #dedede 100%);
  background-image: linear-gradient(to bottom, #ff0000 45%, #ea7e7e 100%);
  background-repeat: repeat-x;
  filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffdedede', GradientType=0)
}

.ribbon2:before,
.ribbon2:after {
  content: "";
  border-top: 3px solid #9e9e9e;
  border-left: 3px solid transparent;
  border-right: 3px solid transparent;
  position: absolute;
  bottom: -3px
}

.ribbon2:before {
  left: 0
}

.ribbon2:after {
  right: 0
}
  </style>

</head>

<body>

  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?>

    <!-- Video  -->
    <header class="videoP">
      <div class="overlay"></div>
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="images\Gato.mp4" type="video/mp4">
      </video>
      <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100 text-white">
            <h1 class="display-3">Video Header</h1>
            <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
          </div>
        </div>
      </div>
    </header>

    <!-- Categorías  -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="site-section site-blocks-2">
            <div class="row justify-content-center text-center mb-5">
              <div class="col-md-7 site-section-heading pt-4">
                <h2>Categorías destacadas</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                <a class="block-2-item" href="#">
                  <figure class="image">
                    <img src="images/categorias/snow-bengal.jpg" alt="" class="img-fluid">
                  </figure>
                  <div class="text">
                    <span class="text-uppercase">Comida</span>
                    <h3>Gatos</h3>
                  </div>
                </a>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                <a class="block-2-item" href="#">
                  <figure class="image">
                    <img src="images/categorias/golden-retriever.jpg" alt="" class="img-fluid">
                  </figure>
                  <div class="text">
                    <span class="text-uppercase">Accesorios</span>
                    <h3>Perros</h3>
                  </div>
                </a>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                <a class="block-2-item" href="#">
                  <figure class="image">
                    <img src="images/categorias/roedores.jpg" alt="" class="img-fluid">
                  </figure>
                  <div class="text">
                    <span class="text-uppercase">Comida y Accesorios</span>
                    <h3>Roedores</h3>
                  </div>
                </a>
              </div>
            </div>

          </div>
        </div>


        <!-- Carrousel de productos -->
        <div class="container">
          <div class="row blog">
            <div class="col-md-12">
              <div class="row justify-content-center text-center mb-5">
                <div style="margin-bottom: 1rem;" class="col-md-7 site-section-heading pt-4">
                  <h2>Ofertas</h2>
                </div>
              </div>
              <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#blogCarousel" data-slide-to="1"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">

                      <?php
                      $resultado = $conexion->query("SELECT * FROM productos  WHERE id> 3 LIMIT 4") or die($conexion->error);
                      // En este bucle imprimimos los 3 primeros productos
                      while ($fila = mysqli_fetch_array($resultado)) {
                      ?>
                        <div class="col-md-3">
                          <div class="item-box-blog box_productos">
                            <figure class="block-4-image">
                              <!-- Añadimos un poco de PHP a la URL para que cada producto tenga su página -->
                              <a href="shop-single.php?id=<?php echo $fila['id']; ?>">
                                <img src="images/<?php echo $fila['imagen']; ?>" alt="<?php echo $fila['nombre']; ?>" class="img-fluid"></a>
                              <div class="ribbon-wrapper2">
                                <div class="ribbon2">Oferta</div>
                              </div>
                            </figure>
                            <div class="item-box-blog-body">
                              <!--Heading-->
                              <div class="item-box-blog-heading">
                                <h5><a href="shop-single.php?id=<?php echo $fila['id']; ?>"><?php echo $fila['nombre']; ?></a></h5>
                              </div>
                              <!--Text-->
                              <div class="item-box-blog-text">
                                <p class="descripcionCarrousel"><?php echo $fila['descripcion']; ?></p>
                              </div>
                              <p style="font-size: 20px;" class="text-primary font-weight-bold"><?php echo $fila['precio']; ?> €</p>
                              <p><a href="cart.php?id=<?php echo $fila[0]; ?>" class="buy-now btn btn-sm btn-primary bntComprar">Añadir al Carrito</a></p>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                  <div class="carousel-item ">
                    <div class="row">
                      <?php
                      $resultado2 = $conexion->query("SELECT * FROM productos  WHERE id> 7 LIMIT 4") or die($conexion->error);
                      // En este bucle imprimimos los otros 3 productos
                      while ($fila2 = mysqli_fetch_array($resultado2)) {
                      ?>
                        <div class="col-md-3">
                          <div class="item-box-blog box_productos">
                            <figure class="block-4-image">
                              <!-- Añadimos un poco de PHP a la URL para que cada producto tenga su página -->
                              <a href="shop-single.php?id=<?php echo $fila2['id']; ?>">
                                <img src="images/<?php echo $fila2['imagen']; ?>" alt="<?php echo $fila2['nombre']; ?>" class="img-fluid"></a>
                              <div class="ribbon-wrapper2">
                                <div class="ribbon2">Oferta</div>
                              </div>
                            </figure>
                            <div class="item-box-blog-body">
                              <!--Heading-->
                              <div class="item-box-blog-heading">
                                <h5><a href="shop-single.php?id=<?php echo $fila2['id']; ?>"><?php echo $fila2['nombre']; ?></a></h5>
                              </div>
                              <!--Text-->
                              <div class="item-box-blog-text">
                                <p class="descripcionCarrousel"><?php echo $fila2['descripcion']; ?></p>
                              </div>
                              <p style="font-size: 20px;" class="text-primary font-weight-bold"><?php echo $fila2['precio']; ?> €</p>
                              <p><a href="cart.php?id=<?php echo $fila2[0]; ?>" class="buy-now btn btn-sm btn-primary bntComprar">Añadir al Carrito</a></p>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                </div>
                <!--.carousel-inner-->
              </div>
              <!--.Carousel-->
            </div>
          </div>
        </div>



        <?php include("./layouts/footer.php"); ?>


      </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

</body>

</html>