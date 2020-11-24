<?php
include 'php\visitas.php';
?>

<head>

  <style>
    @media only screen and (max-width: 992px) {
      .ocultarMenuAdmin {
        display: none;
      }
    }

    a.gear-nav {
      color: white !important;
    }
  </style>
</head>
<header class="site-navbar" role="banner">

  <!-- Comprobamos si el usuario está logueado, si lo está y es admin, se muestra el menú de administración -->
  <?php
  include "php\conexion.php";

  if (isset($_SESSION['datos_login'])) {

    $arregloUsuario = $_SESSION['datos_login'];

    if ($arregloUsuario['nivel'] == 'admin') {

  ?>

      <!-- Menú de administración -->
      <nav class="navbar navbar-expand-lg navbar-light navbar navbar-dark bg-dark ocultarMenuAdmin" style="height: 40px;">
        <a class="gear-nav" href="#"><span class="icon icon-cogs"></span></a>
        <a style="margin-left: 10px;" class="navbar-brand" href="admin">Administración</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Tienda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin\pedidos.php">Pedidos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Productos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="admin\productos.php">Ver Todos</a>
                <a class="dropdown-item" href="admin\nuevoProducto.php">Añadir Nuevo</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin\pedidos.php">Cupones</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Usuarios
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Ver Todos</a>
                <a class="dropdown-item" href="#">Añadir Nuevo</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin\mailBox.php">Mensajes</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Exportar
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">JSON</a>
                <a class="dropdown-item" href="#">XML</a>
                <a class="dropdown-item" href="#">CSV</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="php\cerrarSesion.php">Cerrar Sesión</a>
            </li>
          </ul>
        </div>
      </nav>

  <?php } // Cierre de los if
  } ?>

  <!-- Menú Principal -->
  <div class="site-navbar-top">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
          <form action="./busqueda.php" class="site-block-top-search" method="GET">
            <span class="icon icon-search2"></span>
            <input type="text" class="form-control" placeholder="Buscar..." name="texto">
          </form>
        </div>

        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
          <div class="site-logo">
            <a href="index.php" class="js-logo-clone">Panther</a>
          </div>
        </div>

        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
          <div class="site-top-icons">
            <ul>
              <li><a href="./login.php"><span class="icon icon-person"></span></a></li>
              <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
              <li>
                <a href="cart.php" class="site-cart">
                  <span class="icon icon-shopping_cart"></span>
                  <span class="count">
                    <?php
                    // Contador del carrito, muestra cuantos productos tenemos en el carro
                    if (isset($_SESSION['carrito'])) {
                      echo count($_SESSION['carrito']);
                    } else {
                      echo 0;
                    }
                    ?>
                  </span>
                </a>
              </li>
              <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
  <nav class="site-navigation text-right text-md-center" role="navigation">
    <div class="container">
      <ul class="site-menu js-clone-nav d-none d-md-block">
        <li>
          <a href="index.php">Inicio</a>

        </li>
        <li>
          <a href="about.php">Sobre Nosotros</a>

        </li>

        <li><a href="#">Catálogo</a></li>
        <li><a href="#">Novedades</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </div>
  </nav>
</header>

<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
        <strong class="text-black">Shop</strong></div>
    </div>
  </div>
</div>