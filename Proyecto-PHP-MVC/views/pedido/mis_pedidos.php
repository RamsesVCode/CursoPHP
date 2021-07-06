<?php if(isset($gestion) && $gestion):?>
    <h1>Gestionar pedidos</h1>
<?php else:?>
    <h1>Mis pedidos</h1>
<?php endif;?>
<table>
    <tr>
        <th>N° Pedido</th>
        <th>Coste</th>
        <th>Fecha</th>
        <?php if(isset($gestion) && $gestion):?>
        <th>Estado</th>
        <?php endif;?>
    </tr>
    <?php while($ped = $pedidos->fetch_object()):?>
        <tr>
            <td><a href="<?=base_url?>pedido/detalle&id=<?=$ped->id?>"><?=$ped->id?></a></td>
            <td><?=$ped->coste?> $</td>
            <td><?=$ped->fecha?></td>
            <?php if(isset($gestion) && $gestion):?>
                <td><?=Utils::showStatus($ped->estado)?></td>
            <?php endif;?>
        </tr>
    <?php endwhile;?>    
</table>