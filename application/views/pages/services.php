<!--=== Breadcrumbs ===-->
<div class="row-fluid breadcrumbs margin-bottom-40">
  <div class="container">
        <h1 class="pull-left">Nos services</h1>
        
    </div><!--/container-->
</div><!--/breadcrumbs-->
<div class="container"> 
<div class="row-fluid">
  <?php 
    foreach ($services as $service) {
    $media=$service->image;
    $titre=$service->titre;
    $contenu=$service->contenu;
      echo '
      
          <div class="span6 booking-blocks"><h1>'
      .$titre
      .'</h1>
             '
             .img('article/'.$media,'','','')
             .'<div style="overflow:hidden;">              
                <p>'
                .$contenu
                .'</p>
             </div>
          </div>
      ';
    }
   ?>
          
</div>
</div>
<?php
    $this->load->view('parts/bottom.php');    
?>