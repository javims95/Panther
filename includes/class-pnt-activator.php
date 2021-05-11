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
                    "style"     => "logoLeft"
                ],

                "menu"      => [
                    "options"        => [ "show-border" => "show-border" ],
                    "address"        => "Calle Marqués de Larios 25, 29003, Málaga",
                    "mail"           => "info@panther.es",
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
                    "h1"            => "#f00",
                    "h2"            => "rgba(0,0,0,0.87)",
                    "h3"            => "rgba(0,0,0,0.87)",
                    "h4"            => "rgba(0,0,0,0.87)",
                    "h5"            => "rgba(0,0,0,0.87)",
                    "h6"            => "rgba(0,0,0,0.87)",
                    "menu"          => [
                        "bg"                    => "rgba(0,0,0,0.87)",
                        "link"                  => "rgba(0,0,0,0.87)",
                        "activeLink"            => "rgba(0,0,0,0.87)",
                        "bgActiveLink"          => "rgba(0,0,0,0.87)",
                        "hoverLink"             => "rgba(0,0,0,0.87)",
                        "bgHoverLink"           => "rgba(0,0,0,0.87)",
                    ],
                    "content"     => [
                        "bgButton"              => "rgba(0,0,0,0.87)",
                        "bgHoverBoton"          => "rgba(0,0,0,0.87)",
                        "colorLink"             => "rgba(0,0,0,0.87)",
                        "colorLinkHover"        => "rgba(0,0,0,0.87)",
                        "textColorButton"       => "rgba(0,0,0,0.87)",
                        "textColorButtonHover"  => "rgba(0,0,0,0.87)"
                    ],
                    'footer'        => [
                        "bgFooter"              => "rgba(0,0,0,0.87)",
                        "bgCopyright"           => "rgba(0,0,0,0.87)"
                    ]
                ],

                "fonts"       => [
                    "menu"          => [
                        "family"                => "Lato",
                        "size"                  => "14",
                        "weight"                => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                        "fontType"              => "googlefonts",
                        "variants"              => "100,100i,300,400,700,700i"
                    ],
                    "contentFont"     => [
                        "family"                => "Roboto",
                        "size"                  => "14",
                        "weight"                => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                        "fontType"              => "googlefonts",
                        "variants"              => "300,400i,700"
                    ],
                    "headerPrimary"   => [
                        "family"                => "Roboto",
                        "fontType"              => "googlefonts",
                        "variants"              => "300,300i,500,500i,700,900i"
                    ],
                    "headerSecondary"   => [
                        "family"                => "Lato",
                        "fontType"              => "googlefonts",
                        "variants"              => "100i,300,400,700,700i,900,900i"
                    ],
                    "h1"            => [
                        "size"                  => "14",
                        "weight"                => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],
                    "h2"            => [
                        "size"                  => "14",
                        "weight"                => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],
                    "h3"            => [
                        "size"                  => "14",
                        "weight"                => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],
                    "h4"            => [
                        "size"                  => "14",
                        "weight"                => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],
                    "h5"            => [
                        "size"                  => "14",
                        "weight"                => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],
                    "h6"            => [
                        "size"                  => "14",
                        "weight"                => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],

                ],

                "social"        => [
                    "facebook"      => "",
                    "twitter"       => "",
                    "instagram"     => "",
                    "youtube"       => "",
                    "googleplus"    => "",
                    "linkedin"      => "",
                ],

                "custom"         => [
                    "css"           => "",
                    "js"            => ""
                ]

            ];

            add_option('pnt_config', $pnt);
        }
    }
}