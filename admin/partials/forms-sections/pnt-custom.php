<?php 

$elemsSectCustomCode = [    
    'css' => [
        'type'          => 'textarea',
        'title'         => 'CSS personalizado',
        'value'         => stripslashes($pnt_customCode['css']),
    ],
    'js' => [
        'type'          => 'textarea',
        'title'         => 'JavaScript personalizado',
        'value'         => stripslashes($pnt_customCode['js']),
    ],
];

$customCodeSections = [
    'customCode' => [
        'titleSection' => 'Avanzado',
        'elems' => $elemsSectCustomCode,
    ]
];

// Esta es la forma de llamar al método que crea las secciones
echo $this->formBuilder->addFull('custom', $pnt_menuActivado, $customCodeSections);

?>