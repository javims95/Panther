<?php 
include "conexion.php";

if(isset($_POST['subject'])  &&  isset($_POST['email']) &&  
isset($_POST['name'])   &&  isset($_POST['messagge'])){
    
    $carpeta="../images/correos/";
    $nombre = $_FILES['imagen']['name'];
   
    $temp= explode( '.' ,$nombre);
    $extension= end($temp);
    
    $nombreFinal = time().'.'.$extension;

    // Fecha y hora
    $fecha = date('Y-m-d');
    $hora = date('H:i:s');
   
    if($extension=='jpg' || $extension == 'png'){
        if(move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta.$nombreFinal)){
            $conexion->query("insert into correos 
                (id,name,email,subject,message,fecha,hora,file) values
                (
                    '',
                    '".$_POST['name']."',
                    '".$_POST['email']."',
                    '".$_POST['subject']."',
                    '".$_POST['messagge']."',
                    '$fecha',
                    '$hora',
                    '$nombreFinal'
                )   ")or die($conexion->error);
                header("Location: ../admin/bandeja-entrada.php?success");
        }else{
            header("Location: ../admin/bandeja-entrada.php?error=No se pudo subir la imagen");
        }
    }else{
        header("Location: ../admin/bandeja-entrada.php?error=Por favor suba una imagen con formato .png/.jpg");
    }

}else{
    header("Location: ../admin/bandeja-entrada.php?error=Por favor rellene todos los campos");
}
