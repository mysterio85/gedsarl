<div class="container">		
	<div class="row-fluid">
    	<div class="span3">
            <?php $this->load->view('admin/parts/menu'); ?>
        </div><!--/span3-->
        
    	<div class="span9">
            <!-- Formulaire des esections -->
            <?php $this->load->view('admin/parts/categorie_form'); ?>
            <!-- Liste des section -->
            <?php $this->load->view('admin/parts/categorie_tab'); ?>            
        </div><!--/span9-->
    </div><!--/row-fluid-->   
</div>