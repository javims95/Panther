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
  const allRanges = document.querySelectorAll('.range-wrap')
  allRanges.forEach((wrap) => {
    const range = wrap.querySelector('.range')
    const bubble = wrap.querySelector('.output')

    range.addEventListener('input', () => {
      setBubble(range, bubble)
    })
    setBubble(range, bubble)
  })

  function setBubble(range, bubble) {
    const val = range.value
    const min = range.min ? range.min : 0
    const max = range.max ? range.max : 100
    const newVal = Number(((val - min) * 100) / (max - min))
    bubble.innerHTML = val

    // Sorta magic numbers based on size of the native UI thumb
    bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`
  }
})
