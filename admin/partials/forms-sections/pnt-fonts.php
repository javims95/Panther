<?php

// Option Group (agrupaciones para el select)
$optGroupsFont = [
    'system'    => [
            'title'     => 'Fuentes del sitema',
            'opts'      => $this->get_fontsystem()
    ],
    'googlefonts' => [
            'title'     => 'Fuentes de Google',
            'opts'      => $this->get_googlefonts()
    ],
];

// Opciones para select múltiple
$optionsSizeStyle = [
    'size'   => [
        'type'       => 'number',
        'title'      => 'Tamaño de la fuente'
    ],
    'weight'   => [
        'type'       => 'select',
        'title'      => 'Peso de la fuente'
    ],
    'lineHeight' => [
        'type'       => 'number',
        'title'      => 'Altura de línea'
    ],
    'letterSpacing'=> [
        'type'       => 'number',
        'title'      => 'Espaciado de las letras'
    ]
];

$elemsSectFontsAlert = [
    'alert'     => [
        'type'                  => 'alertDismissible',
        'title'                 => '',
        'value'                 => '',
        'alertTitle'            => 'Aviso',
        'alertClassColor'       => 'warning',
        'alertContent'          => 'Para un rendimiento óptimo recomendamos seleccionar solo las 
                                    variaciones de las fuentes que desee utilizar en la web.',
    ]
];

$elemsSectFonts = [
    'menu' => [
        'ids'           => 'family',
        'type'          => 'select',
        'title'         => 'Menú',
        'customClass'   => 'pnt-options-fonts',
        'value'         => $pnt_fonts['menu']['family'],
        'options'  => [
            'type'          => 'font',
            'fontType'      => $pnt_fonts['menu']['fontType'],
            'optgroup'      => $optGroupsFont,
            'variants'      => [
                'googlefonts'   => $this->get_googlefonts(),
                'selection'     => isset($pnt_fonts['menu']['variants']) ? $pnt_fonts['menu']['variants'] : ''
            ]
        ]
    ],
    'contentFont' => [
        'ids'           => 'family',
        'type'          => 'select',
        'title'         => 'Contenido',
        'customClass'   => 'pnt-options-fonts',
        'value'         => $pnt_fonts['contentFont']['family'],
        'options'  => [
            'type'          => 'font',
            'fontType'      => $pnt_fonts['contentFont']['fontType'],
            'optgroup'      => $optGroupsFont,
            'variants'      => [
                'googlefonts'   => $this->get_googlefonts(),
                'selection'     => isset($pnt_fonts['contentFont']['variants']) ? $pnt_fonts['contentFont']['variants'] : ''
            ]
        ]
    ],
    'headerPrimary' => [
        'ids'           => 'family',
        'type'          => 'select',
        'title'         => 'Cabeceras principales (H1, H2, H3)',
        'customClass'   => 'pnt-options-fonts',
        'value'         => $pnt_fonts['headerPrimary']['family'],
        'options'  => [
            'type'          => 'font',
            'fontType'      => $pnt_fonts['headerPrimary']['fontType'],
            'optgroup'      => $optGroupsFont,
            'variants'      => [
                'googlefonts'   => $this->get_googlefonts(),
                'selection'     => isset($pnt_fonts['headerPrimary']['variants']) ? $pnt_fonts['headerPrimary']['variants'] : ''
            ]
        ]
    ],
    'headerSecondary' => [
        'ids'           => 'family',
        'type'          => 'select',
        'title'         => 'Cabeceras secundarias (H4, H5, H6)',
        'customClass'   => 'pnt-options-fonts',
        'value'         => $pnt_fonts['headerSecondary']['family'],
        'options'  => [
            'type'          => 'font',
            'fontType'      => $pnt_fonts['headerSecondary']['fontType'],
            'optgroup'      => $optGroupsFont,
            'variants'      => [
                'googlefonts'   => $this->get_googlefonts(),
                'selection'     => isset($pnt_fonts['headerSecondary']['variants']) ? $pnt_fonts['headerSecondary']['variants'] : ''
            ]
        ]
    ],
];

$elemsSectSizeStyle = [
    'h1'    => [ // idElem
            'type'     => 'multi', // idOpt
            'title'     => 'H1',
            'value'      => $pnt_fonts,
            'options'      => $optionsSizeStyle
    ],    
    'h2'    => [
            'type'     => 'multi',
            'title'     => 'H2',
            'value'      => $pnt_fonts,
            'options'      => $optionsSizeStyle
    ],    
    'h3'    => [
            'type'     => 'multi',
            'title'     => 'H3',
            'value'      => $pnt_fonts,
            'options'      => $optionsSizeStyle
    ],    
    'h4'    => [
            'type'     => 'multi',
            'title'     => 'H4',
            'value'      => $pnt_fonts,
            'options'      => $optionsSizeStyle
    ],    
    'h5'    => [
            'type'     => 'multi',
            'title'     => 'H5',
            'value'      => $pnt_fonts,
            'options'      => $optionsSizeStyle
    ],    
    'h6'    => [
            'type'     => 'multi',
            'title'     => 'H6',
            'value'      => $pnt_fonts,
            'options'      => $optionsSizeStyle
    ],    
    'contentFont'    => [
            'type'     => 'multi',
            'title'     => 'Contenido',
            'value'      => $pnt_fonts,
            'options'      => $optionsSizeStyle
    ],    
    'menu'    => [
            'type'     => 'multi',
            'title'     => 'Menú',
            'value'      => $pnt_fonts,
            'options'      => $optionsSizeStyle
    ],    
];

$fontSections = [
    'alertInfo' => [
        'titleSection' => '',
        'elems' => $elemsSectFontsAlert,
    ],
    'menu' => [
        'titleSection'  => 'Fuentes',
        'elems'         => $elemsSectFonts,
    ],
    'size-style' => [
        'titleSection'  => 'Tamaños y estilos',
        'elems'         => $elemsSectSizeStyle,
    ]
];

// Esta es la forma de llamar al método que crea las secciones
echo $this->formBuilder->addFull('fonts', $pnt_menuActivado, $fontSections);