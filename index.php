<?php
/*
Template Name: Inicio
 */

get_header();

// De esta forma tenemos acceso a todas las variables del JSON
global $pnt, $pnt_master;
extract($pnt, EXTR_PREFIX_ALL, 'pnt');
?>

<!-- Carrousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo PNT_DIR_URI . 'public/img/services/slide1.jpg' ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo PNT_DIR_URI . 'public/img/services/slide2.jpg' ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo PNT_DIR_URI . 'public/img/services/slide3.jpg' ?>" alt="Third slide">
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

<!-- Apertura div body -->
<div id="body">

<!-- Por qué elegirnos -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Por qué elegirnos</h2>
            <p class="large">El mejor servicio de reparaciones al mejor precio</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"> <img src="<?php echo PNT_DIR_URI . 'public/img/services/i1.png'; ?>" alt="#" /> </div>
          </div>
          <h4 class="theme_color">Recuperación de datos</h4>
          <p>Recuperamos los datos que hayas extraviado de tu PC, pendrive, discos duros...</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"> <img src="<?php echo PNT_DIR_URI . 'public/img/services/i2.png'; ?>" alt="#" /> </div>
          </div>
          <h4 class="theme_color">Reparaciones de Ordenadores</h4>
          <p>Ordenadores, portátiles, discos duros, monitores...</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"> <img src="<?php echo PNT_DIR_URI . 'public/img/services/i3.png'; ?>" alt="#" /> </div>
          </div>
          <h4 class="theme_color">Servicio Móvil</h4>
          <p>También reparamos tu smartphone, cambios de pantalla, baterías, actualización de software.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30 margin_0">
          <div class="center">
            <div class="icon"> <img src="<?php echo PNT_DIR_URI . 'public/img/services/i4.png'; ?>" alt="#" /> </div>
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
                <div class="icon text_align_left"><img src="<?php echo PNT_DIR_URI . 'public/img/services/si1.png'; ?>" alt="#" /></div>
                <h4 class="service-heading">Servicio rápido</h4>
                <p>El tiempo aproximado de reparación son 24/48h desde que recibimos el dispositivo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="<?php echo PNT_DIR_URI . 'public/img/services/si2.png'; ?>" alt="#" /></div>
                <h4 class="service-heading">Pago seguro</h4>
                <p>Toda nuestra web y nuestros pagos están protegidos por certificados SSL.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="<?php echo PNT_DIR_URI . 'public/img/services/si3.png'; ?>" alt="#" /></div>
                <h4 class="service-heading">Equipo de expertos</h4>
                <p>Está en las mejores manos, nuestro quipo de profesionales le asesorará en todo momento.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="<?php echo PNT_DIR_URI . 'public/img/services/si4.png'; ?>" alt="#" /></div>
                <h4 class="service-heading">Servicios asequibles</h4>
                <p>Precios más baratos de Andalucía en 2021. Todo en nuestra tienda online.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="<?php echo PNT_DIR_URI . 'public/img/services/si5.png'; ?>" alt="#" /></div>
                <h4 class="service-heading">90 días de garantía</h4>
                <p>Todas las reparaciones incluyen una garantía de 90 días desde el momento de la entrega.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="<?php echo PNT_DIR_URI . 'public/img/services/si6.png'; ?>" alt="#" /></div>
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
          <div class="product_img"> <img class="img-responsive" src="<?php echo PNT_DIR_URI . 'public/img/services/1.jpg' ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a>Pendrive 3.0 - 32GB</a></h4>
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
          <div class="product_img"> <img class="img-responsive" src="<?php echo PNT_DIR_URI . 'public/img/services/2.jpg' ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a>Mini teclado inalambrico</a></h4>
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
          <div class="product_img"> <img class="img-responsive" src="<?php echo PNT_DIR_URI . 'public/img/services/3.jpg' ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a>Multiplicador jack 1.5</a></h4>
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
          <div class="product_img"> <img class="img-responsive" src="<?php echo PNT_DIR_URI . 'public/img/services/4.jpg' ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a>Altavoces logitech 2000W</a></h4>
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
          <div class="product_img"> <img class="img-responsive" src="<?php echo PNT_DIR_URI . 'public/img/services/5.jpg' ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a>Soporte para cables</a></h4>
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
          <div class="product_img"> <img class="img-responsive" src="<?php echo PNT_DIR_URI . 'public/img/services/6.jpg' ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a>Amplificador de señal</a></h4>
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
          <div class="product_img"> <img class="img-responsive" src="<?php echo PNT_DIR_URI . 'public/img/services/7.jpg' ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a>Router 600mHz</a></h4>
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
          <div class="product_img"> <img class="img-responsive" src="<?php echo PNT_DIR_URI . 'public/img/services/8.jpg' ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a>Ratón + PDA</a></h4>
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
          <div class="product_img"> <img class="img-responsive" src="<?php echo PNT_DIR_URI . 'public/img/services/3.jpg' ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a>Multiplicador jack 1.5</a></h4>
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
          <div class="product_img"> <img class="img-responsive" src="<?php echo PNT_DIR_URI . 'public/img/services/1.jpg' ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a>Pendrive 3.0 - 32GB</a></h4>
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
          <div class="product_img"> <img class="img-responsive" src="<?php echo PNT_DIR_URI . 'public/img/services/4.jpg' ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a>Altavoces logitech 2000W</a></h4>
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
          <div class="product_img"> <img class="img-responsive" src="<?php echo PNT_DIR_URI . 'public/img/services/2.jpg' ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a>Mini teclado inalambrico</a></h4>
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

<!-- Nuestras opiniones -->
<div class="section padding_layout_1 light_silver gross_layout right_gross_layout">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_right">
            <h2>Nuestros comentarios</h2>
            <p class="large">Manera fácil y eficaz de reparar su dispositivo.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row counter">
      <div class="col-md-4"> </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
            <div class="text_align_center"><i class="fa fa-smile-o"></i></div>
            <div class="text_align_center">
              <p class="counter-heading text_align_center">Clientes satisfechos</p>
            </div>
            <h5 class="counter-count">2150</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
            <div class="text_align_center"><i class="fa fa-laptop"></i></div>
            <div class="text_align_center">
              <p class="counter-heading text_align_center">Portátiles reparados</p>
            </div>
            <h5 class="counter-count">1280</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
            <div class="text_align_center"><i class="fa fa-desktop"></i></div>
            <div class="text_align_center">
              <p class="counter-heading">Ordenadores reparados</p>
            </div>
            <h5 class="counter-count">848</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
            <div class="text_align_center"><i class="fab fa-windows"></i></div>
            <div class="text_align_center">
              <p class="counter-heading">Sistema operativo instalado</p>
            </div>
            <h5 class="counter-count">450</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Blog -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Lo último de nuestro blog</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <?php 

      global $wp_query;
      $args = array_merge( $wp_query->query_vars, ['posts_per_page' => 3 ] );
      query_posts( $args );
      
      if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="col-md-4">
            <div class="full blog_colum">
              <div class="blog_feature_img">
                <a href="<?php the_permalink(); ?>">
                <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('post-thumbnails', array(
                      'class' => 'img-fluid',
                    ));
                  }
                  ?>
                </a>
              </div>
              <div class="post_time">
                <p style="float: left;"><i class="fa fa-clock-o"></i> <?php the_time('j F Y'); ?></p>
                <p style="float: right;"><i class="fas fa-tags"></i> <?php the_category(' / '); ?></p>
                <br>
              </div>
              <div class="blog_feature_head">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              </div>
              <div class="blog_feature_cont">
                <p><?php the_excerpt(); ?></p>
              </div>
            </div>
          </div>
      <?php endwhile;
      endif; ?>

    </div>
  </div>
</div>

<!-- Reseñas de los clientes -->
<div class="section padding_layout_1 testmonial_section white_fonts">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2 style="text-transform: none;">¿Qué dicen nuestros clientes?</h2>
            <p class="large">Algunas reseñas de nuestros clientes</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7">
        <div class="full">
          <div id="testimonial_slider" class="carousel slide bg-transparent" data-ride="carousel">
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
                  <div class="testimonial-content"> ¡Ustedes molan! ¡Gracias por hacerlo indoloro, agradable y, sobre todo, sin complicaciones! Ojalá lo hubiera pensado primero. Estoy realmente satisfecho con mi primer servicio de computadora portátil.</div>
                  <div class="testimonial-photo"> <img src="<?php echo PNT_DIR_URI . 'public/img/services/client1.jpg' ?>" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Maria Castro</h4>
                    <span class="testimonial-position"><i class="fas fa-map-marker-alt"></i> Sevilla</span>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> En tan solo 48h tengo mi ordenador en casa, con la pantalla nueva. A un precio increible. Muchas gracias, sois unos profesionales. </div>
                  <div class="testimonial-photo"> <img src="<?php echo PNT_DIR_URI . 'public/img/services/client2.jpg' ?>" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Julia Curbelo</h4>
                    <span class="testimonial-position"><i class="fas fa-map-marker-alt"></i> Málaga</span>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> ¡Sois increibles! Creí que no podría recuperar los datos de mi disco duro. Os lo envíe sin ninguna esperanza... Pero habéis restaurado todos los datos que había perdido. </div>
                  <div class="testimonial-photo"> <img src="<?php echo PNT_DIR_URI . 'public/img/services/client3.jpg' ?>" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Paula García</h4>
                    <span class="testimonial-position"><i class="fas fa-map-marker-alt"></i> Madrid</span>
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

<!-- Contacto -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="contact_us_section">
            <div class="call_icon"> <img src="<?php echo PNT_DIR_URI . 'public/img/services/phone_icon.png' ?>" alt="#" /> </div>
            <div class="inner_cont">
              <h2>Solicite una cita gratuita</h2>
              <p>Obtenga respuestas y consejos de las personas que desea.</p>
            </div>
            <div class="button_Section_cont"> 
              <a class="btn dark_gray_bt" href="mailto:<?php echo $pnt_menu['mail'] == '' ? 'info@panther.es' : $pnt_menu['mail'] ?>">Contactenos</a> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Marcas -->
<div class="section padding_layout_1" style="padding: 50px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <ul class="brand_list">
            <li><img src="<?php echo PNT_DIR_URI . 'public/img/services/brand_icon1.png' ?>" alt="#" /></li>
            <li><img src="<?php echo PNT_DIR_URI . 'public/img/services/brand_icon2.png' ?>" alt="#" /></li>
            <li><img src="<?php echo PNT_DIR_URI . 'public/img/services/brand_icon3.png' ?>" alt="#" /></li>
            <li><img src="<?php echo PNT_DIR_URI . 'public/img/services/brand_icon4.png' ?>" alt="#" /></li>
            <li><img src="<?php echo PNT_DIR_URI . 'public/img/services/brand_icon5.png' ?>" alt="#" /></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Contenido del modal-->
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


<?php get_footer(); ?>