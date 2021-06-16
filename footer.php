<?php wp_footer(); 

// De esta forma tenemos acceso a todas las variables del JSON
global $pnt, $pnt_master;
extract($pnt, EXTR_PREFIX_ALL, 'pnt');

// Footer
$phone          = $pnt_footer['phone'] == '' ? '633 822 820' : $pnt_footer['phone'];
$urlGoogleMaps  = $pnt_global['urlGoogleMaps'] == '' ? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.1287628046884!2d-4.42376904847735!3d36.71946867986704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72f795b1a4f35f%3A0xf3d44789b8b0e006!2sCalle%20Marqu%C3%A9s%20de%20Larios%2C%20M%C3%A1laga!5e0!3m2!1ses!2ses!4v1622461940627!5m2!1ses!2ses' : $pnt_global['urlGoogleMaps'];
$address        = $pnt_menu['address'] == '' ? 'Calle Marqués de Larios 25, 29003, Málaga' : $pnt_menu['address'];
$copyright      = $pnt_footer['copyright'] == '' ? 'Copyright © 2020-2021 | Todos los derechos reservados | Next.es' : $pnt_footer['copyright'];
?>

</div> <!-- Cierre div body -->

<!-- Footer -->
<footer class="footer_style_2">
  <div class="container-fuild">
    <div class="row">
      <div class="map_section">
      <iframe src="<?php echo $urlGoogleMaps ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="footer_blog">
        <div class="row">
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Next Tema</h2>
            </div>
            <p>El tema de WordPress más popular del 2021 y el mejor creador de páginas de WordPress</p>
            <ul class="social_icons">
              <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li class="social-icon gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Información</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_about.html"><i class="fa fa-angle-right"></i> Sobre nosotros</a></li>
              <li><a href="it_term_condition.html"><i class="fa fa-angle-right"></i> Términos y condiciones de uso</a></li>
              <li><a href="it_privacy_policy.html"><i class="fa fa-angle-right"></i> Política de privacidad</a></li>
              <li><a href="it_news.html"><i class="fa fa-angle-right"></i> Novedades</a></li>
              <li><a href="it_contact.html"><i class="fa fa-angle-right"></i> Contáctanos</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Services</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Recuperación de datos</a></li>
              <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Reparación de ordenadores</a></li>
              <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Servicio móvil</a></li>
              <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Soluciones de red</a></li>
              <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Soporte técnico</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Contacto</h2>
            </div>
            <p style="width: 30%;"><?php echo $address ?> <br><span style="font-size:18px;"><a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></span>
            </p>
            <div class="footer_mail-section">
              <form>
                  <div class="field">
                    <input placeholder="Email" type="text">
                    <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="cprt">
        <p><?php echo $copyright ?></p>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->

</body>

</html>