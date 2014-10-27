<!--=== Footer ===-->
<div class="footer">
	<div class="container">
		<div class="row-fluid">
			<div class="span4">
                
	            <!-- Monthly Newsletter -->
                                <div class="headline"><h3>Newsletter</h3></div>	
				<p>Souscrivez pour rester informer et profiter d'offres exceptionnelles</p>
				<form class="form-inline" >
					<div class="input-append">
						<input type="text" placeholder="Addresse Email" class="input-medium" />
						<button class="btn-u">Souscrire</button>
					</div>
				</form>
                        
			</div>

			<!--Zone de l'actualite-->	
			
			<div class="span4">
                <div class="posts">
                    <div class="headline"><h3>Actualité & informations</h3></div>
	                    <?php 
	                    	foreach ($actualites as $actualite) {
	                    		
	                    		echo'
	                    			<dl class="dl-horizontal">
				                        <dt><a href="#">'
				                        .img('article/'.$actualite->image,'','','','lft-img-margin pull-left img-width-200')
				                        .'</dt>
				                        <dd>
				                            <p><a href="#">'
				                            .$actualite->titre.'<br>'
				                            .$actualite->resume
				                            .'</a></p> 
				                        </dd>
	                    			</dl>		
	                    		';
	                    	}
	                     ?>
                    	<!--<dl class="dl-horizontal">
	                        <dt><a href="#"><img src="<?php //echo base_url()?>assets/img/sliders/elastislide/6.jpg" alt="" /></a></dt>
	                        <dd>
	                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p> 
	                        </dd>
	                    </dl>
	                    <dl class="dl-horizontal">
	                        <dt><a href="#"><img src="<?php //echo base_url()?>assets/img/sliders/elastislide/6.jpg" alt="" /></a></dt>
	                        <dd>
	                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p> 
	                        </dd>
	                    </dl>-->
                    
                </div>
			</div>


			<!--/span4-->

			<div class="span4">
	            <!-- Monthly Newsletter -->
		        <div class="headline"><h3>Contacts</h3></div>	
                <address>
					Côte d´Ivoire - Abidjan - Marcory Zone4 <br />
					Phone: (225)21.34.14.40 / 21.25.88.97 <br />
                                        JAZZ Legrand TEL:(225)21.35.13.20 <br/>
					Fax: (225)21.25.83.06 <br />
                                        Mobile:(225)07.25.35.25 / (225)08.00.14.74 <br/>
					Email: <a href="mailto:commercial@gedsarl.com" class="">commercial@gedsarl.com</a>
                </address>
                                    
                                    
                
			</div><!--/span4-->
		</div><!--/row-fluid-->	
	</div><!--/container-->	
</div><!--/footer-->	