<?php

class PNT_Activator {
    
    public static function activate() {
        
        $pnt = get_option( 'pnt_config' );
        
        if( ! $pnt ) {
            
            $pnt = [
                
                "menuActivado"  => "global",

                "global"        => [
                    "body"        => "fullwidth",
                    "logoUrl"       => "",
                    "textLogo"      => "",
                    "faviconUrl"    => "",
                    "apiGMaps"      => "",
                ],

                "header"    => [
                    "style"     => "default"
                ],

                "menu"      => [
                    "options"      => [ "show-border" => "show-border" ]
                ],

                "footer"        => [
                    "copyright"     => sprintf(
                            __( "Copyright © 2020-%d | Todos los derechos reservados | Jamusa.es", "pnt-opt" ),
                            date('Y')
                        ),
                    "position"  => "center"
                ],

                "sidebars"      => [
                    "width"         => "20"
                ],

                "colors"       => [
                    "h1"            => "rgba(0,0,0,0.87)",
                    "h2"            => "rgba(0,0,0,0.87)",
                    "h3"            => "rgba(0,0,0,0.87)",
                    "h4"            => "rgba(0,0,0,0.87)",
                    "h5"            => "rgba(0,0,0,0.87)",
                    "h6"            => "rgba(0,0,0,0.87)",
                    "menu"          => [
                        "ativoColorEnlace"      => "rgba(0,0,0,0.87)",
                        "bg"                    => "rgba(0,0,0,0.87)",
                        "bgActivoColorEnlace"   => "rgba(0,0,0,0.87)",
                        "bgHoverColorEnlace"    => "rgba(0,0,0,0.87)",
                        "colorEnlace"           => "rgba(0,0,0,0.87)",
                        "hoverColorEnlace"      => "rgba(0,0,0,0.87)",
                    ],
                    "contenido"     => [
                        "bgBoton"               => "rgba(0,0,0,0.87)",
                        "bgHoverBoton"          => "rgba(0,0,0,0.87)",
                        "colorEnlace"           => "rgba(0,0,0,0.87)",
                        "colorHoverTextoBoton"  => "rgba(0,0,0,0.87)",
                        "colorTextoBoton"       => "rgba(0,0,0,0.87)",
                        "hoverColorEnlace"      => "rgba(0,0,0,0.87)"
                    ],
                    'footer'        => [
                        "bg"                    => "rgba(0,0,0,0.87)",
                        "copyrightBg"           => "rgba(0,0,0,0.87)"
                    ]
                ],

                "fuentes"       => [
                    "menu"          => [
                        "family"                => "Lato",
                        "tamano"                => "14",
                        "weightStyle"           => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                        "fontType"              => "googlefonts",
                        "variants"              => "100,100i,300,400,700,700i"
                    ],
                    "contenido"     => [
                        "family"                => "Roboto",
                        "tamano"                => "14",
                        "weightStyle"           => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                        "fontType"              => "googlefonts",
                        "variants"              => "300,400i,700"
                    ],
                    "cabeceras-p"   => [
                        "family"                => "Roboto",
                        "fontType"              => "googlefonts",
                        "variants"              => "300,300i,500,500i,700,900i"
                    ],
                    "cabeceras-s"   => [
                        "family"                => "Lato",
                        "fontType"              => "googlefonts",
                        "variants"              => "100i,300,400,700,700i,900,900i"
                    ],
                    "h1"            => [
                        "tamano"                => "14",
                        "weightStyle"           => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],
                    "h2"            => [
                        "tamano"                => "14",
                        "weightStyle"           => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],
                    "h3"            => [
                        "tamano"                => "14",
                        "weightStyle"           => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],
                    "h4"            => [
                        "tamano"                => "14",
                        "weightStyle"           => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],
                    "h5"            => [
                        "tamano"                => "14",
                        "weightStyle"           => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],
                    "h6"            => [
                        "tamano"                => "14",
                        "weightStyle"           => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],

                ],

                "social"        => [
                    "behance"       => "",
                    "facebook"      => "",
                    "googleplus"    => "",
                    "instagram"     => "",
                    "linkedin"      => "",
                    "twitter"       => "",
                    "vimeo"         => "",
                    "youtube"       => ""
                ],

                "cssjs"         => [
                    "css"           => "",
                    "js"            => ""
                ]

            ];

            add_option('pnt_config', $pnt);
        }
    }
}