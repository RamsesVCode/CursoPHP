<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>FORMULARIO</title>
    </head>
    <body>
        <h1>VALIDAR FORMULARIO</h1>
        <?php 
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == 'faltan_valores'){
                    echo '<strong style="color:red">Introduce Todos los datos en todos los campos del formulario</strong>';
                }
                if($error == 'nombre'){
                    echo '<strong style="color:red">Verifica el nombre</strong>';
                }
                if($error == 'apellidos'){
                    echo '<strong style="color:red">Verifica los apellidos</strong>';
                }
                if($error == 'edad'){
                    echo '<strong style="color:red">La edad no es correcta</strong>';
                }
                if($error == 'email'){
                    echo '<strong style="color:red">Verifica el email</strong>';
                }
                if($error == 'password'){
                    echo '<strong style="color:red">La cantidad de caracteres de tu password en menor a 5</strong>';
                }
            }
        
        ?>
        <form method="POST" action="procesar.php">
            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre"/><br>
            
            <label for="apellidos">Apellidos</label><br>
            <input type="text" name="apellidos"/><br>
            
            <label for="edad">Edad</label><br>
            <input type="number" name="edad"/><br>

            <label for="email">Email</label><br>
            <input type="texto" name="email"/><br>

            <label for="pass">Contraseña</label><br>
            <input type="password" name="pass"/><br>

            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>