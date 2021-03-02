<?php 

$elemsSectCustomCode = [    
    'css' => [
        'type'          => 'textarea',
        'title'         => 'CSS personalizado',
        'value'         => stripslashes($pnt_custom['css']),
    ],
    'js' => [
        'type'          => 'textarea',
        'title'         => 'JavaScript personalizado',
        'value'         => stripslashes($pnt_custom['js']),
    ],
];

$customCodeSections = [
    'custom' => [
        'titleSection' => 'Avanzado',
        'elems' => $elemsSectCustomCode,
    ]
];

// Esta es la forma de llamar al método que crea las secciones
echo $this->formBuilder->addFull('custom', $pnt_menuActivado, $customCodeSections);

?>