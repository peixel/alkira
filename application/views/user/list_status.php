
<div class="table-responsive">
    <table class="table table-bordered ">
        <thead>
            <td>#</td>
            <td>nombre</td>
            <td>Apellidos</td>
            <td>local</td>
            <td>Fecha</td>
            <td>Mora</td>
            <td>Pagar</td>
        </thead>
    <?
    foreach ($contrats as $contrat) {
        
    if($diferencia_dias>31) {   
    
    ?>
    
    <tr>
        <td><?=$contrat->id?></td>
        <td><?=$contrat->nombre?></td>
        <td><?=$contrat->apellido?></td>
        <td><?=$contrat->local?></td>
        <td><?=$contrat->fecha_contrato?></td>
        <td><?=$diferencia_dias-30?></td>
        <td><a href="<?=base_url()?>contrat/pay/<?=$contrat->id?>" class="btn btn-danger">PAGAR</a></td>
    </tr>
    
    <?
    
    }//end if
    
    }//end foreach
    ?>
    </table>
    
</div>