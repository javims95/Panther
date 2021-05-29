<?php get_header();

// De esta forma tenemos acceso a todas las variables del JSON
global $pnt, $pnt_master;
extract($pnt, EXTR_PREFIX_ALL, 'pnt');

// Imágenes slider
$slider1 = PNT_DIR_URI . 'public/img/it_service/slide1.jpg';
$slider2 = PNT_DIR_URI . 'public/img/it_service/slide2.jpg';
$slider3 = PNT_DIR_URI . 'public/img/it_service/slide3.jpg';

// Iconos "por qué elegirnos"
$icon1 = PNT_DIR_URI . 'public/img/it_service/i1.png';
$icon2 = PNT_DIR_URI . 'public/img/it_service/i2.png';
$icon3 = PNT_DIR_URI . 'public/img/it_service/i3.png';
$icon4 = PNT_DIR_URI . 'public/img/it_service/i4.png';

// Iconos "Proceso del servicio"
$service1 = PNT_DIR_URI . 'public/img/it_service/si1.png';
$service2 = PNT_DIR_URI . 'public/img/it_service/si2.png';
$service3 = PNT_DIR_URI . 'public/img/it_service/si3.png';
$service4 = PNT_DIR_URI . 'public/img/it_service/si4.png';
$service5 = PNT_DIR_URI . 'public/img/it_service/si5.png';
$service6 = PNT_DIR_URI . 'public/img/it_service/si6.png';

// Productos
$product1 = PNT_DIR_URI . 'public/img/it_service/1.jpg';
$product2 = PNT_DIR_URI . 'public/img/it_service/2.jpg';
$product3 = PNT_DIR_URI . 'public/img/it_service/3.jpg';
$product4 = PNT_DIR_URI . 'public/img/it_service/4.jpg';
$product5 = PNT_DIR_URI . 'public/img/it_service/5.jpg';
$product6 = PNT_DIR_URI . 'public/img/it_service/6.jpg';
$product7 = PNT_DIR_URI . 'public/img/it_service/7.jpg';
$product8 = PNT_DIR_URI . 'public/img/it_service/8.jpg';
$product1 = PNT_DIR_URI . 'public/img/it_service/1.jpg';
$product1 = PNT_DIR_URI . 'public/img/it_service/1.jpg';
$product1 = PNT_DIR_URI . 'public/img/it_service/1.jpg';
$product1 = PNT_DIR_URI . 'public/img/it_service/1.jpg';

?>

<!-- carrousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo $slider1 ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $slider2 ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $slider3 ?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- /.carousel -->

<!-- section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Porqué elegirnos</h2>
            <p class="large">El mejor servicio de reparaciones al mejor precio</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"> <img src="<?php echo $icon1; ?>" alt="#" /> </div>
          </div>
          <h4 class="theme_color">Recuperación de datos</h4>
          <p>Recuperamos los datos que hayas extraviado de tu PC, pendrive, discos duros...</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"> <img src="<?php echo $icon2; ?>" alt="#" /> </div>
          </div>
          <h4 class="theme_color">Reparaciones de Ordenadores</h4>
          <p>Ordenadores, portátiles, discos duros, monitores...</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"> <img src="<?php echo $icon3; ?>" alt="#" /> </div>
          </div>
          <h4 class="theme_color">Servicio Móvil</h4>
          <p>También reparamos tu smartphone, cambios de pantalla, baterías, actualización de software.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30 margin_0">
          <div class="center">
            <div class="icon"> <img src="<?php echo $icon4; ?>" alt="#" /> </div>
          </div>
          <h4 class="theme_color">Soluciones de red</h4>
          <p>Ofrecemos soluciones de conectividad y de cableado estructurado voz-datos para redes de comunicaciones.</p>
        </div>
      </div>
    </div>

    <!-- Acordeón -->
    <div class="row" style="margin-top: 35px">
      <div class="col-md-8">
        <div class="full margin_bottom_30">
          <div class="accordion border_circle">
            <div class="bs-example">
              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fas fa-save" aria-hidden="true"></i> Recuperación completa de discos duros<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <p>Disponemos de la más alta tecnología y la más extensa experiencia. Los primeros discos duros que empezamos a recuperar en 1989 tenían capacidades de entre 10Mb y 40Mb, la centésima parte de la capacidad de un DVD. En los últimos años hemos recuperado sistemas obsoletos desconocidos para la mayoría de los laboratorios que actualmente existen en Europa. A día de hoy disponemos de planes de I+D que nos permiten recuperar los dispositivos de última generación a los que la mayoría no tiene acceso. </p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fas fa-images"></i> Foto, imagen, video y audio de recuperación<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Para la recuperacion de datos la elección correcta de una compañía profesional es la decisión más importante. Cuando ocurre una pérdida de datos, sea cual sea la causa: soporte formateado, disco dañado, borrado de archivos, sabotaje, incendios, inundaciones, fallo mecánico, bloqueo del sistema, particiones perdidas, picos de tensión o golpes, es muy importante para recuperar datos, que nunca deje sus discos en manos inexpertas ya que la recuperación de un archivo o fichero exige personal altamente cualificado y materiales específicos.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fas fa-mobile-alt"></i> Recuperación en dispositivos móviles<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Ofrecemos un servicio de diagnóstico gratuito profesional de recuperacion de datos para su soporte en un plazo máximo de 24 horas. Para solicitarlo utilice la solicitud de diagnóstico gratuito que aparece a la derecha de esta página. La elaboración de un diagnóstico supone el esfuerzo de todo un equipo de profesionales, por ello, solo las compañías de recuperacion de disco duro pueden ofrecérselo con las mejores garantías; desconfíe de supuestos profesionales, con ello solo conseguirá que especulen con el valor de su información.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><i class="fab fa-usb" aria-hidden="true"></i> Recuperación de USB, tarjetas de memorias, CD, disquetes...<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <p>Hemos adquirido una gran experiencia en la recuperacion de datos de Sistemas RAID. Nuestro ratio para recuperar datos perdidos en este tipo de sistemas alcanza el 94% de éxito de los casos en los que intervenimos. Este ratio de éxito de recuperacion de datos alcanza el 87% para el caso de discos duros individuales.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="full" style="margin-top: 35px;">
          <h3>¿Necesita recuperar archivos?</h3>
          <p>Somos especialistas en la recuperacion de datos de discos duros y en la recuperación de datos de Sistemas RAID. Podemos recuperar datos de cualquier dispositivo de almacenamiento digital que presente fallos de lógica, hardware o ambos.</p>
          <p><a class="btn main_bt" href="#">Leer más</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Proceso del servicio -->
<div class="section padding_layout_1 light_silver gross_layout">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Proceso del servicio</h2>
            <p class="large">Manera fácil y eficaz de reparar su dispositivo.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="<?php echo $service1; ?>" alt="#" /></div>
                <h4 class="service-heading">Servicio rápido</h4>
                <p>El tiempo aproximado de reparación son 24/48h desde que recibimos el dispositivo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="<?php echo $service2; ?>" alt="#" /></div>
                <h4 class="service-heading">Pago seguro</h4>
                <p>Toda nuestra web y nuestros pagos están protegidos por certificados SSL.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="<?php echo $service3; ?>" alt="#" /></div>
                <h4 class="service-heading">Equipo de expertos</h4>
                <p>Está en las mejores manos, nuestro quipo de profesionales le asesorará en todo momento.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="<?php echo $service4; ?>" alt="#" /></div>
                <h4 class="service-heading">Servicios asequibles</h4>
                <p>Precios más baratos de Andalucía en 2021. Todo en nuestra tienda online.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="<?php echo $service5; ?>" alt="#" /></div>
                <h4 class="service-heading">90 días de garantía</h4>
                <p>Todas las reparaciones incluyen una garantía de 90 días desde el momento de la entrega.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="<?php echo $service6; ?>" alt="#" /></div>
                <h4 class="service-heading">ISO 9001</h4>
                <p>Galardonada en 2020 con la ISO 9001, por nuestro sistema de gestión de calidad.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Productos -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Nuestros productos</h2>
            <p class="large">Empaquetamos los productos con los mejores servicios para que sea un cliente satisfecho.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="<?php echo $product1 ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Pendrive 3.0 - 32GB</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            <div class="product_price">
              <p><span class="old_price">25.00€</span> – <span class="new_price">19.50€</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="<?php echo $product2 ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Mini teclado inalambrico</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            <div class="product_price">
              <p><span class="old_price">24.99€</span><span class="new_price"> 12.49€</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="<?php echo $product3 ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Multiplicador jack 1.5</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            <div class="product_price">
              <p><span class="old_price">15.99€</span><span class="new_price"> 9.99€</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="<?php echo $product4 ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Altavoces logitech 2000W</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            <div class="product_price">
              <p><span class="old_price">205.00€</span> – <span class="new_price">125.00€</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="<?php echo $product5 ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Soporte para cables</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            <div class="product_price">
              <p><span class="old_price">12.00€</span> – <span class="new_price">7.90€</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="<?php echo $product6 ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Amplificador de señal</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            <div class="product_price">
              <p><span class="old_price">38.65€</span><span class="new_price"> 25.82€</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="<?php echo $product7 ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Router 600mHz</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            <div class="product_price">
              <p><span class="old_price">101.05€</span><span class="new_price"> 65.10€</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="<?php echo $product8 ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Ratón + PDA</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            <div class="product_price">
              <p><span class="old_price">309.24€</span> – <span class="new_price">142.00€</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="<?php echo $product3 ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Multiplicador jack 1.5</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            <div class="product_price">
              <p><span class="old_price">15.99€</span><span class="new_price"> 9.99€</span></p>
            </div>
          </div>
        </div>
      </div>            
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="<?php echo $product1 ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Pendrive 3.0 - 32GB</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            <div class="product_price">
              <p><span class="old_price">25.00€</span> – <span class="new_price">19.50€</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="<?php echo $product4 ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Altavoces logitech 2000W</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            <div class="product_price">
              <p><span class="old_price">205.00€</span> – <span class="new_price">125.00€</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="<?php echo $product2 ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Mini teclado inalambrico</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            <div class="product_price">
              <p><span class="old_price">24.99€</span><span class="new_price"> 12.49€</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1 light_silver gross_layout right_gross_layout">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_right">
            <h2>Our Feedback</h2>
            <p class="large">Easy and effective way to get your device repaired.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row counter">
      <div class="col-md-4"> </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
            <div class="text_align_right"><i class="fa fa-smile-o"></i></div>
            <div class="text_align_right">
              <p class="counter-heading text_align_right">Happy Customers</p>
            </div>
            <h5 class="counter-count">2150</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
            <div class="text_align_right"><i class="fa fa-laptop"></i></div>
            <div class="text_align_right">
              <p class="counter-heading text_align_right">Laptop Repaired</p>
            </div>
            <h5 class="counter-count">1280</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
            <div class="text_align_right"><i class="fa fa-desktop"></i></div>
            <div class="text_align_right">
              <p class="counter-heading">Computer Repaired</p>
            </div>
            <h5 class="counter-count">848</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
            <div class="text_align_right"><i class="fa fa-windows"></i></div>
            <div class="text_align_right">
              <p class="counter-heading">OS Installed</p>
            </div>
            <h5 class="counter-count">450</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Latest from Our Blog</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img"> <img src="images/it_service/post-03.jpg" alt="#" /> </div>
          <div class="post_time">
            <p><i class="fa fa-clock-o"></i> April 16, 2018 ( In Maintenance )</p>
          </div>
          <div class="blog_feature_head">
            <h4>Why Your Computer Hates You</h4>
          </div>
          <div class="blog_feature_cont">
            <p>Lorem ipsum dolor sit amet, consectetur quam justo, pretium adipiscing elit. Vestibulum quam justo, pretium eu tempus ut, ...</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img"> <img src="images/it_service/post-04.jpg" alt="#" /> </div>
          <div class="post_time">
            <p><i class="fa fa-clock-o"></i> April 16, 2018 ( In Maintenance )</p>
          </div>
          <div class="blog_feature_head">
            <h4>Easy Tips To Computer Repair</h4>
          </div>
          <div class="blog_feature_cont">
            <p>Lorem ipsum dolor sit amet, consectetur quam justo, pretium adipiscing elit. Vestibulum quam justo, pretium eu tempus ut, ...</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img"> <img src="images/it_service/post-06.jpg" alt="#" /> </div>
          <div class="post_time">
            <p><i class="fa fa-clock-o"></i> April 16, 2018 ( In Maintenance )</p>
          </div>
          <div class="blog_feature_head">
            <h4>Computer Maintenance 2018</h4>
          </div>
          <div class="blog_feature_cont">
            <p>Lorem ipsum dolor sit amet, consectetur quam justo, pretium adipiscing elit. Vestibulum quam justo, pretium eu tempus ut, ...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1 testmonial_section white_fonts">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2 style="text-transform: none;">What Clients Say?</h2>
            <p class="large">Here are testimonials from clients..</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7">
        <div class="full">
          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
              <li data-target="#testimonial_slider" data-slide-to="1"></li>
              <li data-target="#testimonial_slider" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="testimonial-container">
                  <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first.
                    I am really satisfied with my first laptop service. </div>
                  <div class="testimonial-photo"> <img src="images/it_service/client1.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Maria Anderson</h4>
                    <span class="testimonial-position">CFO, Tech NY</span>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first.
                    I am really satisfied with my first laptop service. </div>
                  <div class="testimonial-photo"> <img src="images/it_service/client2.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Maria Anderson</h4>
                    <span class="testimonial-position">CFO, Tech NY</span>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first.
                    I am really satisfied with my first laptop service. </div>
                  <div class="testimonial-photo"> <img src="images/it_service/client3.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Maria Anderson</h4>
                    <span class="testimonial-position">CFO, Tech NY</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="full"> </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="contact_us_section">
            <div class="call_icon"> <img src="images/it_service/phone_icon.png" alt="#" /> </div>
            <div class="inner_cont">
              <h2>REQUEST A FREE QUOTE</h2>
              <p>Get answers and advice from people you want it from.</p>
            </div>
            <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="it_contact.html">Contact us</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1" style="padding: 50px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <ul class="brand_list">
            <li><img src="images/it_service/brand_icon1.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon2.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon3.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon4.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon5.png" alt="#" /></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Escribe algo para buscar" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Comience a escribir su búsqueda arriba y presione enter para buscar.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->
<!-- footer -->
<footer class="footer_style_2">
  <div class="container-fuild">
    <div class="row">
      <div class="map_section">
        <div id="map"></div>
      </div>
      <div class="footer_blog">
        <div class="row">
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>It Next Theme</h2>
            </div>
            <p>Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.</p>
            <ul class="social_icons">
              <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li class="social-icon gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Additional links</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_about.html"><i class="fa fa-angle-right"></i> About us</a></li>
              <li><a href="it_term_condition.html"><i class="fa fa-angle-right"></i> Terms and conditions</a></li>
              <li><a href="it_privacy_policy.html"><i class="fa fa-angle-right"></i> Privacy policy</a></li>
              <li><a href="it_news.html"><i class="fa fa-angle-right"></i> News</a></li>
              <li><a href="it_contact.html"><i class="fa fa-angle-right"></i> Contact us</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Services</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Data recovery</a></li>
              <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Computer repair</a></li>
              <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Mobile service</a></li>
              <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Network solutions</a></li>
              <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Technical support</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Contact us</h2>
            </div>
            <p>123 Second Street Fifth Avenue,<br>
              Manhattan, New York<br>
              <span style="font-size:18px;"><a href="tel:+9876543210">+987 654 3210</a></span>
            </p>
            <div class="footer_mail-section">
              <form>
                <fieldset>
                  <div class="field">
                    <input placeholder="Email" type="text">
                    <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="cprt">
        <p>ItNext © Copyrights 2019 Design by html.design</p>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->


<script>
  // This example adds a marker to indicate the position of Bondi Beach in Sydney,
  // Australia.
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 11,
      center: {
        lat: 40.645037,
        lng: -73.880224
      },
      styles: [{
          elementType: 'geometry',
          stylers: [{
            color: '#fefefe'
          }]
        },
        {
          elementType: 'labels.icon',
          stylers: [{
            visibility: 'off'
          }]
        },
        {
          elementType: 'labels.text.fill',
          stylers: [{
            color: '#616161'
          }]
        },
        {
          elementType: 'labels.text.stroke',
          stylers: [{
            color: '#f5f5f5'
          }]
        },
        {
          featureType: 'administrative.land_parcel',
          elementType: 'labels.text.fill',
          stylers: [{
            color: '#bdbdbd'
          }]
        },
        {
          featureType: 'poi',
          elementType: 'geometry',
          stylers: [{
            color: '#eeeeee'
          }]
        },
        {
          featureType: 'poi',
          elementType: 'labels.text.fill',
          stylers: [{
            color: '#757575'
          }]
        },
        {
          featureType: 'poi.park',
          elementType: 'geometry',
          stylers: [{
            color: '#e5e5e5'
          }]
        },
        {
          featureType: 'poi.park',
          elementType: 'labels.text.fill',
          stylers: [{
            color: '#9e9e9e'
          }]
        },
        {
          featureType: 'road',
          elementType: 'geometry',
          stylers: [{
            color: '#eee'
          }]
        },
        {
          featureType: 'road.arterial',
          elementType: 'labels.text.fill',
          stylers: [{
            color: '#3d3523'
          }]
        },
        {
          featureType: 'road.highway',
          elementType: 'geometry',
          stylers: [{
            color: '#eee'
          }]
        },
        {
          featureType: 'road.highway',
          elementType: 'labels.text.fill',
          stylers: [{
            color: '#616161'
          }]
        },
        {
          featureType: 'road.local',
          elementType: 'labels.text.fill',
          stylers: [{
            color: '#9e9e9e'
          }]
        },
        {
          featureType: 'transit.line',
          elementType: 'geometry',
          stylers: [{
            color: '#e5e5e5'
          }]
        },
        {
          featureType: 'transit.station',
          elementType: 'geometry',
          stylers: [{
            color: '#000'
          }]
        },
        {
          featureType: 'water',
          elementType: 'geometry',
          stylers: [{
            color: '#c8d7d4'
          }]
        },
        {
          featureType: 'water',
          elementType: 'labels.text.fill',
          stylers: [{
            color: '#b1a481'
          }]
        }
      ]
    });

    var image = 'images/it_service/location_icon_map_cont.png';
    var beachMarker = new google.maps.Marker({
      position: {
        lat: 40.645037,
        lng: -73.880224
      },
      map: map,
      icon: image
    });
  }
</script>
<!-- google map js -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script> -->
<!-- end google map js -->
</body>

</html>


<?php get_footer(); ?>