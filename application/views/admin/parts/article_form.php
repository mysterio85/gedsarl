
	<?php 
		echo form_open_multipart('admin/articleManage');
		foreach ($categorie as $donnees) {
			//$liste[$donnees->id_categorie]=$donnees->libelle_categorie;
			$id_categorie=$donnees->id_categorie;
			$libelle_categorie=$donnees->libelle_categorie;
		}
		$bouton = array('name' =>'sendArticle' , 'id' =>'sendArticle' ,'class' =>'btn-u pull-right','value'=>'Enregistrer' );
		$titre = array('name' => 'titre','id' =>'titre' ,'placeholder' => 'titre','class' =>'span12 border-radius-none'  );
		$categorie = array('id_categorie' => $id_categorie );
		$contenu = array('name' => 'contenu','id' =>'contenu' ,'placeholder' => 'Article','class' =>'summernote span12 border-radius-none'  );
		$etat = array('name' => 'etat','id' =>'etat' ,'placeholder' => 'etat','class' =>'span12 border-radius-none'  );
		$resume = array('name' => 'resume','id' =>'resume' ,'placeholder' => 'Resume','class' =>'span12 border-radius-none'  );
		$image = array('name' => 'image','id' =>'image' ,'placeholder' => 'image','class' =>'span12 border-radius-none ','type'=>'file'  );
	echo '<div class="span12">
	<div class="headline"><h3>Gestion  '.$libelle_categorie.'</h3></div>';
	    echo form_hidden($categorie);
	    echo form_input($image);
	    echo form_input($titre);
	    echo form_input($resume);
	    echo form_textarea($contenu);
	    echo form_dropdown('etat',array('1'=>'Actif','0'=>'Desactiver'));
	    echo form_submit($bouton);
	    echo form_close();
	?>
</div>