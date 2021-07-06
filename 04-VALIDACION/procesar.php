<?php
    $error = 'faltan_valores';
    if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])){
        $error='ok';
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = (int)$_POST['edad'];
        $email = $_POST['email'];
        $password=$_POST['pass'];

        //validar el nombre
        if(!is_string($nombre) || !preg_match("/[A-Za-z]+/",$nombre)){
            $error='nombre';
        }
        if(!is_string($apellidos) || !preg_match("/[A-Za-z]+/",$apellidos)){
            $error='nombre';
        }
        if(!is_int($edad) || !filter_var($edad,FILTER_VALIDATE_INT)){
            $error='edad';
        }
        if(!is_string($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error='email';
        }
        if(empty($password) || strlen($password)<5){
            $error='password';
        }
        echo $error;
    }else{
        $error = 'faltan_valores';
    }
    if($error != 'ok'){
        header("Location:index.php?error=$error");
    }

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>FORMULARIO</title>
    </head>
    <body>
        <?php if($error=='ok'):?>
        <h1>DATOS VALIDADOS CORRECTAMENTE</h1>
        <p><?=$nombre?></p>
        <p><?=$apellidos?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
        <?php endif;?>
    </body>
</html>