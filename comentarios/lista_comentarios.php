<?php
require_once ("./php/conexion.php");

$sql = "SELECT * FROM comentarios ORDER BY parent_comment_id asc, comment_id asc";

$result = mysqli_query($conexion, $sql);
$record_set = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($record_set, $row);
}
mysqli_free_result($result);

mysqli_close($conexion);
echo json_encode($record_set);
?>