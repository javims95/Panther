<?php

/**
 * La funcionalidad específica de administración del plugin.
 *
 * @link       https://beziercode.com.co
 * @since      1.0.0
 *
 * @package    theme_name
 * @subpackage theme_name/admin
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
class PANTHER_Public {
    
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
        $this->normalize = new PANTHER_Normalize;
        
    }
    
    /**
	 * Registra los archivos de hojas de estilos del área de administración
	 *
	 * @since    1.0.0
     * @access   public
	 */
    public function enqueue_styles() {
                
    /**
     * Framework Materialize CSS
     * https://materializecss.com/getting-started.html
     * Material Icons Google
     * https://material.io/resources/icons/ 
     */	
    wp_enqueue_style( 'panther_material_icons', 'https://fonts.googleapis.com/icon?family=Material+Icons' , array(), $this->version, 'all' );

    /**
     * Font Awesome 5.0.6
     */
    wp_enqueue_style( 'panther_fontawesome_css', PANTHER_DIR_URI.'helpers/fontawesome/css/fontawesome-all.min.css' , array(), '5.0.6', 'all' );
    wp_enqueue_style( 'panther_materialize_public_css', PANTHER_DIR_URI.'helpers/materialize/css/materialize.min.css' , array(), '1.0.0-rc.1', 'all' );
    wp_enqueue_style( $this->theme_name, PANTHER_DIR_URI . 'public/css/panther-public.css', array(), $this->version, 'all' );
        
    }    
    
    /**
	 * Registra los archivos Javascript del área de administración
	 *
	 * @since    1.0.0
     * @access   public
	 */
    public function enqueue_scripts() {
        
        /**
         * Framework Materialize CSS
         * https://materializecss.com/getting-started.html
         * Material Icons Google
         */	               
        wp_enqueue_script( 'panther_materialize_public_js', PANTHER_DIR_URI . 'helpers/materialize/js/materialize.min.js', ['jquery'], '1.0.0-rc.1', true );
        wp_enqueue_script( $this->theme_name, PANTHER_DIR_URI . 'public/js/panther-public.js', array( 'jquery' ), $this->version, true );
        
    }
    
}









