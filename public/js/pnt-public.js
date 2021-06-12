jQuery(document).ready(function ($) {

  // Mega-Menú
  $(document).on('click', '.dropdown-menu', function (e) {
    e.stopPropagation();
  });


  if (typeof headerStiky != 'undefined') {

    // Menú pegajoso
    $(document).ready(function () {
      var altura = $('.header_bottom').offset().top;

      $(window).on('scroll', function () {
        if ($(window).scrollTop() > altura) {
          $('.header_bottom').addClass('header_bottom_fixed');
          $('.header_bottom').addClass('header_bottom_fixed');
        } else {
          $('.header_bottom').removeClass('header_bottom_fixed');
        }
      });

    });
  }

});