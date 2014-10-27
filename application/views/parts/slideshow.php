<div class="slider-inner">
    <div id="da-slider" class="da-slider">
         <?php 
        foreach ($headers as $header) {
            echo '
                <div class="da-slide"><h2><i>'
                .$header->titre
                .'</i> </h2><p><i>'
                    .$header->description 
                    .'</i></p>
                    <div class="da-img">'
                    .img('slideshows/'.$header->image,'','','')
                    .' </div>
                </div>
            ';
        }
         ?>
        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>        
        </nav>
    </div>
</div>