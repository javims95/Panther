<?php 

echo "<pre>";
var_dump($pnt_sidebars);
echo "</pre>";

$elemsSectSidebars = [
    'width' => [
        'type'          => 'noUiSlider',
        'title'         => 'Ancho',
        'value'         => '',
        'start'         => '23',
        'min'           => '15',
        'max'           => '30',
    ]
];

$sidebarsSections = [
    'style' => [
        'titleSection' => 'Diseño',
        'elems' => $elemsSectSidebars,
    ]
];

echo $this->formBuilder->addFull('sidebars', $pnt_menuActivado, $sidebarsSections);

?>