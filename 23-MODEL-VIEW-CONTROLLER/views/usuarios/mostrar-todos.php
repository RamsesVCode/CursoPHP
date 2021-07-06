<h1>Todos los usuarios</h1>
<?php while($usuario = $todos_los_usuarios->fetch_object()):?>
    <?=$usuario->NOMBRE?>-<?=$usuario->APELLIDOS?><br/>
<?php endwhile;?>