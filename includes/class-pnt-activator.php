<?php

class PNT_Activator {
    
    public static function activate() {
        
        $pnt = get_option( 'pnt_config' );
        
        if( ! $pnt ) {
            
            $pnt = [
                
                "menuActivado"  => "global",

                "global"        => [
                    "body"              => "fullwidth",
                    "logoUrl"           => "",
                    "textLogo"          => "",
                    "faviconUrl"        => "",
                    "urlGoogleMaps"     => "",
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
                    "copyright"     => '',
                    "phone"  => ""
                ],

                "sidebars"      => [
                    "width"         => "20"
                ],

                "colors"       => [
                    "h1"            => "#000000",
                    "h2"            => "#000000",
                    "h3"            => "#000000",
                    "h4"            => "#000000",
                    "h5"            => "#000000",
                    "h6"            => "#000000",
                    "menu"          => [
                        "bg"                    => "#ffffff",
                        "link"                  => "#000000",
                        "activeLink"            => "#039ee3",
                        "bgActiveLink"          => "#ffffff",
                        "hoverLink"             => "#039ee3",
                        "bgHoverLink"           => "#ffffff",
                    ],
                    "content"     => [
                        "bgButton"              => "#17a5e9",
                        "bgHoverBoton"          => "#25d8ed",
                        "colorLink"             => "#000000",
                        "colorLinkHover"        => "#039ee3",
                        "textColorButton"       => "#ffffff",
                        "textColorButtonHover"  => "#ffffff"
                    ],
                    'footer'        => [
                        "h2"                    => "#ffffff",
                        "text"                  => "#666666",
                        "bgFooter"              => "#111111",
                        "bgCopyright"           => "#039ee3"
                    ]
                ],

                "fonts"       => [
                    "menu"          => [
                        "family"                => "",
                        "size"                  => "",
                        "weight"                => "",
                        "lineHeight"            => "",
                        "letterSpacing"         => "",
                        "fontType"              => "",
                        "variants"              => ""
                    ],
                    "contentFont"     => [
                        "family"                => "",
                        "size"                  => "",
                        "weight"                => "",
                        "lineHeight"            => "",
                        "letterSpacing"         => "",
                        "fontType"              => "",
                        "variants"              => ""
                    ],
                    "headerPrimary"   => [
                        "family"                => "",
                        "fontType"              => "",
                        "variants"              => ""
                    ],
                    "headerSecondary"   => [
                        "family"                => "",
                        "fontType"              => "",
                        "variants"              => ""
                    ],
                    "h1"            => [
                        "size"                  => "",
                        "weight"                => "",
                        "lineHeight"            => "",
                        "letterSpacing"         => "",
                    ],
                    "h2"            => [
                        "size"                  => "",
                        "weight"                => "",
                        "lineHeight"            => "",
                        "letterSpacing"         => "",
                    ],
                    "h3"            => [
                        "size"                  => "",
                        "weight"                => "",
                        "lineHeight"            => "",
                        "letterSpacing"         => "",
                    ],
                    "h4"            => [
                        "size"                  => "",
                        "weight"                => "",
                        "lineHeight"            => "",
                        "letterSpacing"         => "",
                    ],
                    "h5"            => [
                        "size"                  => "",
                        "weight"                => "",
                        "lineHeight"            => "",
                        "letterSpacing"         => "",
                    ],
                    "h6"            => [
                        "size"                  => "",
                        "weight"                => "",
                        "lineHeight"            => "",
                        "letterSpacing"         => "",
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