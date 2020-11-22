<?php 
include "conexion.php";
if(isset($_POST['nombre']) &&  isset($_POST['email'])   &&  isset($_POST['telefono'])
    &&  isset($_POST['nivel'])){
    
   
    
    if($_FILES['img_perfil']['name'] !='' ){
        $carpeta="../images/";
        $nombre = $_FILES['img_perfil']['name'];
            //imagen.casa.jpg
        $temp= explode( '.' ,$nombre);
        $extension= end($temp);
        
        $nombreFinal = time().'.'.$extension;
    
        if($extension=='jpg' || $extension == 'png'){
            if(move_uploaded_file($_FILES['img_perfil']['tmp_name'], $carpeta.$nombreFinal)){
                $fila = $conexion->query('select imagen from usuario where id='.$_POST['id']);
                $id = mysqli_fetch_row($fila);

                // Si existe la imagen, eliminamos la anterior
                if(file_exists('../images/'.$id[0])){
                    unlink('../images/'.$id[0]);
                }
                $conexion->query("update usuario set imagen='".$nombreFinal."' where id=".$_POST['id']);
            }

        }
    } 

    // Con esta consulta, actualizamos en la BBDD los datos del usuario que estamos editando
    $conexion->query("update usuario set 
                        nombre='".$_POST['nombre']."',
                        telefono=".$_POST['telefono'].",
                        email='".$_POST['email']."',
                        nivel=".$_POST['nivel'].",
                        where id=".$_POST['id']);
    echo "se actualizo";
}   
?>