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
class PNT_Public {
    
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
    
    /**
     * @param string $theme_name nombre o identificador único de éste plugin.
     * @param string $version La versión actual del plugin.
     */
    public function __construct( $theme_name, $version ) {
        
        $this->theme_name = $theme_name;
        $this->version = $version;
        $this->normalize = new PNT_Normalize;
        
    }
    
    /**
	 * Registra los archivos de hojas de estilos del área de administración
	 *
	 * @since    1.0.0
     * @access   public
	 */
    public function enqueue_styles() {
                
    /**
     * Framework Bootstrap
     * https://getbootstrap.com/docs/4.6/getting-started/download/
     */		
    wp_enqueue_style( 'pnt_bootstrap_public_css', PNT_DIR_URI. 'helpers/bootstrap/css/bootstrap.min.css' , array(), '4.6.0', 'all' );

    /**
     * Font Awesome 5.0.6
     */
    wp_enqueue_style( 'pnt_fontawesome_public_css', PNT_DIR_URI.'helpers/fontawesome/css/fontawesome-all.min.css' , array(), '5.0.6', 'all' );
    wp_enqueue_style( $this->theme_name, PNT_DIR_URI . 'public/css/pnt-public.css', array(), $this->version, 'all' );
        
    }    
    
    /**
	 * Registra los archivos Javascript del área de administración
	 *
	 * @since    1.0.0
     * @access   public
	 */
    public function enqueue_scripts() {
        
        /**
         * Framework Bootstrap
         * https://getbootstrap.com/docs/4.6/getting-started/download/
         */	               
        wp_enqueue_script( 'pnt_bootstrap_public_js', PNT_DIR_URI . 'helpers/bootstrap/js/bootstrap.bundle.min.js', ['jquery'], '4.6.0', true );
        wp_enqueue_script( $this->theme_name, PNT_DIR_URI . 'public/js/pnt-public.js', array( 'jquery' ), $this->version, true );
        
    }
    
}








