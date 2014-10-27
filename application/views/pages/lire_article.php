<?php
foreach ($articles as $article) {
     $titre=$article->titre;
     $intro=$article->resume;
     $contenu=$article->contenu;
     $image=$article->image;
     $date=$article->date_creation;
 } 

?>
<div class="breadcrumbs margin-bottom-20">
	<div class="container">
        <h1 class="color-green pull-left">Article</h1>
        
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid blog-page blog-item">
        <!-- Left Sidebar -->
    	<div class="span8">
        	<div class="blog margin-bottom-30">
            	
                   
                </ul>
                <div class="">
                    <div class="span12 margin-bottom-20">
                        <div class="thumbnail thumbnail-kenburn  overflow-hidden span7"><?php echo img('article/'.$image,'','',''); ?></div>
                        <div class="span5">
                           
                           
                            <ul class="unstyled inline blog-tags">
                    <li><i class="icon-calendar"></i> <?=$date ?></li>
                    <li><i class="icon-pencil"></i> Administrateur</li>
                </ul>
                <ul class="unstyled inline blog-tags "> <h3><?=$titre ?></h3> </ul>
                <?=$intro ?>
                        </div>
                    </div>
                    <div class="">
                            <p><?=$contenu ?></p>
                    </div>
                </div>
                

                
                
            </div><!--/blog-->

			
        </div><!--/span9-->

        <!-- Right Sidebar -->
    	<div class="span4">
        	<!-- Photo Stream -->
        	<div class="headline"><h3>Liste des actualités</h3></div>
            
              <?php 
    foreach ($actualites as $actualite) {
    $media=$actualite->image;
    $titre=$actualite->titre;
    $resume=$actualite->resume;
    $id_article=$actualite->id_article;
      

      echo '
        <div class="span12 booking-blocks">
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

        	
        </div><!--/span3-->
    </div><!--/row-fluid-->        
</div><!--/container-->	