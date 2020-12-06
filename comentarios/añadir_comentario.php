<?php
include "../php/conexion.php";

if (
    isset($_POST['comment_product_id']) && isset($_POST['comment_rating']) &&
    isset($_POST['comment_name'])   &&  isset($_POST['comment_email'])
    && isset($_POST['comment_comment'])
) {

    $fecha = date('Y-m-d');
    $hora = date('H:i:s');

    $conexion->query("INSERT INTO comentarios(id,nombre,email,comentario,producto_id,fecha,hora,valoracion) VALUES
    (
        '',
      '" . $_POST['comment_name'] . "',
      '" . $_POST['comment_email'] . "',
      '" . $_POST['comment_comment'] . "',
      '" . $_POST['comment_product_id'] . "',
      '$fecha',
      '$hora',
      " . $_POST['comment_rating'] . "
    )") or die($conexion->error);
    header("Location: URL");

} else {
    var_dump('No existe');
}
