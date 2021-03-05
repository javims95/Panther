<?php

class PNT_Metaboxes {

    public function add() {

        $post_type = ['post', 'page'];

        add_meta_box(
            'pnt_id_metabox',
            'Configuración del tema para la página actual',
            [$this, 'html'],
            $post_type,
            'normal',
            'high'
        );
    }

    public function html($post, $metabox) {

        wp_nonce_field('pnt_mtb_seg', 'pnt_mtb_nonce');

        $pnt_mtb    = get_post_meta($post->ID, 'pnt_mtb_config',true);
        $output     = "";

        $side       = isset($pnt_mtb['sidebar']) ? $pnt_mtb['sidebar'] : '';
        $columnPage = isset($pnt_mtb['columnPage']) ? $pnt_mtb['columnPage'] : 'none';

        $output    .= "
            <p>
                <label class='post-attributes-label' for='pnt-sidebars'>
                    Seleccione el sidebar para mostrar
                </label>
            </p>
            <div>
                <select name='pnt_mtb[sidebar]' id='pnt-sidebars'>
                    {$this->sidebars($side)}
                </select>
            </div>
            <br>
            <hr>
            <h4>Seleccione la posición del sidebar</h4>
            <label for='pnt-column-page-none'>
                <input " . checked($columnPage, 'none', false) . " name='pnt_mtb[columnPage]' type='radio' id='pnt-column-page-none' value='none'>
                    No mostrar
            </label>
            <br>
            <label for='pnt-column-page-left'>
                <input " . checked($columnPage, 'left', false) . " name='pnt_mtb[columnPage]' type='radio' id='pnt-column-page-left' value='left'>
                    Izquierda
            </label>
            <br>
            <label for='pnt-column-page-right'>
                <input " . checked($columnPage, 'right', false) . " name='pnt_mtb[columnPage]' type='radio' id='pnt-column-page-right' value='right'>
                    Derecha
            </label>
            <br>
        ";

        echo $output;

    }

    public function save($post_id) {

        $action_nonce   = 'pnt_mtb_seg';

        if( ! isset($_POST['pnt_mtb_nonce'])) return;
        if( ! wp_verify_nonce($_POST['pnt_mtb_nonce'], $action_nonce)) return;
        if( ! current_user_can('edit_post', $post_id)) return;

        if(array_key_exists('pnt_mtb', $_POST)) {

            update_post_meta(
                $post_id,
                'pnt_mtb_config',
                $_POST['pnt_mtb']
            );
        }

    }

    public function sidebars($side) {

        $pnt        = get_option('pnt_config');
        $sidebars   = [ 0 => '-- Seleccionar --'];
        
        $output     = "";
        
        if(isset($pnt['sidebars']['custom'])){
            
            $sidebars   = array_merge($sidebars, $pnt['sidebars']['custom']);

        }
        
        foreach($sidebars as $valSide => $titleSide) {

            $output    .= "<option " . selected($side, $valSide, false) . " value='$valSide'>" . ucfirst($titleSide) . "</option>";
        }

        return $output;

    }
}