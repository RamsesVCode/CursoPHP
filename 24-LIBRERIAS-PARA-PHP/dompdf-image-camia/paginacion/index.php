<?php
    require_once '../vendor/autoload.php';  

    //Conexion a la BD
    $conexion = new mysqli("localhost","root","","notas_master");
    $conexion->query("SET NAMES 'utf8'");
    //Consulta para contar elementos totales
    $consulta = $conexion->query("SELECT COUNT(*) as total FROM notas");
    $numero_elementos = $consulta->fetch_object()->total;
    $numero_elementos_pagina = 2;
    // var_dump($numero_elementos);
    //Hacer paginacion
    $pagination = new Zebra_Pagination();

    //Numero total elementos a paginar
    $pagination->records($numero_elementos);

    //Numero de elementos por pagina 
    $pagination->records_per_page($numero_elementos_pagina);
    
    //Consigue la pagina actual de la URL
    $page = $pagination->get_page();
    
    //Desde donde comenzamos a sacar registros
    $empieza = (($page-1)*$numero_elementos_pagina);

    //Consulta que extrae registros desde donde y cuantos saca
    $sql = "SELECT * FROM notas LIMIT $empieza,$numero_elementos_pagina";
    
    $notas = $conexion->query($sql);
    echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
    while($nota = $notas->fetch_object()){
        echo "<h1>{$nota->TITULO}</h1>";
        echo "<h3>{$nota->DESCRIPCION}</h3><hr/>";
    }
    //Links de las paginas
    $pagination->render();
?>