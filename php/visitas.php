<?php
include "php\conexion.php";

$enlace = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$fecha = date('Y-m-d h:m:s');

if (isset($_COOKIE['visitas'])) {
    
    $visitas = $_COOKIE['visitas'];
}

else {

    setcookie('visitas', $_COOKIE['visitas'] + 1, time() +86400);
    
}

    // Con esta consulta, actualizamos en la BBDD los datos del producto que estamos editando
    $conexion->query("INSERT INTO visitas (enlace, fecha) values ('$enlace', '$fecha')")or die($conexion->error);

?>