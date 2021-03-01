<?php 

$elemsSectSocial = [
    'show' => [
        'type'          => 'switch',
        'title'         => 'Activar redes sociales',
        'value'         => isset($pnt_social['show']) ? $pnt_social['show'] : '',
        'options'       => [
            'on'           => 'Activar',
            'off'          => 'Desactivar'
        ]
    ],
    'facebook' => [
        'type'          => 'text',
        'title'         => '<i class="fab fa-facebook-square"></i> Facebook',
        'value'         => $pnt_social['facebook'],        
    ],
    'twitter' => [
        'type'          => 'text',
        'title'         => '<i class="fab fa-twitter-square"></i> Twitter',
        'value'         => $pnt_social['twitter'],        
    ],
    'instagram' => [
        'type'          => 'text',
        'title'         => '<i class="fab fa-instagram"></i> Instagram',
        'value'         => $pnt_social['instagram'],        
    ],
    'youtube' => [
        'type'          => 'text',
        'title'         => '<i class="fab fa-youtube"></i> Youtube',
        'value'         => $pnt_social['youtube'],        
    ],
    'googleplus' => [
        'type'          => 'text',
        'title'         => '<i class="fab fa-google-plus-square"></i> Google Plus',
        'value'         => $pnt_social['googleplus'],        
    ],
    'linkedin' => [
        'type'          => 'text',
        'title'         => '<i class="fab fa-linkedin"></i> Linkedin',
        'value'         => $pnt_social['linkedin'],        
    ],
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