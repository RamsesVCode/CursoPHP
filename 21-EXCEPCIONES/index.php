<?php
    //CAPTURAR EXCEPCIONES
    try{
        if(isset($_GET['id'])){
            echo "<h1>El parametro es: {$_GET['id']}</h1>";
        }else{
            throw new Exception('Faltan parametros');
        }
    }catch(Exception $e){//PARA CAPTURAR EL ERROR
        echo "Ha habido un error".$e->getMessage();
    }
    // }finally{
    //     echo "Todo correcto";
    // }
?>