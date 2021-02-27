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
        'value'         => isset($pnt_sidebars['custom']) ? $pnt_sidebars['custom'] : ''
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