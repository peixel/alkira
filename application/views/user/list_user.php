
<div class="table-responsive">
    <table class="table table-bordered ">
        <thead>
            <td>#</td>
            <td>nombre</td>
            <td>local</td>
            <td>&nbsp;</td>
        </thead>
    <?
    foreach ($contrats as $contrat) {
        
    
    ?>
    
    <tr>
        <td><?=$contrat->id?></td>
        <td><?=$contrat->nombre?></td>
        <td><?=$contrat->local?></td>
        <td><a href="<?=base_url()?>user/del/<?=$contrat->id?>"><span class="glyphicon glyphicon glyphicon-remove red_text" aria-hidden="true"></span></a></td>
    </tr>
    
    <?
    }//end foreach
    ?>
    </table>
    
</div>