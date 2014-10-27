<div class="headline"><h3>Liste des Articles</h3></div>
<?php
$this->table->set_heading('#', 'Image', 'Date creation','Libelle Categorie', 'Titre', 'Resume',  'Etat','Action');
foreach ($article as $donnees) {
   $this->table->add_row(
                    $donnees->id_article, 
                    img('article/'.$donnees->image,'','50px','50px'),
                    $donnees->date_creation,
                    $donnees->libelle_categorie,
                    $donnees->titre,
                    $donnees->resume,
                    $donnees->etat,
                   '<a href="#" class="btn btn-success btn-mini"><i class="icon-white icon-eye-open"></i> Detail</a>
                    <a href="#" class="btn btn-info btn-mini"><i class="icon-white icon-pencil"></i> Modifier</a>
                    <a href="#" class="btn btn-danger btn-mini"><i class="icon-white icon-remove"></i> Supprimer</a>');

}
echo $this->table->generate();
?>