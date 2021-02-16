<?php

// Esto son todos los items de la sección
$sectionBody = [
    'textLogo' => [
        'type'          => 'radio',
        'title'         => 'Texto',
        'value'         => '',
        'optionsRadio'  => [
            'fullwidth'     => 'Ancho completo',
            'box'           => 'Diseño de caja'
        ]
    ]
];

$elemsSectLogo = [
    'LogoUrl' => [
        'type' => 'media',
        'title' => 'Logotipo',
        'value' => '',
    ],
    'textLogo' => [
        'type' => 'text',
        'title' => 'Texto del logotipo',
        'value' => ''
    ]
];

$elemsSectAdvanced = [
    'faviconUrl' => [
        'type' => 'media',
        'title' => 'Favicon',
        'value' => '',
    ],
    'apiGMaps' => [
        'type' => 'text',
        'title' => 'API para Google Maps',
        'value' => ''
    ]
];

// Esta es la seccion completa
$globalSections = [
    'body' => [
        'titleSection' => 'Body',
        'elems' => $sectionBody,
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
echo $this->formBuilder->addFull('global', $globalSections);
?>
</div>