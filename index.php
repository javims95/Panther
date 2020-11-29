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

      
      <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="site-section site-blocks-2">
            <div class="row justify-content-center text-center mb-5">
              <div class="col-md-7 site-section-heading pt-4 nav">
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
        <?php include("./layouts/footer.php"); ?>


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