<div class="headline"><h3>Liste des Articles</h3></div>
<?php
$this->table->set_heading('#', 'Image', 'Dates','Theme', 'Lieu', 'Description',  'Etat','Action');
foreach ($formation as $donnees) {
   $this->table->add_row(
                    $donnees->id_formation, 
                    img('formation/'.$donnees->image,'','50px','50px'),
                    'Debut :'.$donnees->date_debut.'<br>Fin : '. $donnees->date_fin,
                    $donnees->theme,
                    $donnees->lieu,
                    $donnees->description,
                    $donnees->etat,
                   '<a href="#" class="btn btn-success btn-mini"><i class="icon-white icon-eye-open"></i> Detail</a>
                    <a href="#" class="btn btn-info btn-mini"><i class="icon-white icon-pencil"></i> Modifier</a>
                    <a href="#" class="btn btn-danger btn-mini"><i class="icon-white icon-remove"></i> Supprimer</a>');

}
echo $this->table->generate();
?>