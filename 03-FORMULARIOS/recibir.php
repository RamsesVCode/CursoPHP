<?php
    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        echo 'Mi nombre es: '.$nombre.'<br/>';
        echo 'Mi apellido es: '.$apellido.'<br/>';
        echo 'Mi edad es: '.$edad.'<br/>';
    }

?>