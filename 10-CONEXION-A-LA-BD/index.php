<?php
    // $conexion = mysqli_connect($host,$user,$password,$database,$port,$socket);
    //conectar a la BD
    $conexion = mysqli_connect('localhost','root','','phpmysql');
    if(mysqli_connect_errno()){
        echo "La conexion a la base de datos MySQL ha fallado: ".mysqli_connect_errno();
    }else{
        echo "Conexion realizada correctamente";
    }

    //Consulta para configurar la codificacion de caracteres
    // mysqli_query($link,$query);
    mysqli_query($conexion,"SET NAMES 'utf-8'");

    //Consulta SELECT desde PHP
    $query = mysqli_query($conexion,"SELECT * FROM NOTAS");
    echo '<pre>';
    while($nota = mysqli_fetch_assoc($query)){
        var_dump($nota);
    }
    echo '</pre>';
?>