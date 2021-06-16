<?php 

$elemsSectHeaderAdvanced = [
    'sticky' => [
        'type'          => 'switch',
        'title'         => 'Menú pegajoso',
        'value'         => isset($pnt_header['sticky']) ? $pnt_header['sticky'] : ''
    ]
];

$headerSections = [
    'advanced' => [
        'titleSection' => 'Avanzado',
        'elems' => $elemsSectHeaderAdvanced ,
    ]
];

// Esta es la forma de llamar al método que crea las secciones
echo $this->formBuilder->addFull('header', $pnt_menuActivado, $headerSections);

?>