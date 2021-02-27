<?php 

$elemsSectFooter = [
    'copyright' => [
        'type'          => 'textarea',
        'title'         => 'Copyright',
        'value'         => $pnt_footer['copyright']
    ],
    'position' => [
        'type'          => 'radio',
        'title'         => 'Posición',
        'value'         => $pnt_footer['position'],
        'optionsRadio'  => [
            'left'          => 'Izquierda',
            'center'        => 'Centrado (defecto)',
            'right'         => 'Derecha'
        ]
    ]
];

$footerSections = [
    'advanced' => [
        'titleSection' => 'Avanzado',
        'elems' => $elemsSectFooter
    ]
];

// Esta es la forma de llamar al método que crea las secciones
echo $this->formBuilder->addFull('footer', $pnt_menuActivado, $footerSections);

?>