<?php

	$this->load->view('parts/slideshow');
	$this->load->view('parts/categorie-produits');
?>	
	<div class="container">
	    <div class="row-fluid">
	        <?php
	        $this->load->view('parts/formation');
	        $this->load->view('parts/showroom');
	        ?>
	    </div>
	</div>

<?php
	$this->load->view('parts/bottom.php');
	
?>
