<?php 

$elemsSectFooter = [
    'copyright' => [
        'type'          => 'textarea',
        'title'         => 'Copyright',
        'value'         => $pnt_footer['copyright']
    ],
    'phone' => [
        'type'          => 'text',
        'title'         => 'Número de teléfono',
        'value'         => $pnt_footer['phone']        
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