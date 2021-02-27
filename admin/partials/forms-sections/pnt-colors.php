<?php

echo "<pre>";
// var_dump($pnt_colors);
echo "</pre>";

$elemsSectColors = [
    
    'h1' => [
        'type'          => 'colorpicker',
        'title'         => 'H1',
        'value'         => $pnt_colors['h1'],
        'preview'       => 'text',
        'tag'           => 'h1'
    ],
    'h2' => [
        'type'          => 'colorpicker',
        'title'         => 'H2',
        'value'         => $pnt_colors['h2'],
        'preview'       => 'text',
        'tag'           => 'h2'
    ],
    'h3' => [
        'type'          => 'colorpicker',
        'title'         => 'H3',
        'value'         => $pnt_colors['h3'],
        'preview'       => 'text',
        'tag'           => 'h3'
    ],
    'h4' => [
        'type'          => 'colorpicker',
        'title'         => 'H4',
        'value'         => $pnt_colors['h4'],
        'preview'       => 'text',
        'tag'           => 'h4'
    ],
    'h5' => [
        'type'          => 'colorpicker',
        'title'         => 'H5',
        'value'         => $pnt_colors['h5'],
        'preview'       => 'text',
        'tag'           => 'h5'
    ],
    'h6' => [
        'type'          => 'colorpicker',
        'title'         => 'H6',
        'value'         => $pnt_colors['h6'],
        'preview'       => 'text',
        'tag'           => 'h6'
    ],
];

$alertInfoSectColors = [
    
    'alert' => [
        'type'              => 'alertDismissible',
        'title'             => '',
        'value'             => '',
        'alertTitle'        => 'Información',
        'alertContent'      => 'Para cambiar el color haga clic en el círculo de color a la izquierda del input.',
        'alertFooter'       => 'También puedes ingresar un valor directamente en el input, <b>acepta valores Hexadecimales, RGB, RGBA y HSL</b>.',
        'alertClassColor'   => 'info'
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