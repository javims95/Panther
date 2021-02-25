<?php 

echo "<pre>";
// var_dump($pnt_colors);
echo "</pre>";

$elemsSectColors = [
    'h1' => [
        'type'          => 'colorpicker',
        'title'         => 'H1',
        'value'         => '#ff0000',
        'preview'       => 'text',
        'tag'           => 'h1'
    ],
    'h2' => [
        'type'          => 'colorpicker',
        'title'         => 'H2',
        'value'         => '',
        'preview'       => 'text',
        'tag'           => 'h2'
    ]
];

$colorsSections = [
    'head' => [
        'titleSection' => 'Cabeceras',
        'elems' => $elemsSectColors,
    ]
];

echo $this->formBuilder->addFull('colors', $pnt_menuActivado, $colorsSections);

?>