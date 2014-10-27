<?php 
foreach ($presentations as $presentation) {
    $media=$presentation->resume;
    $titre=$presentation->titre;
    $contenu=$presentation->contenu;
}
?>
<!--=== Breadcrumbs ===-->
<div class="row-fluid breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="pull-left"><?=$titre?></h1>
        
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid margin-bottom-30">
    	<div class="span6">
            <p><?=$contenu?>.</p>
           
            <!-- Blockquotes -->
            <blockquote>
                Échanger, dialoguer, écouter, informer, sont des actions quotidiennes de l’équipe de GEDsarl. 
L'organisation de l'entreprise, tournée vers le client, lui permet d'être toujours en phase avec le marché, mais aussi avec pour objectif principal l'anticipation.

                <small>CEO DJIGBENOU Ange</small>
            </blockquote>
        </div>
    	<div class="span6">
            <?php echo $media; ?>
        </div>
    </div><!--/row-fluid-->
</div>
<?php
    $this->load->view('parts/bottom.php');
    
?>