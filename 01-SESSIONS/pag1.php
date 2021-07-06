<?php
    session_start();//inicia la sesion
    session_destroy();//destruye los atributos de session
    echo $_SESSION['misession'];//ya no se puede imprimir
?>