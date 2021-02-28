<?php 

$elemsSectMenu = [
    'options' => [
        'type'          => 'checkbox',
        'title'         => 'Opciones',
        'value'         => isset($pnt_menu['options']['show-border']) ? $pnt_menu['options']['show-border'] : '',
        'options'  => [
            'show-border'       => 'Mostrar bordes entre los items'
        ]
    ]
];

$menuSections = [
    'style' => [
        'titleSection' => 'Diseño',
        'elems' => $elemsSectMenu,
    ]
];

echo $this->formBuilder->addFull('menu', $pnt_menuActivado, $menuSections);

?>