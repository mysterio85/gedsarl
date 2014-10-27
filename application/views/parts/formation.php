    	<div class="span6">
			<div class="headline"><h3>Prochaines formations</h3></div>
            <!-- Accardion -->
			<div class="accordion acc-home" id="accordion2">

                <?php
                //var_dump($formations); 
                if(!empty($formations)){
                $i=1;
                  foreach ($formations as $formation) {
                    $hauteur=($i==1) ? 'auto': '0px' ;
                    $in=($i==1) ? 'in': '' ;
                    echo '
                    <div class="accordion-group">
                      <div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse'.$formation->id_formation.'">'
                        .$formation->theme
                        .'</a></div><div id="collapse'.$formation->id_formation.'" class="accordion-body '.$in.' collapse" style="height: '.$hauteur.';"><div class="accordion-inner"><p>'
                           .img('formation/'.$formation->image,'','','','lft-img-margin pull-left img-width-200')
                          .'<br>Date debut : '.$formation->date_debut
                          .'<br>Date de fin : '.$formation->date_fin
                          .'<br>Lieu : '.$formation->lieu
                          .'<br>Description : '.$formation->description
                          .'</p></div></div></div>
                    ';
                    $i++;
                  }
                } else{ echo "<h3>Pas de formation disponible actuellement</h3>";}
                 ?>
                 <!--
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                      FORMATION 1 - THEME : La domotique Enjeux et retombées
                    </a>
                  </div>
                  <div id="collapseOne" class="accordion-body in collapse" style="height: auto;">
                    <div class="accordion-inner">
                      <p><img class="lft-img-margin pull-left img-width-200" src="assets/img/formation/1.jpg" alt="" /> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>
                    </div>
                  </div>
                </div>



                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                      FORMATION 2 - THEME : La domotique Enjeux et retombées
                    </a>
                  </div>
                  <div id="collapseTwo" class="accordion-body collapse" style="height: 0px;">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                      FORMATION 3 - THEME : La domotique Enjeux et retombées
                    </a>
                  </div>
                  <div id="collapseThree" class="accordion-body collapse" style="height: 0px;">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                      FORMATION 4 - THEME : La domotique Enjeux et retombées 
                    </a>
                  </div>
                  <div id="collapseFour" class="accordion-body collapse" style="height: 0px;">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>-->
            </div><!--/accardion-->
        </div><!--/span7-->