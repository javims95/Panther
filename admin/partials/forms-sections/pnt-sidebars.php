<?php 

$elemsSectSidebars = [
    'width' => [
        'type'          => 'noUiSlider',
        'title'         => 'Ancho',
        'value'         => '',
        'start'         => $pnt_sidebars['width'],
        'min'           => '15',
        'max'           => '30',
    ]
];

$elemsSectSidebarsAdvanced = [
    'custom' => [
        'type'          => 'listSidebar',
        'title'         => 'Sidebars',
        'value'         => ['uno', 'dos', 'tres', 'cuatro']
    ]
];

$sidebarsSections = [
    'style' => [
        'titleSection' => 'Diseño',
        'elems' => $elemsSectSidebars,
    ],
    'advanced' => [
        'titleSection' => 'Sidebars',
        'elems' => $elemsSectSidebarsAdvanced,
    ]
];

echo $this->formBuilder->addFull('sidebars', $pnt_menuActivado, $sidebarsSections);

?>