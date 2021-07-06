<?php
    function app_autoload($clase){
        require_once 'clases/'.$clase.'.php';
    }
    spl_autoload_register('app_autoload');
?>