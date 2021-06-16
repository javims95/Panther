<?php
/*
Template Name: Sobre Nosotros
 */
?>

<?php 
get_header(); 
global $pnt, $pnt_master;

$img = PNT_DIR_URI . 'public/img/it_service/post-06.jpg';

$team1 = PNT_DIR_URI . 'public/img/it_service/team-member-1.jpg';
$team2 = PNT_DIR_URI . 'public/img/it_service/team-member-2.jpg';
$team3 = PNT_DIR_URI . 'public/img/it_service/team-member-3.jpg';
$team4 = PNT_DIR_URI . 'public/img/it_service/team-member-4.jpg';
?>

<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Sobre Nosotros</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Inicio</a></li>
                <li class="active">Sobre Nosotros</li>
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
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Nosotros somos empresa líder</h2>
            <p class="large">¡El servicio de reparación más rápido al mejor precio!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row about_blog">
      <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog">
        <div class="full text_align_left">
          <h3>¿Qué hacemos nosotros?</h3>
          <p>Trabajamos muy duro desde el 2001 para ofrecer a nuestros clientes los mejores precios, un servicio de mantenimiento y reparación muy profesional. También tenemos varios premios a la mejor empresa, como el certificado ISO 9001.</p>
          <ul>
            <li><i class="fa fa-check-circle"></i>Nuestro compromiso con el cliente es lo primero</li>
            <li><i class="fa fa-check-circle"></i>Atención personalizada en todo momento</li>
            <li><i class="fa fa-check-circle"></i>Equipo de profesionales con alta preparación</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img padding_right_0">
        <div class="full text_align_center"> <img class="img-responsive" src="<?php echo $img?>" alt="#" /> </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->

<!-- Staff -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Personal Experimentado</h2>
            <p class="large">Nuestros expertos han aparecido en la prensa en numerosas ocasiones.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="<?php echo $team1?>" alt="#"> </div>
          <div class="team_feature_head">
            <h4>Jorge Estrada</h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fab fa-google-plus-g" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fab fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fab fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="<?php echo $team2?>" alt="#"> </div>
          <div class="team_feature_head">
            <h4>Rosa Pelaez</h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fab fa-google-plus-g" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fab fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fab fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="<?php echo $team3?>" alt="#"> </div>
          <div class="team_feature_head">
            <h4>Jackson Curbelo</h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fab fa-google-plus-g" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fab fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fab fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="<?php echo $team4?>" alt="#"> </div>
          <div class="team_feature_head">
            <h4>Daan Lennard</h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fab fa-google-plus-g" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fab fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fab fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end staff -->

<?php get_footer(); ?>