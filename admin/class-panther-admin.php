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
class PANTHER_Admin {
    
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
	 * @var      object    $build_menupage  Instancia del objeto PANTHER_Build_Menupage
	 */
    private $build_menupage;
    
    /**
	 * Objeto PANTHER_Normalize
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      object    $normalize Instancia del objeto PANTHER_Normalize
	 */
    private $normalize;
    
    /**
	 * Objeto PANTHER_Helpers
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      object    $helpers Instancia del objeto PANTHER_Helpers
	 */
    private $helpers;
    
    /**
     * @param string $theme_name nombre o identificador único de éste plugin.
     * @param string $version La versión actual del plugin.
     */
    public function __construct( $theme_name, $version ) {
        
        $this->theme_name = $theme_name;
        $this->version = $version;
        $this->build_menupage = new PANTHER_Build_Menupage();
        $this->normalize = new PANTHER_Normalize;
        
    }
    
    /**
	 * Registra los archivos de hojas de estilos del área de administración
	 *
	 * @since    1.0.0
     * @access   public
     *
     * @param    string   $hook    Devuelve el texto del slug del menú con el texto toplevel_page
	 */
    public function enqueue_styles( $hook ) {
        
        /**
         * Una instancia de esta clase debe pasar a la función run()
         * definido en PANTHER_Cargador como todos los ganchos se definen
         * en esa clase particular.
         *
         * El PANTHER_Cargador creará la relación
         * entre los ganchos definidos y las funciones definidas en este
         * clase.
		 */
        
        /**
         * panther-admin.css
         * Archivo de hojas de estilos principales
         * de la administración
         */
		wp_enqueue_style( 'panther_wordpress_icons_css', PANTHER_DIR_URI . 'admin/css/panther-wordpress.css', array(), $this->version, 'all' );
        
        /**
         * Condicional para controlar la carga de los archivos
         * solamente en la página del plugin
         */
        if( $hook != 'toplevel_page_panther-opt' ) {
            return;
        }

        /**
         * Framework Bootstrap
         * https://getbootstrap.com/docs/4.6/getting-started/download/
         */	
        wp_enqueue_style( 'panther_bootstrap_css', PANTHER_DIR_URI.'helpers/bootstrap/css/bootstrap.min.css' , array(), '4.6.0', 'all' );
        
        /**
         * Font Awesome 5.0.6
         */
        wp_enqueue_style( 'panther_fontawesome_css', PANTHER_DIR_URI.'helpers/fontawesome/css/fontawesome-all.min.css' , array(), '5.0.6', 'all' );
        
        /**
         * Material-Icons
         */
        wp_enqueue_style( 'panther_material_icons', PANTHER_DIR_URI. 'helpers/material-icons/css/material-icons.css' , array(), $this->version, 'all' );

        /**
         * panther-admin.css
         * Archivo de hojas de estilos principales
         * de la administración
         */		
		wp_enqueue_style( $this->theme_name, PANTHER_DIR_URI . 'admin/css/panther-admin.css', array(), $this->version, 'all' );
        
    }
    
    /**
	 * Registra los archivos Javascript del área de administración
	 *
	 * @since    1.0.0
     * @access   public
     *
     * @param    string   $hook    Devuelve el texto del slug del menú con el texto toplevel_page
	 */
    public function enqueue_scripts( $hook ) {
        
        /**
         * Una instancia de esta clase debe pasar a la función run()
         * definido en PANTHER_Cargador como todos los ganchos se definen
         * en esa clase particular.
         *
         * El PANTHER_Cargador creará la relación
         * entre los ganchos definidos y las funciones definidas en este
         * clase.
		 */
        
        /**
         * Condicional para controlar la carga de los archivos
         * solamente en la página del plugin
         */
        if( $hook != 'toplevel_page_panther-opt' ) {
            return;
        }
        
        wp_enqueue_media();

        /**
         * Framework Bootstrap
         * https://getbootstrap.com/docs/4.6/getting-started/download/
         */	               
        wp_enqueue_script( 'panther_bootstrap_admin_js', PANTHER_DIR_URI . 'helpers/bootstrap/js/bootstrap.bundle.min.js', ['jquery'], '4.6.0', true );
        
        /**
         * Scripts globales         
         */
        wp_enqueue_script( 'panther-global', PANTHER_DIR_URI . 'admin/js/panther-global.js', [ 'jquery' ], '1.0.0', true );

        /**
         * panther-admin.js
         * Archivo Javascript principal
         * de la administración
         */
        wp_enqueue_script( $this->theme_name, PANTHER_DIR_URI . 'admin/js/panther-admin.js', [ 'jquery' ], $this->version, true );
        
        /**
         * Lozalizando el archivo Javascript
         * principal del área de administración
         * para pasarle el objeto "bcpg" con los parámetros:
         * 
         * @param bcpg.url        Url del archivo admin-ajax.php
         * @param bcpg.seguridad  Nonce de seguridad para el envío seguro de datos
         */
        wp_localize_script(
            $this->theme_name,
            'pantherAdmin',
            [
                'url'       => admin_url( 'admin-ajax.php' ),
                'seguridad' => wp_create_nonce( 'panther_seg' )
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
    public function add_menu() {
        
        $this->build_menupage->add_menu_page(
            __( 'Panther Opciones', 'panther-opt' ),
            __( 'Panther Opciones', 'panther-opt' ),
            'manage_options',
            'panther-opt',
            [ $this, 'controlador_display_menu' ],
            'dashicons-panther',
            22
        );
        
        $this->build_menupage->run();
        
    }
    
    /**
	 * Controla las visualizaciones del menú
     * en el área de administración
	 *
	 * @since    1.0.0
     * @access   public
	 */
    public function controlador_display_menu() {
        
        require_once PANTHER_DIR_PATH . 'admin/partials/panther-admin-display.php';
        
    }
    
}




















