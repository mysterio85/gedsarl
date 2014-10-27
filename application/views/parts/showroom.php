  <div class="span6">
            <div class="headline"><h3>Showroom du VGE</h3></div>
			<div id="myCarousel1" class="carousel slide">
                <div class="carousel-inner">
                  <?php 
                    $i=1;
                    foreach ($showrooms as $showroom) {
                      $active =($i==1 ) ? "active" :  "";
                      echo '
                        <div class="item '.$active.'">'
                        .img('slideshows/'.$showroom->image,'','','')
                        .'<div class="carousel-caption"><h4>'
                        .$showroom->titre 
                        .'<h4><p>'
                        .$showroom->description
                        .' </p></div>
                        </div>
                      ';
                      $i++;
                    }
                   ?>
                    <!--<div class="item active">
                      <img src="assets/img/carousel/5.jpg" alt="" />
                      <div class="carousel-caption">
                        <h4>cedentium quidem ulli parcendo</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta.</p>
                      </div>
                    </div>

                    <div class="item">
                      <img src="assets/img/carousel/2.jpg" alt="" />
                      <div class="carousel-caption">
                        <h4>cedentium quidem ulli parcendo</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta.</p>
                      </div>
                    </div>

                    <div class="item">
                      <img src="assets/img/carousel/3.jpg" alt="" />
                      <div class="carousel-caption">
                        <h4>cedentium quidem ulli parcendo</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta.</p>
                      </div>
                    </div>-->
                </div>

                <div class="carousel-arrow">
                    <a class="left carousel-control" href="#myCarousel1" data-slide="prev"><i class="icon-angle-left"></i></a>
                    <a class="right carousel-control" href="#myCarousel1" data-slide="next"><i class="icon-angle-right"></i></a>
                </div>
      </div>
  </div><!--/span6-->