<!-- Comprobamos si existe la variable ID del producto solicitado, 
en caso contrario lo redireccionamos a index.php -->
<?php
session_start();
include("./php/conexion.php");
if (isset($_GET['id'])) {
  $resultado = $conexion->query("select * from productos where id=" . $_GET['id']) or die($conexion->error);
  if (mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_row($resultado);
  } else {
    // Redireccionamos
    header("Location: ./index.php");
  }
} else {
  // Redireccionamos
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
        <div class="row">
          <div class="col-md-6">
            <!-- Con el PHP mostramos los resultados del array correspondientes con el campo de la BBDD -->
            <img src="images/<?php echo $fila[4]; ?>" alt="<?php echo $fila[1]; ?>" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $fila[1]; ?></h2>
            <p><?php echo $fila[2]; ?></p>
            <p><strong class="text-primary h4"><?php echo $fila[3]; ?> €</strong></p>
            <div class="mb-1 d-flex">
              <label for="option-sm" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="shop-sizes"></span> <span class="d-inline-block text-black">Small</span>
              </label>
              <label for="option-md" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-md" name="shop-sizes"></span> <span class="d-inline-block text-black">Medium</span>
              </label>
              <label for="option-lg" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-lg" name="shop-sizes"></span> <span class="d-inline-block text-black">Large</span>
              </label>
              <label for="option-xl" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-xl" name="shop-sizes"></span> <span class="d-inline-block text-black"> Extra Large</span>
              </label>
            </div>
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                </div>
                <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <div class="input-group-append">
                  <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                </div>
              </div>

            </div>
            <p><a href="cart.php?id=<?php echo $fila[0]; ?>" class="buy-now btn btn-sm btn-primary" id="addToCart_comment" data-id="<?php echo $fila[0]; ?>">Añadir al Carrito</a></p>

          </div>
        </div>
      </div>
    </div>


    <!-- Publicar un comentario para el producto -->
    <center>
      <div class="site-section block-3 site-blocks-2 bg-light">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Comentarios</h2>
            <br>
          </div>
        </div>
        <div class="col-6">
          <?php
          if (isset($_SESSION['datos_login'])) {
          ?>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex row justify-content-center">
              <div class="image">
                <img style="border-radius: 50%;width: 70%;" src="admin\dashboard\dist\img/<?php echo $arregloUsuario['imagen']; ?>" class="img-circle elevation-2" alt="<?php echo $arregloUsuario['nombre']; ?>">
              </div>
              <div class="info">
                <a href="#" class="d-block"><?php echo $arregloUsuario['nombre']; ?></a>
                <span>Este contenido será público</span>
              </div>
            </div>
          <?php } ?>
          <form action="comentarios\añadir_comentario.php" method="POST">
          <input id="comment_product_id" name="comment_product_id" type="hidden">
            <div class="rating">
              <label>
                <input type="radio" name="stars" value="1" />
                <span class="icon">★</span>
              </label>
              <label>
                <input type="radio" name="stars" value="2" />
                <span class="icon">★</span>
                <span class="icon">★</span>
              </label>
              <label>
                <input type="radio" name="stars" value="3" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
              </label>
              <label>
                <input type="radio" name="stars" value="4" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
              </label>
              <label>
                <input type="radio" name="stars" value="5" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
              </label>
            </div>
            <input id="comment_rating" name="comment_rating" type="hidden">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input id="comment_name" name="comment_name" type="text" class="form-control" placeholder="Nombre">
              </div>
              <div class="form-group col-md-6">
                <input id="comment_email" name="comment_email" type="email" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <textarea id="comment_comment" name="comment_comment" type="text" class="form-control" placeholder="Comentario"></textarea>
            </div>
            <div>
              <button type="submit" class="btn btn-primary">Publicar comentario</button>
            </div>
          </form>
        </div>

        <!-- Publicar un comentario para el producto -->
        <div style="margin-top: 2rem;" class="col-6">
        <div class="btn btn-secondary btn-lg btn-block">
            Opiniones
        </div>
        <br>
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group">
            <textarea type="text" class="form-control" placeholder="Comentario" required></textarea>
          </div>
        </div>
      </div>
    </center>


    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Featured Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/cloth_1.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Tank Top</a></h3>
                    <p class="mb-0">Finding perfect t-shirt</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/shoe_1.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Corater</a></h3>
                    <p class="mb-0">Finding perfect products</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/cloth_2.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Polo Shirt</a></h3>
                    <p class="mb-0">Finding perfect products</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/cloth_3.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">T-Shirt Mockup</a></h3>
                    <p class="mb-0">Finding perfect products</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/shoe_1.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Corater</a></h3>
                    <p class="mb-0">Finding perfect products</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
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

  <script>
    $('.rating :radio').change(function() {
      console.log('New star rating: ' + this.value);
      var rating = this.value;
      var id = $("#addToCart_comment").data('id');
      $("#comment_product_id").val(id);
      $("#comment_rating").val(rating);
      
    });
  </script>

</body>

</html>