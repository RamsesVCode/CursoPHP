<?php
    session_start();//iniciar la sesion
    $_SESSION['misession']='Hola';//establece una sesion
    echo $_SESSION['misession'];//mostramos la variable de session
?>