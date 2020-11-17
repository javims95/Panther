<!-- Se almacenan los datos del formulario de contacto en una tabla en la BBDD -->
<?php

  session_start();
  include './php/conexion.php';

  if (!isset($_GET['id_venta'])){
    header('Location: index.php');
  }
  $datos = $conexion->query("SELECT 
    ventas.*,
    usuario.nombre, 
    usuario.telefono,
    usuario.email
    FROM ventas 
    INNER JOIN usuario ON ventas.id_usuario = usuario.id
    WHERE ventas.id=".$_GET['id_venta'])or die($conexion->error);

    $datosUsuario = mysqli_fetch_row($datos);
    $datos2 = $conexion->query("SELECT * FROM envios WHERE id_venta=".$_GET['id_venta'])or die($conexion->error);
    $datosEnvio= mysqli_fetch_row($datos2);

    $datos3= $conexion->query("SELECT productos_venta.*,
      productos.nombre as nombre_producto, productos.imagen
      FROM productos_venta INNER JOIN productos on productos_venta.id_producto = productos.id
      WHERE id_venta =".$_GET['id_venta'])or die($conexion->error);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contacto</title>
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
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Contáctanos !!</h2>
          </div>
          <div class="col-md-7">

            <form method="post">
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                <!-- Número de la venta -->
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Pedido #<?php echo $_GET['id_venta'];?></label>
                  </div>
                  <!-- Nombre -->
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Nombre <?php echo $datosUsuario[4];?></label>
                  </div>
                  <!-- Email -->
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Email <?php echo $datosUsuario[6];?></label>
                  </div>
                  <!-- Teléfono -->
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Teléfono <?php echo $datosUsuario[5];?></label>
                  </div>
                  <!-- Compañía -->
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Compañía <?php echo $datosEnvio[2];?></label>
                  </div>
                  <!-- Dirección -->
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Dirección <?php echo $datosEnvio[3];?></label>
                  </div>
                  <!-- País/Estado -->
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Estado <?php echo $datosEnvio[4];?></label>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Tabla dinámica de los productos comprados -->
    <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Imagen</th>
                    <th class="product-name">Nombre</th>
                    <th class="product-name">Cantidad</th>
                    <th class="product-price">Precio Unidad</th>
                    <th class="product-quantity">Subtotal</th>
                  </tr>
                </thead>
                <tbody>
                <?php while ($f = mysqli_fetch_array($datos3)){ ?>
                <!-- Con PHP hacemos la tabla del carrito dinámica -->
                <tr>
                    <td class="product-thumbnail">
                      <img src="images/<?php echo $f['imagen'];?>" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $f['nombre_producto'];?></h2>
                    </td>
                    <td>
                      x<?php echo $f['cantidad'];?>
                    </td>
                    <td>
                      <?php echo ($f['subtotal'])/($f['cantidad']);?> €
                    </td>
                    <td>
                      <?php echo $f['subtotal'];?> €
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </form>

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