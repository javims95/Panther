jQuery(document).ready(function ($) {
  /*
   * PNT tabs menu de la configuración
   */
  var $pnt_tabs = $('.pnt-menu li a'),
    $pnt_content = $('.pnt-content'),
    $pnt_header_title = $('.pnt-header-title h4'),
    $pnt_menu_activado = $('#pnt-menu-activado')

  $pnt_tabs.on('click', function (e) {
    e.preventDefault()

    var $this = $(this),
      id = $this.attr('href'),
      menu_activado = $this.attr('data-menuActivado')

    $pnt_menu_activado.val(menu_activado)
    $pnt_content.hide()
    $(id).show()
    $pnt_tabs.removeClass('active')
    $this.addClass('active')

    // Cambio del titulo de la cabecera automatico
    //$pnt_header_title.text($this.find('span').text());
    $pnt_header_title.html($this.html())
  })

  /*
   * PNT input media
   */
  var $pntMediaInputBtn = $('.pnt-input-media button'),
    $pntRemoveMedia = $('.pnt-media-remove')

  $pntMediaInputBtn.on('click', function () {
    var $this = $(this),
      dataMedia = $this.attr('data-media'),
      $pntMediaInput = $('.pnt-input-media #' + dataMedia),
      $pntMediaPreview = $('.pnt-media-preview.' + dataMedia),
      $pntMediaPreviewImg = $('.pnt-media-preview.' + dataMedia + ' img'),
      $pntRemoveMediaThis = $(
        '.pnt-media-remove[data-media-remove="' + dataMedia + '"',
      )

    $pntMediaPreview.hide()

    var marcoMedia

    if (marcoMedia) {
      marcoMedia.open()
      return
    }

    marcoMedia = wp.media({
      title: 'Selecciona una imagen',
      button: {
        text: 'Usar esta imagen',
      },
      multiple: false,
      library: {
        type: 'image',
      },
    })

    marcoMedia.on('select', function () {
      var attach = marcoMedia.state().get('selection').first().toJSON(),
        url = PNT.limpiarEnlace(attach.url)

      $pntMediaInput.val(url)
      $pntMediaPreviewImg.attr('src', url)
      $pntRemoveMediaThis.css('display', 'flex')

      setTimeout(function () {
        $pntMediaPreview.slideDown()
      }, 500)
    })

    marcoMedia.open()
  })

  /*
   * Remove media
   */
  $pntRemoveMedia.on('click', function () {
    var $this = $(this),
      dataMedia = $this.attr('data-media-remove'),
      $pntMediaInput = $('.pnt-input-media #' + dataMedia),
      $pntMediaPreview = $('.pnt-media-preview.' + dataMedia),
      $pntMediaPreviewImg = $('.pnt-media-preview.' + dataMedia + ' img')

    $pntMediaInput.val('')
    $pntMediaPreview.hide()
    $pntMediaPreviewImg.attr('src', '')
    $this.hide()
  })

  /*
   * Range Slider
   */

  /*Cada vez que el range cambie de valor, se cambiará el valor del input */
  $('#rangeSlider').on('change', function (e) {
    $('#output').val($(this).val())
  })

  /*Cada vez que el input cambie de valor, se cambiará el valor del range */
  $('#output').on('change', function (e) {
    $('#rangeSlider').val($(this).val())
  })



  /*
   * Sidebars
   */
  function templateListSidebar(text, id, dataID) {

    var name = '',
      arrID = dataID.split('-');

    for (var i = 0, l = arrID.length; i < l; i++) {

      name += arrID[i] == 'pnt' ? 'pnt' : '[' + arrID[i] + ']';

    }

    var output = '<li>' +
      '<input id="' + dataID + '-' + id + '" type="hidden" name="' + name + '[]" value="' + text.toLowerCase() + '">' +
      '<span class="texto">' + text.capitalize() + '</span>' +
      '<span class="pnt-remove-listSidebar">' +
      '<i class="fas fa-times"></i>' +
      '</span>' +
      '</li>';

    return output;

  }

  var $pntListValBtn = $('.pnt-listSidebar button');

  $pntListValBtn.on('click', function () {

    var $this = $(this),
      dataID = $this.attr('data-id'),
      $input = $('input#' + dataID),
      inputVal = $input.val(),
      $ulList = $('ul.' + dataID),
      countItems = $ulList.find('li').length;

    if (inputVal != '') {

      $ulList.append(templateListSidebar(inputVal, countItems + 1, dataID));
      $input.val('');

    }

  });

  /* Eliminar Sidebars */
  $(document).on('click', '.pnt-remove-listSidebar', function () {

    var $this = $(this);
    $this.parent().remove();

  });

  /*
   * Colorpicker
   */
  function pntColorToRGBa(objColor) {

    return 'rgba(' + objColor.r + ',' + objColor.g + ',' + objColor.b + ',' + objColor.a + ')';

  }

  /* Bucle para obtener los id del color picker e inicializarlos de forma dinámica */
  $(".file-field").each(function () {
    id = $(this).attr("id");

    $('#' + id).colorpicker({
      component: '.btn',
      customClass: 'pnt-colorpicker',
      sliders: {
        saturation: {
          maxLeft: 200,
          maxTop: 200
        },
        hue: {
          maxTop: 200
        },
        alpha: {
          maxTop: 200
        }
      }
    }).on('changeColor.colorpicker', function (e) {

      var $this = $(this),
        dataTag = $this.attr('data-tag'),
        $tagSelect = $('.pnt-preview-color-' + dataTag),
        eColorFormat = e.color.origFormat,
        colorHex = e.color.toHex(),
        colorRGBa = e.color.toRGB();

      if (eColorFormat == 'rgb' || eColorFormat == 'rgba') {

        var color = pntColorToRGBa(colorRGBa);
        $tagSelect.css('color', color);

      } else {

        $tagSelect.css('color', colorHex);

      }

    });
  });

  /*
   * Recuperar valor de las variantes de las Fuentes
   */

  function templateInlineVariants(variants, fontSelect) {

    var output_var = '',
      arrVariants = variants.split(',');

    for (var i = 0; i < arrVariants.length; i++) {

      var varID = 'pnt-fonts' + fontSelect + '-variants' + arrVariants[i];

      output_var +=
        '<label for="' + varID + '">' +
          '<input id="' + varID + '" name="pnt[fonts][' + fontSelect + '][variants][]" type="checkbox" class="filled-in" value="' + arrVariants[i] + '">' +
          '<span>' + arrVariants[i] + '</span>' +
        '</label>';
    }

    return output_var;
  }

  var $pntOptionsFonts = $('select.pnt-options-fonts');

  $pntOptionsFonts.on('change', function () {

    var $this = $(this),
      value = $this.val(),
      $selected = $this.find(':selected'),
      fontSelect = $this.attr('data-fontselect'),
      fontType = $selected.attr('data-fontType'),
      variants = $selected.attr('data-variants'),
      $pntOptVariants = $('.pnt-options-variants-' + fontSelect);

    if (fontType != 'googlefonts') {

      $pntOptVariants.find('p').html('');

    } else {

      var variantsHTML = templateInlineVariants(variants, fontSelect);
      $pntOptVariants.find('p').html(variantsHTML);

    }
  });
})
