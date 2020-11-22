<!-- Se comprueba si existe un pedido para ese usuario, en caso afirmativo solo se muestra el último, 
en caso negativo, se redirecciona a home  -->
<?php

session_start();
include './php/conexion.php';

if (!isset($_GET['id_venta'])) {
  header('Location: index.php');
}
// Consultas mediante JOIN para recuperar datos de dos tablas en una misma consulta.
$datos = $conexion->query("SELECT 
    ventas.*,
    usuario.nombre, 
    usuario.telefono,
    usuario.email
    FROM ventas 
    INNER JOIN usuario ON ventas.id_usuario = usuario.id
    WHERE ventas.id=" . $_GET['id_venta']) or die($conexion->error);

$datosUsuario = mysqli_fetch_row($datos);
$datos2 = $conexion->query("SELECT * FROM envios WHERE id_venta=" . $_GET['id_venta']) or die($conexion->error);
$datosEnvio = mysqli_fetch_row($datos2);

$datos3 = $conexion->query("SELECT productos_venta.*,
      productos.nombre as nombre_producto, productos.imagen
      FROM productos_venta INNER JOIN productos on productos_venta.id_producto = productos.id
      WHERE id_venta =" . $_GET['id_venta']) or die($conexion->error);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Mis Pedidos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel=”stylesheet” href="C:/xampp/htdocs/panther/fonts/fontawesome/css/fontawesome.css">
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
            <h2 class="h3 mb-3 text-black">Mis Pedidos</h2>
          </div>
          <div class="col-md-12">

            <div class="p-3 p-lg-5 border">
              <div class="form-group row">
                <form class="col-md-12" method="post">

                  <div class="col-md-12">
                    <h2 class="h4 mb-3 text-black">Detalles de Facturación</h2>
                  </div>

                  <!-- Tabla datos de facturación -->
                  <table class="table">
                    <thead>
                      <tr style="background: #212529; color: white;">
                        <th scope="col">Pedido</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Compañía</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Provincia</th>
                        <th scope="col">Estado del pedido</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr style="border-bottom: 1px solid #dee2e6; color: #212529">
                        <th scope="row"><?php echo $_GET['id_venta']; ?></th>
                        <td><?php echo $datosUsuario[4]; ?></td>
                        <td><?php echo $datosEnvio[2]; ?></td>
                        <td><?php echo $datosEnvio[3]; ?></td>
                        <td><?php echo $datosUsuario[5]; ?></td>
                        <td><?php echo $datosUsuario[6]; ?></td>
                        <td><?php echo $datosEnvio[4]; ?></td>
                        <td><i style="color: #008f39 ;" class="icon-credit-card"></i> Pagado</td>
                      </tr>
                    </tbody>
                  </table>



                  <!-- Encabezado de la tabla de los productos -->
                  <div class="col-md-12">
                    <br>
                    <h2 class="h4 mb-3 text-black">Productos</h2>
                  </div>
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

                        <?php
                        // Variables para "Total del carrito"
                        $subtotal = 0;
                        $envio = 5.90;
                        $iva = 0;
                        $total = 0;

                        $format_subtotal = 0;
                        $format_envio = 0;
                        $format_iva = 0;
                        $format_total = 0;

                        ?>

                        <?php while ($f = mysqli_fetch_array($datos3)) {

                          // Calcular "Total del carrito"
                          $subtotal = $subtotal + $f['subtotal'];
                          $iva = $subtotal * 0.21;
                          $total = ($subtotal) + ($envio) + ($iva);

                          // Formato para que todos los precios tengan dos decimales
                          $format_subtotal = number_format($subtotal, 2);
                          $format_envio = number_format($envio, 2);
                          $format_iva = number_format($iva, 2);
                          $format_total = number_format($total, 2);
                        ?>

                          <!-- Cuerpo tabla productos detalles del último pedido -->
                          <tr>
                            <td class="product-thumbnail">
                              <img src="images/<?php echo $f['imagen']; ?>" class="img-fluid">
                            </td>
                            <td class="product-name">
                              <h2 class="h5 text-black"><?php echo $f['nombre_producto']; ?></h2>
                            </td>
                            <td>
                              x<?php echo $f['cantidad']; ?>
                            </td>
                            <td>
                              <?php echo ($f['subtotal']) / ($f['cantidad']); ?> €
                            </td>
                            <td>
                              <?php echo $f['subtotal']; ?> €
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>

                  <br>
                  <!-- Desglose del precio -->
                  <div class="row">
                    <div class="col-md-6">
                      <div class="row mb-5">
                        <div class="col-md-6 mb-3 mb-md-0">
                          <button class="btn btn-primary btn-sm btn-block">Repetir Pedido</button>
                        </div>
                        <div class="col-md-6">
                          <button class="btn btn-outline-primary btn-sm btn-block">Continuar Comprando</button>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                        </div>
                        <div class="col-md-8 mb-3 mb-md-0">

                        </div>
                        <div class="col-md-4">

                        </div>
                      </div>
                    </div>
                    <!-- Total carrito -->
                    <div class="col-md-6 pl-5">
                      <div class="row justify-content-end">
                        <div class="col-md-7">
                          <div class="row">
                            <div class="col-md-12 text-right border-bottom mb-5">
                              <h3 class="text-black h4 text-uppercase">Total Pedido</h3>
                            </div>
                          </div>
                          <!-- Subtotal -->
                          <div class="row mb-3">
                            <div class="col-md-6">
                              <span class="text-black">Subtotal</span>
                            </div>
                            <div class="col-md-6 text-right">
                              <strong class="text-black"><?php echo $format_subtotal; ?> €</strong>
                            </div>
                          </div>
                          <!-- Envío -->
                          <div class="row mb-3">
                            <div class="col-md-6">
                              <span class="text-black">Envío GLS (24h)</span>
                            </div>
                            <div class="col-md-6 text-right">
                              <strong class="text-black"><?php echo $format_envio; ?> €</strong>
                            </div>
                          </div>
                          <!-- IVA -->
                          <div class="row mb-3">
                            <div class="col-md-6">
                              <span class="text-black">IVA 21%</span>
                            </div>
                            <div class="col-md-6 text-right">
                              <strong class="text-black"><?php echo $format_iva; ?> €</strong>
                            </div>

                            <!-- Total -->
                          </div>
                          <div class="row mb-5" style="font-weight: 600;">
                            <div class="col-md-6">
                              <span class="text-black">Total</span>
                            </div>
                            <div class="col-md-6 text-right">
                              <strong class="text-black"><?php echo $format_total; ?> €</strong>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              </form>
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