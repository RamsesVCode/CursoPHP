<?php
    $archivo = $_FILES['archivo'];
    $nombre = $archivo['name'];
    $tipo = $archivo['type'];
    if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){
        if(!is_dir('images')){
            mkdir('images',0777);
        }
        move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);
        echo '<h1>IMAGEN SUBIDA CORRECTAMENTE</h1>';
    }else{
        echo '<h1>Sube una imagen con formato correcto</h1>';
    }
    header("Refresh: 5;URL=index.php");
?>