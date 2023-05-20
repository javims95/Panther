<?php
/*
Template Name: Servicios
 */
?>

<?php 
get_header(); 
global $pnt, $pnt_master;

$service1 = PNT_DIR_URI . 'public/img/services/post-01.jpg';
$service2 = PNT_DIR_URI . 'public/img/services/post-02.jpg';
$service3 = PNT_DIR_URI . 'public/img/services/post-03.jpg';
$service4 = PNT_DIR_URI . 'public/img/services/post-04.jpg';
$service5 = PNT_DIR_URI . 'public/img/services/post-05.jpg';
$service6 = PNT_DIR_URI . 'public/img/services/post-06.jpg';
$service7 = PNT_DIR_URI . 'public/img/services/post-07.jpg';
$service8 = PNT_DIR_URI . 'public/img/services/post-08.jpg';
?>

<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Servicios</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">inicio</a></li>
                <li class="active">Servicios</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->

<!-- section -->
<div class="section padding_layout_1 service_list">
  <div class="container">
    <div class="row">
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="<?php echo $service1 ?>" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Recuperación de datos</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="services_detail.html">Ver Servicio</a> </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="<?php echo $service2 ?>" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Reparación de portátiles</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="services_detail.html">Ver Servicio</a> </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="<?php echo $service3 ?>" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Soluciones de web</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="services_detail.html">Ver Servicio</a> </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="<?php echo $service4 ?>" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Reparación de hardware</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="services_detail.html">Ver Servicio</a> </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="<?php echo $service5 ?>" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Soluciones de red</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="services_detail.html">Ver Servicio</a> </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="<?php echo $service6 ?>" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Desarrollo web</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="services_detail.html">Ver Servicio</a> </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="<?php echo $service7 ?>" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Recuperación de datos</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="services_detail.html">Ver Servicio</a> </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="<?php echo $service8 ?>" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Reparación de ordenadores</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="services_detail.html">Ver Servicio</a> </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="<?php echo $service1 ?>" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Programación web</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="services_detail.html">Ver Servicio</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->

<?php get_footer(); ?>