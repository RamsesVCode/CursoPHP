<h1>Listado de notas</h1>
<?php while($nota = $notas->fetch_object()):?>
    <?=$nota->TITULO?>-<?=$nota->FECHA?><br/>
<?php endwhile;?>