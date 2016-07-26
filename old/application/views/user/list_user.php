
<div class="table-responsive">
    <table class="table table-bordered ">
        <td>
            <td>#</td>
            <td>nombre</td>
            <td>local</td>
            <td>&nbsp;</td>
        </td>
    <?
    foreach ($contrats as $contrat) {
        
    
    ?>
    
    <tr>
        <td><?=$contrat->id?></td>
        <td><?=$contrat->nombre?></td>
        <td><?=$contrat->local?></td>
        <td><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span></td>
    </tr>
    
    <?
    }//end foreach
    ?>
    </table>
    
</div>