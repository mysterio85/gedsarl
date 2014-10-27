<div class="headline"><h3>Liste des Slideshows</h3></div>
<?php
$this->table->set_heading('#', 'Image', 'Libelle Categorie', 'Titre', 'Lien', 'Description',   'Etat','Action');
foreach ($slideshow as $donnees) {
   $this->table->add_row(
                    $donnees->id_slideshow, 
                    img('slideshows/'.$donnees->image,'','50px','50px'),
                    $donnees->libelle_categorie,
                    $donnees->titre,
                    $donnees->lien,
                    $donnees->description,
                    $donnees->etat,
                   '<a href="#" class="btn btn-success btn-mini"><i class="icon-white icon-eye-open"></i> Detail</a>
                    <a href="#" class="btn btn-info btn-mini"><i class="icon-white icon-pencil"></i> Modifier</a>
                    <a href="#" class="btn btn-danger btn-mini"><i class="icon-white icon-remove"></i> Supprimer</a>');

}
echo $this->table->generate();
?>
