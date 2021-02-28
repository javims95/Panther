<?php

/**
 * La funcionalidad específica de administración del plugin.
 *
 * @link       https://beziercode.com.co
 * @since      1.0.0
 *
 * @package    Beziercode_blank
 * @subpackage Beziercode_blank/admin
 */

/**
 * Define el nombre del plugin, la versión y dos métodos para
 * Encolar la hoja de estilos específica de administración y JavaScript.
 * 
 * @since      1.0.0
 * @package    BC THEME
 * @subpackage BC THEME/admin
 * @author     Javier Muñoz 
 * 
 * @property string $theme_name
 * @property string $version
 */
class PNT_Admin
{

    /**
     * El identificador único de éste plugin
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $theme_name  El nombre o identificador único de éste plugin
     */
    private $theme_name;

    /**
     * Versión actual del plugin
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version  La versión actual del plugin
     */
    private $version;

    /**
     * Objeto registrador de menús
     *
     * @since    1.0.0
     * @access   private
     * @var      object    $build_menupage  Instancia del objeto PNT_Build_Menupage
     */
    private $build_menupage;

    /**
     * Objeto PNT_Normalize
     *
     * @since    1.0.0
     * @access   private
     * @var      object    $normalize Instancia del objeto PNT_Normalize
     */
    private $normalize;

    /**
     * Objeto PNT_Helpers
     *
     * @since    1.0.0
     * @access   private
     * @var      object    $helpers Instancia del objeto PNT_Helpers
     */
    private $helpers;

    private $formBuilder;

    private $pnt;

    /**
     * @param string $theme_name nombre o identificador único de éste plugin.
     * @param string $version La versión actual del plugin.
     */
    public function __construct($theme_name, $version)
    {

        $this->theme_name       = $theme_name;
        $this->version          = $version;
        $this->build_menupage   = new PNT_Build_Menupage();
        $this->normalize        = new PNT_Normalize;
        $this->formBuilder      = new PNT_Form_Builder;
        $this->pnt              = get_option('pnt_config');
    }


    /**
     * Registra los archivos de hojas de estilos del área de administración
     *
     * @since    1.0.0
     * @access   public
     *
     * @param    string   $hook    Devuelve el texto del slug del menú con el texto toplevel_page
     */
    public function enqueue_styles($hook)
    {

        /**
         * Una instancia de esta clase debe pasar a la función run()
         * definido en PNT_Cargador como todos los ganchos se definen
         * en esa clase particular.
         *
         * El PNT_Cargador creará la relación
         * entre los ganchos definidos y las funciones definidas en este
         * clase.
         */

        /**
         * pnt-admin.css
         * Archivo de hojas de estilos principales
         * de la administración
         */
        wp_enqueue_style('pnt_wordpress_icons_css', PNT_DIR_URI . 'admin/css/pnt-wordpress.css', array(), $this->version, 'all');

        /**
         * Condicional para controlar la carga de los archivos
         * solamente en la página del plugin
         */
        if ($hook != 'toplevel_page_pnt-opt') {
            return;
        }

        /**
         * Framework Bootstrap
         */
        wp_enqueue_style('pnt_bootstrap_css', PNT_DIR_URI . 'helpers/bootstrap/css/bootstrap.min.css', array(), '4.6.0', 'all');
        
        /**
         * Bootstrap select 1.13.14
         */
        wp_enqueue_style('pnt_select_css', PNT_DIR_URI . 'helpers/bootstrap/extras/bootstrap-select/css/bootstrap-select.min.css', array(), '1.13.14', 'all');

        /**
         * Font Awesome 5.0.6
         */
        wp_enqueue_style('pnt_fontawesome_css', PNT_DIR_URI . 'helpers/fontawesome/css/fontawesome-all.min.css', array(), '5.0.6', 'all');

        /**
         * NoUiSlider 14.6.3
         */
        wp_enqueue_style('pnt_noUiSlider_css', PNT_DIR_URI . 'helpers/noUiSlider/css/nouislider.min.css', array(), '14.6.3', 'all');

        /**
         * Materialize 1.0
         */
        wp_enqueue_style('pnt_materialize_css', PNT_DIR_URI . 'helpers/materialize/css/materialize.min.css', array(), '1.0', 'all');
        wp_enqueue_style('pnt_colorpicker_css', PNT_DIR_URI . 'helpers/materialize/extras/colorpicker/colorpicker.min.css', array(), '1.0', 'all');

        /**
         * pnt-admin.css
         * Archivo de hojas de estilos principales
         * de la administración
         */
        wp_enqueue_style($this->theme_name, PNT_DIR_URI . 'admin/css/pnt-admin.css', array(), $this->version, 'all');
    }

    /**
     * Registra los archivos Javascript del área de administración
     *
     * @since    1.0.0
     * @access   public
     *
     * @param    string   $hook    Devuelve el texto del slug del menú con el texto toplevel_page
     */
    public function enqueue_scripts($hook)
    {

        /**
         * Una instancia de esta clase debe pasar a la función run()
         * definido en PNT_Cargador como todos los ganchos se definen
         * en esa clase particular.
         *
         * El PNT_Cargador creará la relación
         * entre los ganchos definidos y las funciones definidas en este
         * clase.
         */

        /**
         * Condicional para controlar la carga de los archivos
         * solamente en la página del plugin
         */
        if ($hook != 'toplevel_page_pnt-opt') {
            return;
        }

        wp_enqueue_media();

        /**
         * Framework Bootstrap 4.6.0
         * https://getbootstrap.com/docs/4.6/getting-started/download/
         */
        wp_enqueue_script('pnt_bootstrap_admin_js', PNT_DIR_URI . 'helpers/bootstrap/js/bootstrap.bundle.min.js', ['jquery'], '4.6.0', true);

        /**
         * Bootstrap select 1.13.14
         * https://developer.snapappointments.com/bootstrap-select/
         */
        wp_enqueue_script('pnt_select_admin_js', PNT_DIR_URI . 'helpers/bootstrap/extras/bootstrap-select/js/bootstrap-select.min.js', ['jquery'], '1.13.14', true);

        /**
         * NoUiSlider 14.6.3
         * https://refreshless.com/nouislider/
         */
        wp_enqueue_script('pnt_noUiSlider_admin_js', PNT_DIR_URI . 'helpers/noUiSlider/js/nouislider.min.js', ['jquery'], '14.6.3', true);

        /**
         * Materialize 1.0
         * https://materializecss.com/
         */
        wp_enqueue_script('pnt_materialize_admin_js', PNT_DIR_URI . 'helpers/materialize/js/materialize.min.js', ['jquery'], '1.0', true);
        wp_enqueue_script('pnt_colorpicker_admin_js', PNT_DIR_URI . 'helpers/materialize/extras/colorpicker/colorpicker.min.js', ['jquery'], '1.0', true);

        /**
         * Scripts globales         
         */
        wp_enqueue_script('pnt-global', PNT_DIR_URI . 'admin/js/pnt-global.js', ['jquery'], '1.0.0', true);

        /**
         * pnt-admin.js
         * Archivo Javascript principal
         * de la administración
         */
        wp_enqueue_script($this->theme_name, PNT_DIR_URI . 'admin/js/pnt-admin.js', ['jquery'], $this->version, true);

        /**
         * Localizando el archivo Javascript
         * principal del área de administración
         * para pasarle el objeto "bcpg" con los parámetros:
         * 
         * @param bcpg.url        Url del archivo admin-ajax.php
         * @param bcpg.seguridad  Nonce de seguridad para el envío seguro de datos
         */
        wp_localize_script(
            $this->theme_name,
            'pntAdmin',
            [
                'url'       => admin_url('admin-ajax.php'),
                'seguridad' => wp_create_nonce('pnt_seg')
            ]
        );
    }

    /**
     * Registra los menús del plugin en el
     * área de administración
     *
     * @since    1.0.0
     * @access   public
     */
    public function add_menu()
    {

        $this->build_menupage->add_menu_page(
            __('PNT Opciones', 'pnt-opt'),
            __('PNT Opciones', 'pnt-opt'),
            'manage_options',
            'pnt-opt',
            [$this, 'controlador_display_menu'],
            'dashicons-pnt',
            22
        );

        $this->build_menupage->run();
    }

    /**
     * Controla las visualizaciones del menú de opciones
     * en el área de administración
     *
     * @access   public
     */
    public function controlador_display_menu()
    {

        require_once PNT_DIR_PATH . 'admin/partials/pnt-admin-display.php';
    }

    public function get_googlefonts()
    {

        // delete_transient('pnt_googlefonts');

        $pnt_googlefonts =  get_transient('pnt_googlefonts');

        if (false === $pnt_googlefonts) {

            $APIKey = "AIzaSyDY_qXp0g_oscsPVDolF9S7iMWVsi05ig8";
            $url = "https://www.googleapis.com/webfonts/v1/webfonts?sort=popularity&fields=items(family,variants)&key=$APIKey";

            $response = wp_remote_get($url);
            $pnt_googlefonts_json = wp_remote_retrieve_body($response);

            $lista_googlefonts = json_decode($pnt_googlefonts_json, true);
            $lista_items = $lista_googlefonts['items'];

            $pnt_googlefonts = [];

            foreach ($lista_items as $l) {

                $variants = "";

                foreach ($l['variants'] as $k => $v) {

                    if ($k > 0) $variants .= ",";
                    if ($v == 'regular') $v = "400";
                    if ($v == 'italic') $v = "400i";

                    $variants .= str_replace('talic', '', $v);
                }

                $pnt_googlefonts[$l['family']] = [
                    'variants' => $variants
                ];
            }

            set_transient('pnt_googlefonts', $pnt_googlefonts, 3 * MONTH_IN_SECONDS);
        }

        return $pnt_googlefonts;

    }

    private function get_fontsystem() {
            
        return [
            'Arial'         => 'Arial',
            'Georgia'       => 'Georgia',
            'Taoma'         => 'Taoma',
            'Times'         => 'Times',
            'Trebuchet'     => 'Trebuchet',
            'Verdana'       => 'Verdana',
        ];
    }
}
