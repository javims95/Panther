<?php 

$elemsSectDesign = [
    'style' => [
        'type'          => 'radio',
        'title'         => 'Estilo',
        'value'         => $pnt_header['style'],
        'options'  => [
            'default'           => 'Defecto',
            'centeredLogo'      => 'Logo centrado'
        ]
    ]
];

$elemsSectHeaderAdvanced = [
    'sticky' => [
        'type'          => 'switch',
        'title'         => 'Menú pegajoso',
        'value'         => isset($pnt_header['sticky']) ? $pnt_header['sticky'] : ''
    ]
];

$headerSections = [
    'style' => [
        'titleSection' => 'Diseño',
        'elems' => $elemsSectDesign,
    ],
    'advanced' => [
        'titleSection' => 'Avanzado',
        'elems' => $elemsSectHeaderAdvanced ,
    ]
];

// Esta es la forma de llamar al método que crea las secciones
echo $this->formBuilder->addFull('header', $pnt_menuActivado, $headerSections);

?>