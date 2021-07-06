<?php
    require_once('Configuracion.php');
    Configuracion::setColor('blue');
    Configuracion::setNewsLetter(true);
    Configuracion::setEntorno('localhost');
    echo Configuracion::getEntorno() .'<br/>';
?>