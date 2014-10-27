	<?php 
		echo form_open_multipart('admin/formationManage');
		foreach ($categorie as $donnees) {
			$liste[$donnees->id_categorie]=$donnees->libelle_categorie;
			//$id_categorie=$donnees->id_categorie;
			//$libelle_categorie=$donnees->libelle_categorie;
		}
		$bouton = array('name' =>'sendFormation' , 'id' =>'sendFormation' ,'class' =>'btn-u pull-right','value'=>'Enregistrer' );
		$theme = array('name' => 'theme','id' =>'theme' ,'placeholder' => 'theme','class' =>'span12 border-radius-none'  );
		$lieu = array('name' => 'lieu','id' =>'lieu' ,'placeholder' => 'lieu','class' =>'span12 border-radius-none'  );
		$categorie = array('name' => 'libelle_categorie','id' =>'libelle_categorie' ,'placeholder' => 'Categorie','class' =>'span12 border-radius-none'  );
		//$categorie = array('id_categorie' => $id_categorie );
		$contenu = array('name' => 'description','id' =>'description' ,'placeholder' => 'Details formation','class' =>'summernote span12 border-radius-none '  );
		$etat = array('name' => 'etat','id' =>'etat' ,'placeholder' => 'etat','class' =>'span12 border-radius-none'  );
		$date_debut = array('name' => 'date_debut','id' =>'date_debut' ,'placeholder' => 'date_debut','class' =>'span12 border-radius-none'  );
		$date_fin = array('name' => 'date_fin','id' =>'date_fin' ,'placeholder' => 'date_fin','class' =>'span12 border-radius-none'  );
		$image = array('name' => 'image','id' =>'image' ,'placeholder' => 'image','class' =>'span12 border-radius-none ','type'=>'file'  );
	echo '<div class="span12">
	<div class="headline"><h3>Gestion  des formations</h3></div>';
	   // echo form_hidden($categorie);
		echo form_dropdown('id_categorie',$liste);
	    echo form_input($image);
	    echo form_input($theme);
	    echo form_input($lieu);
	    echo form_input($date_debut);
	    echo form_input($date_fin);
	    echo '<div class=" ">'.form_textarea($contenu).'</div>';
	    echo form_dropdown('etat',array('1'=>'Actif','0'=>'Desactiver'));
	    echo form_submit($bouton);
	    echo form_close();
	?>


</div>