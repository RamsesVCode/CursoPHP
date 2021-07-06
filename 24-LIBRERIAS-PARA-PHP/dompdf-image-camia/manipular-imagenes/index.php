<?php
    require_once '../vendor/autoload.php';
    $foto_original = 'mifoto.jpg';
    // $guardar_en = 'fotomodificada.jpg';
    $thumb = new PHPThumb\GD($foto_original);
    //$thumb->resize(50, 50);//para resize
    //$thumb->show();
    // $thumb->save($guardar_en);

    $thumb->resize(100, 100);
    $thumb->show();
?>