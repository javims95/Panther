<?php

/**
 * Define la funcionalidad de internacionalización
 *
 * Carga y define los archivos de internacionalización de este plugin para que esté listo para su traducción.
 *
 * @link       https://beziercode.com.co
 * @since      1.0.0
 *
 */

/**
 * Ésta clase define todo lo necesario durante la activación del plugin
 *
 * @since      1.0.0
 * @author     Javier Muñoz 
 */
class PNT_i18n {
    
    /**
	 * Carga el dominio de texto (textdomain) del plugin para la traducción.
	 *
     * @since    1.0.0
     * @access public static
	 */    
    public function load_theme_textdomain() {
        
        $textdomain = "pnt-opt";
        
        load_theme_textdomain(
            $textdomain,
            false,
            PNT_DIR_PATH . 'lang'
        );
        
        $locale = apply_filters( 'theme_locale', is_admin() ? get_user_locale() : get_locale(), $textdomain );
        
        load_textdomain( $textdomain, get_theme_file_path( "lang/$textdomain-$locale.mo" ) );
        
    }

    function load_plugin_textdomain( $domain, $deprecated = false, $plugin_rel_path = false ) {
        /**
         * Filters a plugin's locale.
         *
         * @since 3.0.0
         *
         * @param string $locale The plugin's current locale.
         * @param string $domain Text domain. Unique identifier for retrieving translated strings.
         */
        $locale = apply_filters( 'plugin_locale', determine_locale(), $domain );
     
        $mofile = $domain . '-' . $locale . '.mo';
     
        // Try to load from the languages directory first.
        if ( load_textdomain( $domain, WP_LANG_DIR . '/plugins/' . $mofile ) ) {
            return true;
        }
     
        if ( false !== $plugin_rel_path ) {
            $path = WP_PLUGIN_DIR . '/' . trim( $plugin_rel_path, '/' );
        } elseif ( false !== $deprecated ) {
            _deprecated_argument( __FUNCTION__, '2.7.0' );
            $path = ABSPATH . trim( $deprecated, '/' );
        } else {
            $path = WP_PLUGIN_DIR;
        }
     
        return load_textdomain( $domain, $path . '/' . $mofile );
    }
    
}