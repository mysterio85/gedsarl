<!--=== Breadcrumbs ===-->
<div class="row-fluid breadcrumbs margin-bottom-40">
  <div class="container">
        <h1 class="pull-left">Notre actualité</h1>
        
    </div><!--/container-->
</div><!--/breadcrumbs-->
<div class="container"> 
<div class="row-fluid">
  <?php 
    foreach ($actualites as $actualite) {
    $media=$actualite->image;
    $titre=$actualite->titre;
    $resume=$actualite->resume;
    $id_article=$actualite->id_article;
      

      echo '
        <div class="span6 booking-blocks">
             <div class="pull-left booking-img">'
             .img('article/'.$media,'','','')
                .'
             </div>
             <div style="overflow:hidden;">
                <h2>'
                .'<a href="'
                .base_url('/actualite/')
                .'/'.$id_article
                .'">'
                .$titre
                .'</a></h2><p>'
                .$resume
                .'</p><a class="btn btn-success pull-right" href="'
                .base_url('/actualite/')
                .'/'.$id_article
                .'">Lire la suite</a>
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