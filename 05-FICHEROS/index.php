<?php
    // //abrir archivo
    // $abrir_archivo = fopen("fichero_texto.txt","a+");

    // //leer el contenido
    // while(!feof($abrir_archivo)){
    //     $contenido = fgets($abrir_archivo);
    //     echo $contenido.'<br/>';
    // }
    // //insertar texto en el achivo con "w" en el fopen
    // fwrite($abrir_archivo,'<br/>Hola soy un texto metido');
    // //cerrar archivo
    // fclose($abrir_archivo);


    //COPIAR UN ARCHIVO
    // copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error");
    //RENOMBRAR UN FICHERO
    // rename('fichero_copiado.txt','archivito_recopiadito.txt');
    //BORRAR UN FICHERO
    // unlink('archivito_recopiadito.txt') or die('error al borrar');
    if(file_exists('fichero_texto.txt')){
        echo 'El archivo existe';
    }else{
        echo 'El archivo NO existe';
    }
?>