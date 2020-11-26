<?php 
include "./conexion.php";

if(isset($_POST['nombreNewUser']) &&  isset($_POST['telefonoNewUser'])   &&  isset($_POST['emailNewUser'])
&&  isset($_POST['nivelNewUser']) &&  isset($_POST['contraseñaNewUser'])){
    
    $carpeta="../images/";
    $nombre = $_FILES['new_imagen']['name'];
   
    //imagen.casa.jpg
    $temp= explode( '.' ,$nombre);
    $extension= end($temp);
    
    $nombreFinal = time().'.'.$extension;
    $password = $_POST['contraseñaNewUser'];
   
    if($extension=='jpg' || $extension == 'png'){
        if(move_uploaded_file($_FILES['new_imagen']['tmp_name'], $carpeta.$nombreFinal)){
            $conexion->query("insert into usuario 
                (nombre, telefono, email, password, img_perfil, nivel) values
                (
                    '".$_POST['nombreNewUser']."',
                    '".$_POST['telefonoNewUser']."',
                    '".$_POST['emailNewUser']."',
                    '".SHA1('$password')."',
                    '$nombreFinal',
                    '".$_POST['nivelNewUser']."'
                )   ")or die($conexion->error);
                header("Location: ../admin/usuarios.php?success");
        }else{
            header("Location: ../admin/usuarios.php?error=No se pudo subir la imagen");
        }
    }else{
        header("Location: ../admin/usuarios.php?error=Por favor suba una imagen con formato .png/.jpg");
    }

}else{
    header("Location: ../admin/usuarios.php?error=Por favor rellene todos los campos");
}
