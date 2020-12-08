<?php
session_start();
include "../php/conexion.php";

if (!isset($_SESSION['datos_login'])) {
    header("Location: ../login.php");
}
$arregloUsuario = $_SESSION['datos_login'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nuevo mensaje</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="dashboard/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dashboard/dist/css/adminlte.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="dashboard/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Site stylesheet -->
    <link rel="stylesheet" href="../css\style_admin.css">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">


        <?php include "./layouts/header.php"; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Compose</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Compose</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="mailbox.html" class="btn btn-primary btn-block mb-3">Back to Inbox</a>

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Folders</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="nav nav-pills flex-column">
                                        <li class="nav-item active">
                                            <a href="#" class="nav-link">
                                                <i class="fas fa-inbox"></i> Bandeja de entrada
                                                <span class="badge bg-primary float-right">12</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-envelope"></i> Enviados
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-file-alt"></i> Borradores
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="fas fa-filter"></i> Publicidad
                                                <span class="badge bg-warning float-right">65</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-trash-alt"></i> Eliminados
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Filtrar</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <ul class="nav nav-pills flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="far fa-circle text-danger"></i> Importante</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="far fa-circle text-warning"></i> Promociones</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="far fa-circle text-primary"></i> Social</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <form action="./insertar-correo.php" method="POST" enctype="multipart/form-data">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title">Nuevo mensaje</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input id="destinatario" name="destinatario" class="form-control" placeholder="Destinatario:">
                                        </div>
                                        <div class="form-group">
                                            <input id="asunto" name="asunto" class="form-control" placeholder="Asunto:">
                                        </div>
                                        <div class="form-group">
                                            <textarea id="compose-textarea" class="form-control" style="min-height: 300px !important"></textarea>
                                            <input id="messagge" name="messagge" id="messageHTML" type="hidden">
                                        </div>
                                        <div class="form-group">
                                            <div class="btn btn-default btn-file">
                                                <i class="fas fa-paperclip"></i> Adjuntar
                                                <input name="imagen" id="imagen" type="file" accept=".jpg,.png" name="attachment">
                                            </div>
                                            <p class="help-block">Max. 32MB</p>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Enviar</button>
                                        </div>
                                        <button type="reset" class="btn btn-danger"><i class="fas fa-times"></i> Cancelar</button>
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                            </form>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include "./layouts/footer.php"; ?>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="dashboard/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dashboard/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dashboard/dist/js/demo.js"></script>
    <!-- Summernote -->
    <script src="dashboard/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- Page Script -->
    <script>
        $(function() {
            //Add text editor
            $('#compose-textarea').summernote()
        })
    </script>
    <script>
        $(document).ready(function() {
            $(".note-editing-area").keyup(function() {
                var mensaje = $(".note-editing-area").html();
                $("#messageHTML").val(mensaje);


            });

        });
    </script>
</body>

</html>