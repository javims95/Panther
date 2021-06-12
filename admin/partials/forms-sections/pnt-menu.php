<?php 

$elemsSectMenu = [
    'options' => [
        'type'          => 'checkbox',
        'title'         => 'Opciones',
        'value'         => isset($pnt_menu['options']['show-border']) ? $pnt_menu['options']['show-border'] : '',
        'options'  => [
            'show-border'       => 'Mostrar separador entre los items'
        ]
    ]
];

$elemsSectMenuSecondary = [
    'address' => [
        'type'          => 'text',
        'title'         => 'Dirección',
        'value'         => $pnt_menu['address'],        
    ],
    'mail' => [
        'type'          => 'text',
        'title'         => 'Correo Electrónico',
        'value'         => $pnt_menu['mail'],        
    ]
];

$menuSections = [
    'style' => [
        'titleSection' => 'Diseño',
        'elems' => $elemsSectMenu,
    ],
    'menuSecondary' => [
        'titleSection' => 'Menú Secundario',
        'elems' => $elemsSectMenuSecondary,
    ]
];

echo $this->formBuilder->addFull('menu', $pnt_menuActivado, $menuSections);

?>