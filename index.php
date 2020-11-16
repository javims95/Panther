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
                <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Latest
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Men</a>
                      <a class="dropdown-item" href="#">Women</a>
                      <a class="dropdown-item" href="#">Children</a>
                    </div>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">

            <!-- Incluimos la conexion a la base de datos -->
            <?php 
              include ('./php/conexion.php');

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
              $totalQuery = $conexion->query('SELECT COUNT(*) FROM productos')or die($conexion->error);
              $totalProductos = mysqli_fetch_row($totalQuery);
              $totalBotones = round($totalProductos[0] /$limite);
              
              if(isset($_GET['limite'])){
                // Consulta para mostrar el rango de productos que se envia por parametro en la URL
                $resultado = $conexion ->query("select * from productos order by id DESC limit ".$_GET['limite'].",".$limite)or die($conexion-> error);
              }
              else {
                // Consulta para buscar y mostrar los 10 primeros productos
                $resultado = $conexion ->query("select * from productos order by id DESC limit ".$limite)or die($conexion-> error);
              }
              //die ($totalProductos[0]);




              // En este bucle imprimimos los productos
              while($fila = mysqli_fetch_array($resultado)) {
                
            ?>
            <!-- Aqui imprimimos los productos, añadiendo un poco de PHP lo hacemos dinámico -->
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                  <div class="block-4 text-center border">
                    <figure class="block-4-image">
                    <!-- Añadimos un poco de PHP a la URL para que cada producto tenga su página -->
                      <a href="shop-single.php?id=<?php echo $fila['id']; ?>">
                      <img src="images/<?php echo $fila['imagen']; ?>" alt="<?php echo $fila['nombre']; ?>" class="img-fluid"></a>
                    </figure>
                    <div class="block-4-text p-4">
                      <h3><a href="shop-single.php?id=<?php echo $fila['id']; ?>"><?php echo $fila['nombre']; ?></a></h3>
                      <p class="mb-0"><?php echo $fila['descripcion']; ?></p>
                      <p class="text-primary font-weight-bold"><?php echo $fila['precio']; ?> €</p>
                      <!-- Incluimos un botón para poder comprar el producto sin tener que visualizarlo -->
                      <p><a href="cart.php?id=<?php echo $fila[0]; ?>" class="buy-now btn btn-sm btn-primary">Añadir al Carrito</a></p>
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
                    if(isset($_GET['limite'])){// Solo mostramos el paginador "<" si hay 10 productos mas que mostrar
                      if($_GET['limite']>0){
                        echo '<li><a href="index.php?limite='.($_GET['limite']-$limite).'">&lt;</a></li>';
                      }
                    }
                      for ($k=0;$k<$totalBotones;$k++){
                        echo '<li><a href="index.php?limite='.($k*10).'">'.($k+1).'</a></li>';
                      }
                      // Solo mostramos el paginador ">" si hay 10 productos más que mostrar
                      if(isset($_GET['limite'])){
                        if($_GET['limite']+$limite < $totalBotones*$limite){
                          echo '<li><a href="index.php?limite='.($_GET['limite']+$limite).'">&gt;</a></li>';
                        }
                      }
                      else {
                        echo '<li><a href="index.php?limite='.$limite.'">&gt;</a></li>';
                      }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="#" class="d-flex"><span>Men</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Women</span> <span class="text-black ml-auto">(2,550)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Children</span> <span class="text-black ml-auto">(2,124)</span></a></li>
              </ul>
            </div>

            <div class="border p-4 rounded mb-4">
              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                <div id="slider-range" class="border-primary"></div>
                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
              </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Size</h3>
                <label for="s_sm" class="d-flex">
                  <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">Small (2,319)</span>
                </label>
                <label for="s_md" class="d-flex">
                  <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="text-black">Medium (1,282)</span>
                </label>
                <label for="s_lg" class="d-flex">
                  <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">Large (1,392)</span>
                </label>
              </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Red (2,429)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Green (2,298)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Blue (1,075)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Purple (1,075)</span>
                </a>
              </div>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="site-section site-blocks-2">
                <div class="row justify-content-center text-center mb-5">
                  <div class="col-md-7 site-section-heading pt-4">
                    <h2>Categories</h2>
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
    
  </body>
</html>