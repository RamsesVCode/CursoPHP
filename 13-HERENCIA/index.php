<?php
    require_once 'clases.php';
    $persona = new Persona();
    $persona->setNombre('Edward');
    var_dump($persona);
    $informatico = new Informatico();
    $informatico->setAltura('1.90');
    echo $informatico->sabeLenguajes("HTML, CSS, JAVASRIPT");
    var_dump($informatico);
?>