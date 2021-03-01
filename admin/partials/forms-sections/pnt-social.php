<?php 

$elemsSectSocial = [
    'links' => [
        'type'          => 'switch',
        'title'         => 'Activar redes sociales',
        'value'         => isset($pnt_social['show']) ? $pnt_social['show'] : '',
        'options'  => [
            'default'           => 'Defecto',
            'centeredLogo'      => 'Logo centrado'
        ]
    ]
];

$socialSections = [
    'links' => [
        'titleSection' => 'Enlaces',
        'elems' => $elemsSectSocial,
    ]
];

// Esta es la forma de llamar al método que crea las secciones
echo $this->formBuilder->addFull('social', $pnt_menuActivado, $socialSections);

?>