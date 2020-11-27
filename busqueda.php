<!-- Incluimos la conexion a la base de datos -->
<?php
session_start();
include('./php/conexion.php');
if (!isset($_GET['texto'])) {
  header("Location: ./index.php");
}
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

</head>

<body>

  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4">
                  <h2 class="text-black h5">Resultados para: <b><?php echo $_GET['texto'] ?></b></h2>
                </div>
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

              <?php
              // Consulta para mostrar los resultados de búsqueda (buscador)
              // Resultados: puede estar en el nombre, descripción, talla, color
              $resultado = $conexion->query("select * from productos where
               nombre like '%" . $_GET['texto'] . "%' or
               descripcion like '%" . $_GET['texto'] . "%' or
               talla like '%" . $_GET['texto'] . "%' or
               color like '%" . $_GET['texto'] . "%'
               
               order by id DESC") or die($conexion->error);

              if (mysqli_num_rows($resultado) > 0) {


                // En este bucle imprimimos los productos obtenidos de la consulta
                while ($fila = mysqli_fetch_array($resultado)) {

              ?>
                  <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                    <div class="block-4 text-center border">
                      <figure class="block-4-image">
                        <!-- Añadimos un poco de PHP a la URL para ver los detalles del producto -->
                        <a href="shop-single.php?id=<?php echo $fila['id']; ?>">
                          <img src="images/<?php echo $fila['imagen']; ?>" alt="<?php echo $fila['nombre']; ?>" class="img-fluid"></a>
                      </figure>
                      <div class="block-4-text p-4">
                        <h3><a href="shop-single.php?id=<?php echo $fila['id']; ?>"><?php echo $fila['nombre']; ?></a></h3>
                        <p class="mb-0"><?php echo $fila['descripcion']; ?></p>
                        <p class="text-primary font-weight-bold"><?php echo $fila['precio']; ?> €</p>
                      </div>
                    </div>
                  </div>

              <?php }
              } else {
                echo '<h2>Sin resultados</h2>';
              }
              ?>

            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

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
                    <a href="categoria.php?id=<?php echo $fila3['nombre']; ?>" class="d-flex">
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