<div class="container">
	<!-- Recent Works -->
    <div class="headline"><h3>Les catégories de produits</h3></div>
    <div class="row-fluid margin-bottom-40">
        
        <ul id="list" class="bxslider recent-work">
            <?php 
                foreach ($categorie_produits as $produit) {
                 
                 echo '
                    <li><a target="_blank" href="'
                    .$produit->lien
                    .'"><em class="overflow-hidden">'
                    .img('slideshows/mini/'.$produit->image,'','','')
                    .'</em><span><strong>'
                    .$produit->titre
                    .'</strong><i>'
                    .$produit->description
                    .'</i></span></a></li>
                 ';  
                }
            ?>

            <!--<li>
                <a href="#">
                	<em class="overflow-hidden"><img src="assets/img/categorie/onduleur.jpg" alt="" /></em>
                    <span>
                        <strong>Onduleurs (UPS)<br><br></strong>
                        <i>La puissance UPS, à votre service</i>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="assets/img/categorie/interrupteur.jpg" alt="" /></em>
                    <span>
                        <strong>Interrupteurs<br><br></strong>
                        <i>Appareillages au Design affirmé</i>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="assets/img/categorie/coffrets.jpg" alt="" /></em>
                    <span>
                        <strong>Coffrets, Armoires de distribution, protection et mesure</strong>
                        <i>Les gammes s'offrent à vous </i>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="assets/img/categorie/vdi.jpg" alt="" /></em>
                    <span>
                        <strong>Système VDI - LCS²<br><br></strong>
                        <i>Voix, Données, Images chez Legrand </i>
                    </span>
                </a>
            </li> -->
            
        </ul>        
	</div><!--/row-->
	<!-- //End Recent Works -->
</div>