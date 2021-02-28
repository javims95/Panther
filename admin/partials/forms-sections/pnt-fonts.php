<?php

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
        'customClass'   => '',
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
        'customClass'   => '',
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
];

$fontSections = [
    'menu' => [
        'titleSection'  => 'Fuentes',
        'elems'         => $elemsSectFonts,
    ]
];

// Esta es la forma de llamar al método que crea las secciones
echo $this->formBuilder->addFull('fonts', $pnt_menuActivado, $fontSections);