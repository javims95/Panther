<?php
    include 'conexion.php';

    if (isset($_POST['codigo'])){

        // Compruebo si hay algún cupón válido al introducido
        $respuesta = $conexion->query("SELECT * FROM cupones WHERE codigo = '".$_POST['codigo']."'");
        // Si es igual a 0, quiere decir que no hay ningún cupón
        if(mysqli_num_rows($respuesta)==0){
            echo "cupon no valido";
        }
        // Inserto los datos del cupón en un array
        else {
            $datos = mysqli_fetch_row($respuesta);
            $arreglo = array(
                'id' => $datos[0],
                'codigo' => $datos[1],
                'status' => $datos[2],
                'tipo' => $datos[3],
                'valor' => $datos[4],
                'fecha_vencimiento' => $datos[5]
            );
            echo json_encode($arreglo);
        }
    }
    // Si no me envian ningun código
    else {
        echo 'error';
    }
?>