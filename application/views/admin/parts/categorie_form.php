<div class="span12">
	<div class="headline"><h3>Gestion des categories</h3></div>
	<?php 
		echo form_open('index.php/admin/categorieManage');
		foreach ($section as $donnees) {
			$liste[$donnees->id_section]=$donnees->libelle_section;
		}
		$bouton = array('name' =>'sendCategorie' , 'id' =>'sendCategorie' ,'class' =>'btn-u pull-right','value'=>'Enregistrer' );
		$categorie = array('name' => 'libelle_categorie','id' =>'libelle_categorie' ,'placeholder' => 'Categorie','class' =>'span12 border-radius-none'  );
	    echo form_label('section','section',array( 'class' => 'control-label')); 
	    echo form_error('libelle_section'); 
	    echo form_dropdown('id_section',$liste);
	    echo form_input($categorie);
	    echo form_submit($bouton);
	    echo form_close();
	?>
	<!--<form class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="id_section">Section</label>
			<div class="controls">
				<input class="span12 border-radius-none" id="id_section" type="text" placeholder="section" />
			</div>
		</div>
		<div class="control-group">
			 <label class="control-label">Categorie</label>
			<div class="controls">
				<input class="span12 border-radius-none" type="text" placeholder="categorie" /> 
			</div>
		</div>
                           
        <button type="submit" class="btn-u pull-right">Enregistrer</button>
    </form> -->
</div>