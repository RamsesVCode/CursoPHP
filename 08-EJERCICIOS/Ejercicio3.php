<?php
    /*
        Hacer una interfaz de usuario (formulario) con 2 inputs y 4 botones, uno para sumar, restas, multiplicar y dividir
    */
    $res = false;
    if(isset($_POST['n1']) && isset($_POST['n2'])){
        if(isset($_POST['sumar'])){
            $res = 'El resultado es: '.($_POST['n1']+$_POST['n2']);   
        }
        if(isset($_POST['restar'])){
            $res = 'El resultado es: '.($_POST['n1']-$_POST['n2']);
        }
        if(isset($_POST['multiplicar'])){
            $res = 'El resultado es: '.($_POST['n1']*$_POST['n2']);
        }
        if(isset($_POST['dividir'])){
            $res = 'El resultado es: '.($_POST['n1']/$_POST['n2']);
        }
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 3 - CALCULADORA</title>
</head>
<body>
    <h1>CALCULADORA CON PHP</h1>
    <form action="" method="POST">
        <p>Numero 1: <input type="number" name="n1"></p>
        <p>Numero 2: <input type="number" name="n2"></p>
        <p><input type="submit" name="sumar" value="Sumar"></p>
        <p><input type="submit" name="restar" value="Restar"></p>
        <p><input type="submit" name="multiplicar" value="Multiplicar"></p>
        <p><input type="submit" name="dividir"value="Dividir"></p>
        <p>Resultado: <input type="text" name="resultado" value="<?=$res?>"></p>
    </form>
    <?php
        if($res != false):
            echo "<h1>El resultado es: $res</h1>";
        endif;
    ?>
</body>
</html>