<?php 

echo "<pre>";
var_dump( $pnt_menu);
echo "</pre>";

$elemsSectMenu = [
    'options' => [
        'type'          => 'checkbox',
        'title'         => 'Opciones',
        'value'         => isset($pnt_menu['options']['show-border']) ? $pnt_menu['options']['show-border'] : '',
        'optionsRadio'  => [
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

// Esta es la forma de llamar al método que crea las secciones
echo $this->formBuilder->addFull('menu', $pnt_menuActivado, $menuSections);

?>