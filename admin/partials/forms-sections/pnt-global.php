<?php

// Esto son todos los items de la sección
$elemsSectBody = [
    'body' => [
        'type'          => 'radio',
        'title'         => 'Texto',        
        'value'         => $pnt_global['body'],
        'options'  => [
            'fullwidth'     => 'Ancho completo',
            'box'           => 'Diseño de caja'
        ]
    ]
];

$elemsSectLogo = [
    'logoUrl' => [
        'type' => 'media',
        'title' => 'Logotipo',
        'value' => $pnt_global['logoUrl'],
    ],
    'textLogo' => [
        'type' => 'text',
        'title' => 'Texto del logotipo',
        'value' => $pnt_global['textLogo']
    ]
];

$elemsSectAdvanced = [
    'faviconUrl' => [
        'type' => 'media',
        'title' => 'Favicon',
        'value' => $pnt_global['faviconUrl'],
    ],
    'apiGMaps' => [
        'type' => 'text',
        'title' => 'API para Google Maps',
        'value' => $pnt_global['apiGMaps']
    ]
];

// Esta es la seccion completa
$globalSections = [
    'body' => [
        'titleSection' => 'Diseño de página',
        'elems' => $elemsSectBody,
    ],
    'logo' => [
        'titleSection' => 'Logotipo',
        'elems' => $elemsSectLogo,
    ],
    'advanced' => [
        'titleSection' => 'Avanzado',
        'elems' => $elemsSectAdvanced
    ]
];

// Esta es la forma de llamar al método que crea las secciones
echo $this->formBuilder->addFull('global', $pnt_menuActivado, $globalSections);
?>

</div>