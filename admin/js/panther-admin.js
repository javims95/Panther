jQuery(document).ready(function($){

    // Panther input media

    var $pantherMediaInputBtn   = $( '.panther-input-media button' ),
        $pantherRemoveMedia     = $( '.panther-media-remove' );
    
    $pantherMediaInputBtn.on( 'click', function(){
        
        var $this               = $( this ),
            dataMedia           = $this.attr( 'data-media' ),
            $pantherMediaInput      = $( '.panther-input-media #' + dataMedia ),
            $pantherMediaPreview    = $( '.panther-media-preview.' + dataMedia ),
            $pantherMediaPreviewImg = $( '.panther-media-preview.' + dataMedia + ' img' ),
            $pantherRemoveMediaThis = $( '.panther-media-remove[data-media-remove="' + dataMedia + '"' );

        $pantherMediaPreview.hide();

        var marcoMedia;
        
        if (marcoMedia){
            marcoMedia.open();
            return;
        }

        marcoMedia = wp.media({
            title: 'Selecciona una imagen',
            button: {
                text: 'Usar esta imagen'
            },
            multiple: false,
            library: {
                type: 'image'
            }
        });

        marcoMedia.on('select', function(){

            var attach  = marcoMedia.state().get('selection').first().toJSON(),
                url     = Panther.limpiarEnlace(attach.url);

            $pantherMediaInput.val(url);
            $pantherMediaPreviewImg.attr('src', url);
            $pantherRemoveMediaThis.css('display', 'flex');

            setTimeout( function(){
                $pantherMediaPreview.slideDown();
            }, 500);
        });

        marcoMedia.open();

    });

    // Remove media
    $pantherRemoveMedia.on( 'click', function(){
        
        var $this               = $( this ),
            dataMedia           = $this.attr( 'data-media-remove' ),
            $pantherMediaInput      = $( '.panther-input-media #' + dataMedia ),
            $pantherMediaPreview    = $( '.panther-media-preview.' + dataMedia ),
            $pantherMediaPreviewImg = $( '.panther-media-preview.' + dataMedia + ' img' );
        
        $pantherMediaInput.val('');
        $pantherMediaPreview.hide();
        $pantherMediaPreviewImg.attr( 'src', '' );
        $this.hide();
    });

});