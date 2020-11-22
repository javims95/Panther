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
SELECT * FROM usuario ORDER BY id DESC") or die($conexion->error);

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

          <!-- Modal error -->
          <?php
          if (isset($_GET['error'])) {
          ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error']; ?>
            </div>
          <?php } ?>

          <!-- Modal succes -->
          <?php
          if (isset($_GET['success'])) {
          ?>
            <div style="background: #28A745; border: 0px" class="alert alert-warning alert-dismissible fade show" role="alert">
              Producto publicado correctamente
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php } ?>

          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Productos</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <table class="table tablaAlinear">
            <thead>
              <tr>
                <th>Id</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Nivel</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($f = mysqli_fetch_array($resultado)) {
              ?>
                <tr>
                  <td>#<?php echo $f['id']; ?></td>
                  <td><img src="../images/<?php echo $f['img_perfil']; ?>" width="100px" height="70px" alt=""></td>
                  <td><?php echo $f['nombre']; ?></td>
                  <td><?php echo $f['email']; ?></td>
                  <td><?php echo $f['telefono']; ?></td>
                  <td><?php echo $f['nivel']; ?></td>
                  <td>
                    <!-- Botón editar -->
                    <button class="btn btn-primary btn-small btnEditar" 
                    data-id="<?php echo $f['id']; ?>" 
                    data-nombre="<?php echo $f['nombre']; ?>" 
                    data-email="<?php echo $f['email']; ?>" 
                    data-telefono="<?php echo $f['telefono']; ?>" 
                    data-nivel="<?php echo $f['nivel']; ?>" 
                    data-toggle="modal" data-target="#modalEditar">
                      <i class="fa fa-pen-square"></i>
                    </button>

                    <!-- Botón eliminar -->
                    <button class="btn btn-danger btn-small btnEliminar" 
                    data-id="<?php echo $f['id']; ?>" 
                    data-toggle="modal" data-target="#modalEliminar">
                      <i class="fa fa-trash"></i>
                    </button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    <!-- Modal eliminar -->
    <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalEliminarLabel">Eliminar Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ¿Desea eliminar el producto?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-danger eliminar" data-dismiss="modal">Eliminar</button>
          </div>
        </div>
      </div>
    </div>

    <?php include "./layouts/footer.php"; ?>
  </div>

  <!-- Modal Editar -->
  <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditar" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="../php/editarUsuario.php" method="POST" enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title" id="modalEditar">Editar Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" id="idEdit" name="id">

            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" name="nombreEditUser" placeholder="nombre" id="nombreEditUser" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="descripcionEdit">Teléfono</label>
              <textarea type="tel" name="telefonoEditUser" placeholder="descripcion" id="telefonoEditUser" class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <label for="precioEdit">Email</label>
              <input type="text"  name="emailEditUser" placeholder="precio" id="emailEditUser" class="form-control" required readonly>
            </div>
            <div class="form-group">
              <label for="inventarioEdit">Rol de Usuario</label>
              <select type="number" name="nivelEditUser" placeholder="inventarioEdit" id="nivelEditUser" class="form-control" required>
                  <option value="cliente">cliente</option>
                  <option value="admin">admin</option>
              </select>
            </div>
            <div class="form-group">
              <label for="imagen">Imagen</label><br>
              <input type="file" name="imagen" id="imagen">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary editar">Guardar</button>
          </div>
        </form>
      </div>
    </div>
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

  <script>
    // Script para eliminar los productos con el botón en la tabla
    $(document).ready(function() {
      var idEliminar = -1;
      var idEditar = -1;
      var fila;
      $(".btnEliminar").click(function() {
        idEliminar = $(this).data('id');
        fila = $(this).parent('td').parent('tr');
      });
      $(".eliminar").click(function() {
        $.ajax({
          url: '../php/eliminarUsuario.php',
          method: 'POST',
          data: {
            id: idEliminar
          }
        }).done(function(res) {

          $(fila).fadeOut(1000);
        });

      });
      // Script para editar los productos con el botón en la tabla
      $(".btnEditar").click(function() {
        idEditar = $(this).data('id');
        var nombre = $(this).data('nombre');
        var email = $(this).data('email');
        var telefono = $(this).data('telefono');
        var nivel = $(this).data('nivel');
        $("#nombreEditUser").val(nombre);
        $("#telefonoEditUser").val(telefono);
        $("#emailEditUser").val(email);
        $("#nivelEditUser").val(nivel);
        $("#idEdit").val(idEditar);
      });
    });
  </script>
</body>

</html>