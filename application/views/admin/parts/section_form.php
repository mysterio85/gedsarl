<div class="span12">
	<div class="headline"><h3>Gestion des sections</h3></div>
	<?php 
		
		echo form_open('index.php/admin/section');
		$section = array('name' => 'libelle_section','id' =>'libelle_section' ,'placeholder' => 'Section','class' =>'span12 border-radius-none'  );
		$bouton = array('name' =>'send' , 'id' =>'send' ,'class' =>'btn-u pull-right','value'=>'Enregistrer' );
	    echo form_label('Libelle de la section','section'); 
	    echo form_error('libelle_section'); 
	    echo form_input($section);
	    echo form_submit($bouton);
	    echo form_close();
	?>
</div>