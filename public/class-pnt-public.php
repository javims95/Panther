<?php

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
class PNT_Public
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
    private $pnt;

    /**
     * @param string $theme_name nombre o identificador único de éste plugin.
     * @param string $version La versión actual del plugin.
     */
    public function __construct($theme_name, $version)
    {

        $this->theme_name   = $theme_name;
        $this->version      = $version;
        // $this->normalize = new PNT_Normalize;

        $this->pnt          = get_option('pnt_config');
    }

    /**
     * Registra los archivos de hojas de estilos del área de administración
     *
     * @since    1.0.0
     * @access   public
     */
    public function enqueue_styles()
    {

        /**
         * Framework Bootstrap
         * https://getbootstrap.com/docs/4.6/getting-started/download/
         */
        wp_enqueue_style('pnt_bootstrap_public_css', PNT_DIR_URI . 'helpers/bootstrap/css/bootstrap.min.css', array(), '4.6.0', 'all');

        /**
         * CSS
         */
        wp_enqueue_style('public_css_styles', PNT_DIR_URI . 'helpers/css/style.css', array(), '5.0.6', 'all');
        wp_enqueue_style('public_css_responsive', PNT_DIR_URI . 'helpers/css/responsive.css', array(), '5.0.6', 'all');
        wp_enqueue_style('public_css_colors1', PNT_DIR_URI . 'helpers/css/colors1.css', array(), '5.0.6', 'all');
        wp_enqueue_style('public_css_custom', PNT_DIR_URI . 'helpers/css/custom.css', array(), '5.0.6', 'all');

        wp_enqueue_style('public_css_wow', PNT_DIR_URI . 'helpers/css/animate.css', array(), '5.0.6', 'all');

        // revolution slider css
        wp_enqueue_style('public_css_revolution_settings', PNT_DIR_URI . 'helpers/revolution/css/settings.css', array(), '5.0.6', 'all');
        wp_enqueue_style('public_css_revolution_layers', PNT_DIR_URI . 'helpers/revolution/css/layers.css', array(), '5.0.6', 'all');
        wp_enqueue_style('public_css_revolution_navigation', PNT_DIR_URI . 'helpers/revolution/css/navigation.css', array(), '5.0.6', 'all');


        /**
         * Font Awesome 5.0.6
         */
        wp_enqueue_style('pnt_fontawesome_public_css', PNT_DIR_URI . 'helpers/fontawesome/css/fontawesome-all.min.css', array(), '5.0.6', 'all');

        wp_enqueue_style($this->theme_name, PNT_DIR_URI . 'public/css/pnt-public.css', array(), $this->version, 'all');
    }

    /**
     * Registra los archivos Javascript del área de administración
     *
     * @since    1.0.0
     * @access   public
     */
    public function enqueue_scripts()
    {

        /**
         * Framework Bootstrap
         * https://getbootstrap.com/docs/4.6/getting-started/download/
         */
        wp_enqueue_script('pnt_bootstrap_public_js', PNT_DIR_URI . 'helpers/bootstrap/js/bootstrap.bundle.min.js', ['jquery'], '4.6.0', true);
        wp_enqueue_script($this->theme_name, PNT_DIR_URI . 'public/js/pnt-public.js', array('jquery'), $this->version, true);

        wp_enqueue_script('pnt_menumaker_public_js', PNT_DIR_URI . 'helpers/js/menumaker.js', ['jquery'], '4.6.0', true);
        wp_enqueue_script('pnt_wow_public_js', PNT_DIR_URI . 'helpers/js/wow.js', ['jquery'], '4.6.0', true);
        wp_enqueue_script('pnt_custom_public_js', PNT_DIR_URI . 'helpers/js/custom.js', ['jquery'], '4.6.0', true);

        if (isset($this->pnt['header']['sticky'])) {

            wp_localize_script(
                $this->theme_name,
                'headerStiky',
                $this->pnt['header']['sticky']
            );
        }
    }

    public function get_instance_navwalker()
    {

        return new PNT_Nav_Walker;
    }

    public function print_others_style_head()
    {

        extract($this->pnt, EXTR_PREFIX_ALL, 'pnt');

        $outputStyle = "
        <!-- Otros estilos de configuración -->
        <style>
        ";

        $outputStyle .= $pnt_global['body'] == 'box' ? '#body{width: 100%; max-width: 1240px; margin: 0 auto;}' : '';

        if (isset($pnt_menu['options']['show-border'])) {

            $outputStyle .= "
                #navbar_menu ul li a {
                    border-right: 1px solid #000;
                }                            
                #navbar_menu ul li:last-child a {
                    border-right: 0px;
                }                            
            ";
        }

        $outputStyle .= '</style>';
        echo $outputStyle;
    }

    public function print_style_colors_head () {

        extract( $this->pnt, EXTR_PREFIX_ALL, 'pnt');

        $outputStyle = "
        <!-- Estilos de colores del tema -->
        <style>

        /* Colores del contenido */

            a {
                color: {$pnt_colors['content']['colorLink']};
            }
            a:hover {
                color: {$pnt_colors['content']['colorLinkHover']};
            }
            a.btn.main_bt {
                background-color: {$pnt_colors['content']['bgButton']};
                color: {$pnt_colors['content']['textColorButton']};
            }
            a.btn.main_bt:hover {
                background-color: {$pnt_colors['content']['bgHoverBoton']};
                color: {$pnt_colors['content']['textColorButtonHover']};
            }

            /* Colores de los encabezados */

            h1 {
                color: {$pnt_colors['h1']};
            }
            h2 {
                color: {$pnt_colors['h2']};
            }
            h3 {
                color: {$pnt_colors['h3']};
            }
            h4 {
                color: {$pnt_colors['h4']};
            }
            h5 {
                color: {$pnt_colors['h5']};
            }
            h6 {
                color: {$pnt_colors['h6']};
            }

            /* Colores del menú */

            .header_bottom {
                background-color: {$pnt_colors['menu']['bg']};
            }
            .header_bottom ul li a {
                color: {$pnt_colors['menu']['link']};
            }
            .header_bottom ul li a.current-menu-item {
                color: {$pnt_colors['menu']['activeLink']};
                background-color: {$pnt_colors['menu']['bgActiveLink']};
            }
            .header_bottom ul li a:hover {
                color: {$pnt_colors['menu']['hoverLink']};
                background-color: {$pnt_colors['menu']['bgHoverLink']};
            }
            
            /* Colores footer */
            
            footer h2 {
                color: {$pnt_colors['footer']['h2']};
            }
            footer p, .footer-menu li a, footer p a  {
                color: {$pnt_colors['footer']['text']};
            }
            .footer_blog {
                background-color: {$pnt_colors['footer']['bgFooter']};
            }
            .cprt {
                background-color: {$pnt_colors['footer']['bgCopyright']};
            }
        ";

        $outputStyle .= "</style>";
        echo $outputStyle;
    }

    public function print_fonts_style()
    {

        extract($this->pnt, EXTR_PREFIX_ALL, 'pnt');

        $outputStyle = "
            <!-- Estilos fuentes del tema -->
            <style>

                html {
                    {$this->get_font_style($pnt_fonts, 'contentFont')};
                }

                #navbar_menu>ul>li>a {
                    {$this->get_font_style($pnt_fonts, 'menu')};
                }

                h1, h2, h3, h4 {
                    {$this->get_font_style($pnt_fonts, 'headerPrimary')};
                }
                
                h5, h6 {
                    {$this->get_font_style($pnt_fonts, 'headerSecondary')};
                }

                h1 {
                    {$this->get_font_style($pnt_fonts, 'h1')};
                }
                
                h2 {
                    {$this->get_font_style($pnt_fonts, 'h2')};
                }

                h3 {
                    {$this->get_font_style($pnt_fonts, 'h3')};
                }

                h4 {
                    {$this->get_font_style($pnt_fonts, 'h4')};
                }

                h5 {
                    {$this->get_font_style($pnt_fonts, 'h5')};
                }

                h6 {
                    {$this->get_font_style($pnt_fonts, 'h6')};
                }


            </style>
        ";

        echo $outputStyle;
    }

    public function get_font_style($fuentes, $tipo)
    {

        $tipo_font = $fuentes[$tipo];

        $outputFontStyle = "";

        if ($tipo != 'headerPrimary' && $tipo != 'headerSecondary') {

            
            if (isset($tipo_font['family']) && ! empty($tipo_font['family'])) {

                if( $tipo_font['family'] !== 'default'){
                                        
                    $outputFontStyle .= "font-family: '" . str_replace('+', ' ', $tipo_font['family']) . "', serif;";
                }
            }
            
            $outputFontStyle .= "
            font-size: {$tipo_font['size']}px;
            line-height: {$tipo_font['lineHeight']}px;
            letter-spacing: {$tipo_font['letterSpacing']}px;
            ";
            
        } else {
            
            if( isset( $tipo_font['family']) && ! empty($tipo_font['family'])) {

                if( $tipo_font['family'] !== 'default'){
                                        
                    $outputFontStyle .= "font-family: '" . str_replace('+', ' ', $tipo_font['family']) . "', serif;";
                }
            }
        }

        if( isset( $tipo_font['weight'])) {

            if( array_key_exists( 'fontType', $tipo_font)) {

                if( $tipo_font['fontType'] == 'system') {

                    $weightStyle = explode( ',', $tipo_font['weight']);

                    $outputFontStyle .= "
                        font-style: {$weightStyle[1]};
                        font-weight: {$weightStyle[0]};
                    ";

                } elseif ( $tipo_font['fontType'] == 'googlefonts' ) {

                    $outputFontStyle .= stristr( $tipo_font['weight'], 'i') !== false ? 'font-style: italic' : 'font-style: normal';
                    $outputFontStyle .= "font-weight: " . str_replace( 'i', '', $tipo_font['weight']) . ";";
                }

            } else {

                $outputFontStyle .= stristr( $tipo_font['weight'], 'i') !== false ? 'font-style: italic' : 'font-style: normal';
                $outputFontStyle .= "font-weight: " . str_replace( 'i', '', $tipo_font['weight']) . ";";
            }
        }

        return $outputFontStyle;
    }

    public function have_googlefonts()
    {

        foreach ($this->pnt['fonts'] as $val) {

            if (array_key_exists('fontType', $val)) {

                if ($val['fontType'] == 'googlefonts') return true;
            }
        }

        return false;
    }

    public function get_google_fonts_enqueue()
    {

        $urlGoogleFonts = "https://fonts.googleapis.com/css?family=";

        $families = [];

        // Nuevos valores de las fuentes
        foreach ($this->pnt['fonts'] as $elem => $val) {

            if (array_key_exists('family', $val)) {

                if ($val['fontType'] == 'googlefonts') {

                    if (array_key_exists('variants', $val)) {

                        $families[] = [
                            'family'    => $val['family'],
                            'variants'  => is_array($val['variants']) ? $val['variants'] : explode(',', $val['variants'])
                        ];
                    } else {

                        $families[] = [
                            'family'    => $val['family']
                        ];
                    }
                }
            }
        }

        // Combinando las fuentes repetidas y sus variantes
        $famFinal = [];

        foreach ($families as $family) {


            if (!array_key_exists($family['family'], $famFinal)) {

                if (isset($family['variants'])) {
                    $famFinal[$family['family']] = $family['variants'];
                } else {
                    $famFinal[$family['family']] = [];
                }
            } else {

                if (isset($family['variants'])) {
                    $famFinal[$family['family']] = array_unique(array_merge($famFinal[$family['family']], $family['variants']));
                }
            }
        }

        foreach ($famFinal as $k => $v) {
            sort($famFinal[$k]);
        }

        ksort($famFinal);

        $output_googlefonts = "";
        $c = 0;
        $fontCount = count($famFinal);

        foreach ($famFinal as $family => $variants) {

            $c++;

            if (!empty($variants)) {

                $output_googlefonts .= "$family:" . join(',', $variants);
            } else {

                $output_googlefonts .= $family;
            }

            $output_googlefonts .= $fontCount != $c ? "|" : "";
        }

        return $urlGoogleFonts . $output_googlefonts;
    }

    public function custom_css() {

        echo "
            <s>
                {$this->pnt['custom']['css']}
            </style>
        ";
    }

    public function custom_js() {

        echo "
            <script>
                " . stripslashes($this->pnt['custom']['js']) ."
            </script>
        ";
    }
}
