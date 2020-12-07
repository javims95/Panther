<?php
include "php\conexion.php";

$enlace = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$fecha = date('Y-m-d h:m:s');

// Si no existe la cookie la creo e inserto la visita a la DDBB
if (!isset($_COOKIE['visitas'])) {

    // Creamos las variables para la cookie

    $nombre = 'visitas';
    $valor = 'contador';
    // El tiempo de expiración son 2 horas.
    $expiracion = time() + 7200;

    setcookie($nombre, $valor, $expiracion);

    // Inserto los datos en la tabla visitas
    $conexion->query("INSERT INTO visitas (enlace, fecha) values ('$enlace', '$fecha')") or die($conexion->error);
}
?>