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
    SELECT ventas.*,
    usuario.nombre,
    usuario.telefono,
    usuario.email 
    FROM ventas
    INNER JOIN usuario ON ventas.id_usuario = usuario.id
") or die($conexion->error);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pedidos</title>
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
                            <h1 class="m-0 text-dark">Pedidos</h1>
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
                    <div id="accordion">
                        <?php
                        while ($f = mysqli_fetch_array($resultado)) {
                        ?>
                            <div class="card">
                                <div class="card-header" id="heading<?php echo $f['id']; ?>">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $f['id']; ?>" aria-expanded="true" aria-controls="collapse">
                                            Pedido #<?php echo $f['id'] . ' | ' . $f['nombre'] . ' | ' . $f['fecha'];; ?>
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapse<?php echo $f['id']; ?>" class="collapse" aria-labelledby="heading<?php echo $f['id']; ?>" data-parent="#accordion">
                                    <div class="card-body">

                                        <div class="col-12 text-center">
                                            <h4 class="btn btn-secondary btn-lg btn-block">Datos del cliente</h4>
                                        </div>
                                        <!-- Tabla con los datos del cliente -->
                                        <table class="table tablaAlinear">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Email</th>
                                                    <th>Teléfono</th>
                                                    <th>Estado del pedido</th>
                                                    <th>Fecha</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $f['nombre']; ?></td>
                                                    <td><?php echo $f['email']; ?></td>
                                                    <td><?php echo $f['telefono']; ?></td>
                                                    <td><?php echo $f['status']; ?></td>
                                                    <td><?php echo $f['fecha']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br><br>

                                        <?php
                                        $re = $conexion->query("SELECT * FROM envios WHERE id_venta=" . $f['id']) or die($conexion->error);
                                        $fila = mysqli_fetch_row($re);
                                        $seguimiento = 'NCX' . rand(0, 999999999);
                                        ?>

                                        <div class="col-12 text-center">
                                            <h4 class="btn btn-secondary btn-lg btn-block">Datos de envío</h4>
                                        </div>
                                        <!-- Datos del envio -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Compañía</th>
                                                    <th>Dirección</th>
                                                    <th>Estado</th>
                                                    <th>Código Postal</th>
                                                    <th>Nº Seguimiento</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $fila[2]; ?></td>
                                                    <td><?php echo $fila[3]; ?></td>
                                                    <td><?php echo $fila[4]; ?></td>
                                                    <td><?php echo $fila[5]; ?></td>
                                                    <td><a href="https://www.nacex.es/seguimientoDetalle.do?agencia_origen=4616&numero_albaran=12924111">
                                                            <?php echo $seguimiento; ?></a></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="col-12 text-center">
                                            <h4 class="btn btn-secondary btn-lg btn-block">Resumen de la compra</h4>
                                        </div>
                                        <!-- Tabla de los productos adquiridos en ese pedido -->
                                        <table class="table tablaAlinear">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nombre</th>
                                                    <th>Precio/und</th>
                                                    <th>Talla</th>
                                                    <th>Color</th>
                                                    <th>Cantidad</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $re = $conexion->query("SELECT 
                                                productos_venta.*, productos.nombre, productos.talla, productos.color
                                                from productos_venta inner join productos on productos_venta.id_producto =
                                                productos.id where productos_venta.id_producto = productos.id") or die($conexion->error);
                                                while ($f2 = mysqli_fetch_array($re)) {
                                                ?>
                                                    <tr>
                                                        <td>#<?php echo $f2['id']; ?></td>
                                                        <td><?php echo $f2['nombre']; ?></td>
                                                        <td><?php echo number_format($f2['precio'], 2, ',', ''); ?> €</td>
                                                        <td><?php echo $f2['talla']; ?></td>
                                                        <td><?php echo $f2['color']; ?></td>
                                                        <td><?php echo $f2['cantidad']; ?></td>
                                                        <td><?php echo number_format($f2['subtotal'], 2, ',', ''); ?> €</td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>


                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

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
                <form action="../php/editarproducto.php" method="POST" enctype="multipart/form-data">
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
                            <input type="nombreEdit" name="nombre" placeholder="nombre" id="nombreEdit" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcionEdit">Descripcion</label>
                            <textarea type="text" name="descripcion" placeholder="descripcion" id="descripcionEdit" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="precioEdit">Precio</label>
                            <input type="number" min="0" name="precio" placeholder="precio" id="precioEdit" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="inventarioEdit">Inventario</label>
                            <input type="number" min="0" name="inventario" placeholder="inventarioEdit" id="inventarioEdit" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="categoriaEdit">Categoria</label>
                            <select multiple name="categoria" id="categoriaEdit" class="form-control" required>
                                <?php
                                $res = $conexion->query("select * from categorias");
                                while ($f = mysqli_fetch_array($res)) {
                                    echo '<option value="' . $f['id'] . '" >' . $f['nombre'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tallaEdit">Talla</label>
                            <input type="text" name="talla" placeholder="talla" id="tallaEdit" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tallaEdit">Color</label>
                            <input type="text" name="color" placeholder="color" id="colorEdit" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="imagen">Imagen</label>
                            <input type="file" name="imagen" id="imagen" class="form-control">
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
                    url: '../php/eliminarProducto.php',
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
                var descripcion = $(this).data('descripcion');
                var inventario = $(this).data('inventario');
                var categoria = $(this).data('categoria');
                var talla = $(this).data('talla');
                var color = $(this).data('color');
                var precio = $(this).data('precio');
                $("#nombreEdit").val(nombre);
                $("#descripcionEdit").val(descripcion);
                $("#inventarioEdit").val(inventario);
                $("#categoriaEdit").val(categoria);
                $("#tallaEdit").val(talla);
                $("#colorEdit").val(color);
                $("#precioEdit").val(precio);
                $("#idEdit").val(idEditar);
            });
        });
    </script>
</body>

</html>