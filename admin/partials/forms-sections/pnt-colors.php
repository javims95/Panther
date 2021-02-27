<?php

echo '<pre>';
// var_dump($pnt_colors);
echo '</pre>';

$elemsSectColorsAlert = [
    'alert' => [
        'type' => 'alertDismissible',
        'title' => '',
        'value' => '',
        'alertTitle' => 'Información',
        'alertContent' =>
            'Para cambiar el color haga clic en el círculo de color a la izquierda del input.',
        'alertFooter' =>
            'También puedes ingresar un valor directamente en el input, <b>acepta valores Hexadecimales, RGB, RGBA y HSL</b>.',
        'alertClassColor' => 'info',
    ],
];

$elemsSectColorsHeaders = [
    'h1' => [
        'type' => 'colorpicker',
        'title' => 'H1',
        'value' => $pnt_colors['h1'],
        'preview' => 'text',
        'tag' => 'h1',
    ],
    'h2' => [
        'type' => 'colorpicker',
        'title' => 'H2',
        'value' => $pnt_colors['h2'],
        'preview' => 'text',
        'tag' => 'h2',
    ],
    'h3' => [
        'type' => 'colorpicker',
        'title' => 'H3',
        'value' => $pnt_colors['h3'],
        'preview' => 'text',
        'tag' => 'h3',
    ],
    'h4' => [
        'type' => 'colorpicker',
        'title' => 'H4',
        'value' => $pnt_colors['h4'],
        'preview' => 'text',
        'tag' => 'h4',
    ],
    'h5' => [
        'type' => 'colorpicker',
        'title' => 'H5',
        'value' => $pnt_colors['h5'],
        'preview' => 'text',
        'tag' => 'h5',
    ],
    'h6' => [
        'type' => 'colorpicker',
        'title' => 'H6',
        'value' => $pnt_colors['h6'],
        'preview' => 'text',
        'tag' => 'h6',
    ],
];

$elemsSectColorsMenu = [
    'bg' => [
        'ids'       => 'menu',
        'type'      => 'colorpicker',
        'title'     => 'Color de fondo del menú',
        'value'     => $pnt_colors['menu']['bg'],
    ],
    'link' => [
        'ids'       => 'menu',
        'type'      => 'colorpicker',
        'title'     => 'Color del enlace',
        'value'     => $pnt_colors['menu']['link'],
    ],
    'activeLink' => [
        'ids'       => 'menu',
        'type'      => 'colorpicker',
        'title'     => 'Color del enlace activo',
        'value'     => $pnt_colors['menu']['activeLink'],
    ],    
    'bgActiveLink' => [
        'ids'       => 'menu',
        'type'      => 'colorpicker',
        'title'     => 'Color del fondo enlace activo',
        'value'     => $pnt_colors['menu']['bgActiveLink'],
    ],    
    'hoverLink' => [
        'ids'       => 'menu',
        'type'      => 'colorpicker',
        'title'     => 'Color del enlace hover',
        'value'     => $pnt_colors['menu']['hoverLink'],
    ],    
    'bgHoverLink' => [
        'ids'       => 'menu',
        'type'      => 'colorpicker',
        'title'     => 'Color del fondo enlace hover',
        'value'     => $pnt_colors['menu']['bgHoverLink'],
    ],    
];

$elemsSectColorsContent = [
    'bgButton' => [
        'ids'       => 'content',
        'type'      => 'colorpicker',
        'title'     => 'Color de fondo para los botones',
        'value'     => $pnt_colors['content']['bgButton'],
    ],
    'bgHoverBoton' => [
        'ids'       => 'content',
        'type'      => 'colorpicker',
        'title'     => 'Color de fondo para los botones hover',
        'value'     => $pnt_colors['content']['bgHoverBoton'],
    ],
    'colorLink' => [
        'ids'       => 'content',
        'type'      => 'colorpicker',
        'title'     => 'Color del enlace',
        'value'     => $pnt_colors['content']['colorLink'],
    ],    
    'colorLinkHover' => [
        'ids'       => 'content',
        'type'      => 'colorpicker',
        'title'     => 'Color del fondo enlace activo',
        'value'     => $pnt_colors['content']['colorLinkHover'],
    ],    
    'textColorButton' => [
        'ids'       => 'content',
        'type'      => 'colorpicker',
        'title'     => 'Color del texto para los botones',
        'value'     => $pnt_colors['content']['textColorButton'],
    ],    
    'textColorButtonHover' => [
        'ids'       => 'content',
        'type'      => 'colorpicker',
        'title'     => 'Color del texto para los botones hover',
        'value'     => $pnt_colors['content']['textColorButtonHover'],
    ],    
];

$elemsSectColorsFooter = [
    'bgFooter' => [
        'ids'       => 'footer',
        'type'      => 'colorpicker',
        'title'     => 'Color de fondo para el footer',
        'value'     => $pnt_colors['footer']['bgFooter'],
    ],
    'bgCopyright' => [
        'ids'       => 'footer',
        'type'      => 'colorpicker',
        'title'     => 'Color de fondo para el footer (copyright)',
        'value'     => $pnt_colors['footer']['bgCopyright'],
    ]
];

$colorsSections = [
    'alertInfo' => [
        'titleSection' => '',
        'elems' => $elemsSectColorsAlert,
    ],
    'headers' => [
        'titleSection' => 'Cabeceras',
        'elems' => $elemsSectColorsHeaders,
    ],
    'menu' => [
        'titleSection' => 'Menú',
        'elems' => $elemsSectColorsMenu,
    ],
    'content' => [
        'titleSection' => 'Contenido',
        'elems' => $elemsSectColorsContent,
    ],
    'content' => [
        'titleSection' => 'Footer',
        'elems' => $elemsSectColorsFooter,
    ],
];

echo $this->formBuilder->addFull('colors', $pnt_menuActivado, $colorsSections);

?>
