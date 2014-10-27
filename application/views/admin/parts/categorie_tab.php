<div class="headline"><h3>Liste des Categories</h3></div>
<?php
$this->table->set_heading('#', 'Libelle section', 'Libelle categorie', 'Etat','Action');
foreach ($categorie as $donnees) {
   $this->table->add_row(
                    $donnees->id_categorie,
                    $donnees->libelle_section, 
                    $donnees->libelle_categorie,
                    'actif', 
                    '<a href="#" class="btn btn-success btn-mini"><i class="icon-white icon-eye-open"></i> Detail</a>
                    <a href="#" class="btn btn-info btn-mini"><i class="icon-white icon-pencil"></i> Modifier</a>
                    <a href="#" class="btn btn-danger btn-mini"><i class="icon-white icon-remove"></i> Supprimer</a>');

}
echo $this->table->generate();
?>

