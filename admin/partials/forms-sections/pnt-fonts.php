<?php

$elemsSectFontsAlert = [
    'alert' => [
        'type' => 'alertDismissible',
        'title' => '',
        'value' => '',
        'alertTitle' => 'Aviso',
        'alertContent' =>
            'Para un rendimiento óptimo recomendamos seleccionar solo las variaciones de las fuentes que desee utilizar en la web.',
        'alertClassColor' => 'warning',
    ]
];

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
    'content' => [
        'ids'           => 'family',
        'type'          => 'select',
        'title'         => 'Contenido',
        'customClass'   => 'pnt-options-fonts',
        'value'         => $pnt_fonts['content']['family'],
        'options'  => [
            'type'          => 'font',
            'fontType'      => $pnt_fonts['content']['fontType'],
            'optgroup'      => $optGroupsFont,
            'variants'      => [
                'googlefonts'   => $this->get_googlefonts(),
                'selection'     => isset($pnt_fonts['content']['variants']) ? $pnt_fonts['content']['variants'] : ''
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

$fontSections = [
    'alertInfo' => [
        'titleSection' => '',
        'elems' => $elemsSectFontsAlert,
    ],
    'menu' => [
        'titleSection'  => 'Fuentes',
        'elems'         => $elemsSectFonts,
    ]
];

// Esta es la forma de llamar al método que crea las secciones
echo $this->formBuilder->addFull('fonts', $pnt_menuActivado, $fontSections);