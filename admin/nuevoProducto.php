<?php
session_start();
include "../php/conexion.php";

if (!isset($_SESSION['datos_login'])) {
  header("Location: ../index.php");
}
$arregloUsuario = $_SESSION['datos_login'];

if ($arregloUsuario['nivel'] != 'admin') {
  header("Location: ../index.php");
}

$resultado = $conexion->query("
SELECT * FROM productos ORDER BY id DESC") or die($conexion->error);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Productos | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="./dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="./dashboard/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dashboard/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="./dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./dashboard/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="./dashboard/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <?php include "./layouts/header.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Insertar Nuevo producto</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <!-- Insertar producto -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <form action="../php/insertarProducto.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="new_nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Camiseta para niño" required>
            </div>
            <div class="form-group">
              <label for="new_descripcion">Descripción</label>
              <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Camiseta roja. Buena calidad. Fabricada en España" required></textarea>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="new_precio">Precio</label>
                  <input type="number" min="0" class="form-control" id="precio" name="precio" placeholder="20.50" required>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="new_inventario">Inventario</label>
                  <input type="number" min="0" class="form-control" id="inventario" name="inventario" placeholder="20" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="new_categoria">Categoría</label>
              <select multiple class="form-control" id="categoria" name="categoria" required>
                <?php
                $res = $conexion->query("select * from categorias");
                while ($f = mysqli_fetch_array($res)) {
                  echo '<option value="' . $f['id'] . '" >' . $f['nombre'] . '</option>';
                }
                ?>
              </select>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="new_talla">Talla</label>
                  <input type="text" class="form-control" id="talla" name="talla" placeholder="XL" required>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="new_color">Color</label>
                  <input type="text" class="form-control" id="color" name="color" placeholder="Rojo" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="new_imagen">Imagen</label>
                  <input type="file"  class="form-control-file" id="imagen" name="imagen" placeholder="XL" required>
                </div>
              </div>
              
            </div>
            <center>
              <button class="btn btn-success" type="submit"><i class="fas fa-plus"></i> Añadir Producto</button>
              <button class="btn btn-warning" type="reset"><i class="fas fa-broom"></i> Limpiar</button>
              <button class="btn btn-danger" onclick="location='index.php'" type="submit"><i class="fas fa-trash-alt"></i> Cancelar</button>
            </center>
          </form>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <?php include "./layouts/footer.php"; ?>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="./dashboard/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="./dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="./dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="./dashboard/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="./dashboard/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="./dashboard/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="./dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="./dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="./dashboard/plugins/moment/moment.min.js"></script>
  <script src="./dashboard/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="./dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="./dashboard/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="./dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./dashboard/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="./dashboard/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="./dashboard/dist/js/demo.js"></script>
</body>

</html>