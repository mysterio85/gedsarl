<?php 
foreach ($politiques as $politique) {
    $media=$politique->image;
    $titre=$politique->titre;
    $contenu=$politique->contenu;
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
    	<div class="span8">
            <p><?=$contenu?>.</p>
           
            
        </div>
    	<div class="span4">
            <?php echo img('article/'.$media,'','','') ; ?>
        </div>
    </div><!--/row-fluid-->
</div>
<?php
    $this->load->view('parts/bottom.php');
    
?>