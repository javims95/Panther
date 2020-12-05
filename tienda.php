<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tienda</title>
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

  <link rel="stylesheet" href="star-rating\src\css\star-rating-svg.css">

</head>

<body>

  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?>
    <!--
    ####################################################
    C A R O U S E L
    ####################################################
    -->
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <a href="https://bootstrapcreative.com/">
            <!-- 
                    If you need more browser support use https://scottjehl.github.io/picturefill/
                    If a picture looks blurry on a retina device you can add a high resolution like this
                    <source srcset="img/blog-post-1000x600-2.jpg, blog-post-1000x600-2@2x.jpg 2x" media="(min-width: 768px)">

                    What image sizes should you use? This can help - https://codepen.io/JacobLett/pen/NjramL
                     -->
            <picture>
              <source srcset="https://dummyimage.com/2000x500/007aeb/4196e5" media="(min-width: 1400px)">
              <source srcset="https://dummyimage.com/1400x500/#007aeb/4196e5" media="(min-width: 769px)">
              <source srcset="https://dummyimage.com/800x500/007aeb/4196e5" media="(min-width: 577px)">
              <img srcset="https://dummyimage.com/600x500/007aeb/4196e5" alt="responsive image" class="d-block img-fluid">
            </picture>

            <div class="carousel-caption">
              <div>
                <h2>Digital Craftsmanship</h2>
                <p>We meticously build each site to get results</p>
                <span class="btn btn-sm btn-outline-secondary">Learn More</span>
              </div>
            </div>
          </a>
        </div>
        <!-- /.carousel-item -->
        <div class="carousel-item">
          <a href="https://bootstrapcreative.com/">
            <picture>
              <source srcset="https://dummyimage.com/2000x500/007aeb/4196e5" media="(min-width: 1400px)">
              <source srcset="https://dummyimage.com/1400x500/007aeb/4196e5" media="(min-width: 769px)">
              <source srcset="https://dummyimage.com/800x500/007aeb/4196e5" media="(min-width: 577px)">
              <img srcset="https://dummyimage.com/600x500/007aeb/4196e5" alt="responsive image" class="d-block img-fluid">
            </picture>

            <div class="carousel-caption justify-content-center align-items-center">
              <div>
                <h2>Every project begins with a sketch</h2>
                <p>We work as an extension of your business to explore solutions</p>
                <span class="btn btn-sm btn-outline-secondary">Our Process</span>
              </div>
            </div>
          </a>
        </div>
        <!-- /.carousel-item -->
        <div class="carousel-item">
          <a href="https://bootstrapcreative.com/">
            <picture>
              <source srcset="https://dummyimage.com/2000x500/007aeb/4196e5" media="(min-width: 1400px)">
              <source srcset="https://dummyimage.com/1400x500/007aeb/4196e5" media="(min-width: 769px)">
              <source srcset="https://dummyimage.com/800x500/007aeb/4196e5" media="(min-width: 577px)">
              <img srcset="https://dummyimage.com/600x500/007aeb/4196e5" alt="responsive image" class="d-block img-fluid">
            </picture>

            <div class="carousel-caption justify-content-center align-items-center">
              <div>
                <h2>Performance Optimization</h2>
                <p>We monitor and optimize your site's long-term performance</p>
                <span class="btn btn-sm btn-secondary">Learn How</span>
              </div>
            </div>
          </a>
        </div>
        <!-- /.carousel-item -->
      </div>
      <!-- /.carousel-inner -->
      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Fin del carousel -->

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-9 order-2">
            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4">
                  <h2 class="text-black h3">Novedades</h2>
                </div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <!-- Botón al final de novedades -->
                  </div>

                </div>
              </div>
            </div>
            <div class="row mb-5">

              <!-- Incluimos la conexion a la base de datos -->
              <?php
              include('./php/conexion.php');

              // Con este bucle creamos 50 productos, para hacer las pruebas.
              /*for ($i=0;$i<50;$i++){
                $conexion->query("INSERT INTO productos 
                (nombre, descripcion, precio, imagen, inventario, id_categoria, talla, color) VALUES (
                  'Producto $i',
                  'Esta es la descripción para el producto nº$i',
                  ".rand(10,250).",
                  'shoe.png',
                  ".rand(1,95).",
                  '1',
                  'L',
                  'Blue'
                )")or die($conexion->error);
              }*/



              // Paginador de productos PHP
              $limite = 9; // Productos por página
              // Esta consulta devuelve cuantos productos hay en total.
              $totalQuery = $conexion->query('SELECT COUNT(*) FROM productos') or die($conexion->error);
              $totalProductos = mysqli_fetch_row($totalQuery);
              $totalBotones = round($totalProductos[0] / $limite);

              if (isset($_GET['limite'])) {
                // Consulta para mostrar el rango de productos que se envia por parametro en la URL
                $resultado = $conexion->query("select * from productos order by id DESC limit " . $_GET['limite'] . "," . $limite) or die($conexion->error);
              } else {
                // Consulta para buscar y mostrar los 10 primeros productos (si no hay parámetros en la URL)
                $resultado = $conexion->query("select * from productos order by id DESC limit " . $limite) or die($conexion->error);
              }


              // En este bucle imprimimos los productos
              while ($fila = mysqli_fetch_array($resultado)) {

              ?>
                <!-- Aqui imprimimos los productos, añadiendo un poco de PHP lo hacemos dinámico -->
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                  <div class="block-4 text-center box_productos">
                    <figure class="block-4-image">
                      <!-- Añadimos un poco de PHP a la URL para que cada producto tenga su página -->
                      <a href="shop-single.php?id=<?php echo $fila['id']; ?>">
                        <img src="images/<?php echo $fila['imagen']; ?>" alt="<?php echo $fila['nombre']; ?>" class="img-fluid"></a>
                    </figure>
                    <div class="block-4-text p-4">
                      <h3><a href="shop-single.php?id=<?php echo $fila['id']; ?>"><?php echo $fila['nombre']; ?></a></h3>
                      <p class="mb-0"><?php echo $fila['descripcion']; ?></p>
                      <p style="margin-bottom: 0px;" class="text-primary font-weight-bold"><?php echo $fila['precio']; ?> €</p>
                      <!-- Valoración con estrellas -->
                      <div style="width: 80%; display: inline-flex;" class="my-rating-10"></div>
                      <!-- Incluimos un botón para poder comprar el producto sin tener que visualizarlo -->
                      <p><a href="cart.php?id=<?php echo $fila[0]; ?>" class="buy-now btn btn-sm btn-primary bntComprar">Añadir al Carrito</a></p>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>


            <!-- Paginador de productos HTML -->
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>

                    <?php
                    // Imprime los botones de la paginación, dependiendo de los productos existentes y el límite de productos definido arriba.
                    if (isset($_GET['limite'])) { // Solo mostramos el paginador "<" si hay 10 productos mas que mostrar
                      if ($_GET['limite'] > 0) {
                        echo '<li><a href="tienda.php?limite=' . ($_GET['limite'] - $limite) . '">&lt;</a></li>';
                      }
                    }
                    for ($k = 0; $k < $totalBotones; $k++) {
                      echo '<li><a href="tienda.php?limite=' . ($k * 10) . '">' . ($k + 1) . '</a></li>';
                    }
                    // Solo mostramos el paginador ">" si hay 10 productos más que mostrar
                    if (isset($_GET['limite'])) {
                      if ($_GET['limite'] + $limite < $totalBotones * $limite) {
                        echo '<li><a href="tienda.php?limite=' . ($_GET['limite'] + $limite) . '">&gt;</a></li>';
                      }
                    } else {
                      echo '<li><a href="tienda.php?limite=' . $limite . '">&gt;</a></li>';
                    }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Barra de categorías -->
          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categorías</h3>
              <ul class="list-unstyled mb-0">
                <!-- Imprimo las categorías existentes y le creo un enlace con su nombre -->
                <?php
                $res3 = $conexion->query("select * from categorias") or die($conexion->error);

                while ($fila3 = mysqli_fetch_array($res3)) {
                ?>
                  <!-- Categorías barra de filtrado izquierda -->
                  <li class="mb-1">
                    <a href="categoria.php?id=<?php echo $fila3['id']; ?>" class="d-flex">
                      <span><?php echo $fila3['nombre']; ?></span>
                      <span class="text-black ml-auto">
                        (<?php $re2 = $conexion->query("SELECT COUNT(*) FROM productos WHERE id_categoria=" . $fila3['id']);
                          $fila4 = mysqli_fetch_row($re2);
                          echo $fila4[0];
                          ?>)
                      </span>

                    </a></li>
                <?php } ?>
              </ul>
            </div>

            <!-- Barra de filtros -->
            <div class="border p-4 rounded mb-4">
              <div class="mb-4">
                <!-- Precio -->
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                <div id="slider-range" class="border-primary"></div>
                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
              </div>

              <!-- Tallas -->
              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Tallas</h3>

                <!-- Con una consulta con distinct muestra las tallas sin repetir, 
              y crea el enlace que lo pasa por parámetro al buscador -->
                <?php
                $re6 = $conexion->query("SELECT DISTINCT talla FROM productos");
                while ($p = mysqli_fetch_array($re6)) {
                ?>
                  <a href="./busqueda.php?texto=<?php echo $p['talla']; ?>">
                    <input type="radio" id="s_sm" class="mr-2 mt-1">
                    <span class="text-black"><?php echo $p['talla']; ?></span>
                  </a><br>
                <?php } ?>
              </div>

              <!-- Colores -->
              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>

                <!-- Con una consulta a la tabla colores, se pinta el color con el valor hexadecimal de la BBDD -->
                <?php
                $re5 = $conexion->query("SELECT * FROM colores");
                while ($j = mysqli_fetch_array($re5)) {
                ?>
                  <a href="./busqueda.php?text=<?php echo $j['color']; ?>" class="d-flex color-item align-items-center">
                    <span style="background: <?php echo $j['codigo']; ?> ;" class="color d-inline-block rounded-circle mr-2">
                    </span> <span class="text-black"><?php echo $j['color']; ?></span>
                  </a>
                <?php } ?>
              </div>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="site-section site-blocks-2">
              <div class="row justify-content-center text-center mb-5">
                <div class="col-md-7 site-section-heading pt-4 nav">
                  <h2>Categorías</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                  <a class="block-2-item" href="#">
                    <figure class="image">
                      <img src="images/women.jpg" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                      <span class="text-uppercase">Collections</span>
                      <h3>Women</h3>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                  <a class="block-2-item" href="#">
                    <figure class="image">
                      <img src="images/children.jpg" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                      <span class="text-uppercase">Collections</span>
                      <h3>Children</h3>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                  <a class="block-2-item" href="#">
                    <figure class="image">
                      <img src="images/men.jpg" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                      <span class="text-uppercase">Collections</span>
                      <h3>Men</h3>
                    </div>
                  </a>
                </div>
              </div>

            </div>
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

  <script src="star-rating\src\jquery.star-rating-svg.js"></script>

    <!-- Valoraciones -->
  <script>
    $(".my-rating-10").starRating({
      starSize: 80,
      strokeWidth: 9,
      strokeColor: 'black',
      ratedColors: ['#e2c181', '#ffa700', '#c4573e', '#9a321a', '#5e1e0f'],
      initialRating: Math.floor(Math.random() * 9.5) + 2.5
    });
  </script>

</body>

</html>