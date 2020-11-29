<?php

session_start();
include("./php/conexion.php");

if (isset($_GET['id'])) {
  $resultado = $conexion->query("select * from productos where id=" . $_GET['id']) or die($conexion->error);
  if (mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_row($resultado);
  } else {
    // Redireccionamos
    echo 'No hay productos en esta categoría';
  }
} else {
  // Redireccionamos
  header("Location: ./index.php");
}

// Consulta para obtener los datos de las categorías
$resultado3 = $conexion->query("select * from categorias where id=" . $_GET['id']) or die($conexion->error);
if (mysqli_num_rows($resultado3) > 0) {
  $fila3 = mysqli_fetch_row($resultado3);
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
    <?php include("./layouts/header.php"); 
    
    
    // Consulta para obtener los datos de la categoría solicitada
$resultado4 = $conexion->query("select * from categorias where id=" . $_GET['id']) or die($conexion->error);
if (mysqli_num_rows($resultado4) > 0) {
  $fila4 = mysqli_fetch_row($resultado4);
}

?>
    <!-- Banner con el nombre y la descripción de cada categoría -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <center>
          <h1 class="display-4 text-black"><?php echo $fila4[1] ?></h1>
          <p class="lead text-black"><?php echo $fila4[2] ?></p>
        </center>
      </div>
    </div>

    <div class="container">
      <div class="row mb-5">
        <div class="col-md-9 order-2">
          <div class="row">
          </div>
          <div class="row mb-5">

            <!-- Incluimos la conexion a la base de datos -->
            <?php
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
              // Consulta para buscar y mostrar los 10 primeros productos
              $resultado = $conexion->query("select * from productos where id_categoria=" . $_GET['id'] . " order by id DESC limit " . $limite) or die($conexion->error);
            }


            // En este bucle imprimimos los productos
            while ($fila = mysqli_fetch_array($resultado)) {

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
                      echo '<li><a href="index.php?limite=' . ($_GET['limite'] - $limite) . '">&lt;</a></li>';
                    }
                  }
                  for ($k = 0; $k < $totalBotones; $k++) {
                    echo '<li><a href="index.php?limite=' . ($k * 10) . '">' . ($k + 1) . '</a></li>';
                  }
                  // Solo mostramos el paginador ">" si hay 10 productos más que mostrar
                  if (isset($_GET['limite'])) {
                    if ($_GET['limite'] + $limite < $totalBotones * $limite) {
                      echo '<li><a href="index.php?limite=' . ($_GET['limite'] + $limite) . '">&gt;</a></li>';
                    }
                  } else {
                    echo '<li><a href="index.php?limite=' . $limite . '">&gt;</a></li>';
                  }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-3 order-1 mb-5 mb-md-0">


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