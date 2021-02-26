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
    ],
    'h3' => [
        'type'          => 'colorpicker',
        'title'         => 'H3',
        'value'         => '',
        'preview'       => 'text',
        'tag'           => 'h3'
    ],
];

$alertInfoSectColors = [
    
    'alert' => [
        'type'              => 'alertDismissible',
        'title'             => 'H3',
        'value'             => '',
        'alertTitle'        => 'text',
        'alertContent'      => 'h3',
        'alertFooter'       => 'h3',
        'alertClassColor'   => 'danger'
    ],
];

$colorsSections = [    
    'alertInfo' => [
        'titleSection' => '',
        'elems' => $alertInfoSectColors,
    ],
    'head' => [
        'titleSection' => 'Cabeceras',
        'elems' => $elemsSectColors,
    ]
];

echo $this->formBuilder->addFull('colors', $pnt_menuActivado, $colorsSections);

?>