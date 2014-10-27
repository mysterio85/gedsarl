<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller{


	//Constructeur de la classe
	public function __construct(){
		parent::__construct();
		//Chargement de models
		$this->load->model('crud_modele','dataManager');
		//$this->output->enable_profiler(TRUE);
		
	}
	

	/*
	** Méthode gérant la page d'accueil du site 
	*/
	public function index(){

		$data['title'] ="GED SARL | Accueil"; 

		// recuperation des donnees pour le slideshow header
		$headercondition=array(
				'slideshow.id_categorie'=>1,
				);
		$data['headers']=$this->dataManager->getList('slideshow','','',$headercondition,'','id_slideshow DESC');

		// recuperation des donnees pour le slideshow liste des categories de produits
		$cateProduitcondition=array(
				'slideshow.id_categorie'=>3,
				);
		$data['categorie_produits']=$this->dataManager->getList('slideshow','','',$cateProduitcondition,'','id_slideshow DESC');

		// recuperation des donnees pour le slideshow liste des photos showroom
		$showroomcondition=array(
				'slideshow.id_categorie'=>4,
				);
		$data['showrooms']=$this->dataManager->getList('slideshow','','',$showroomcondition,'','id_slideshow DESC');// recuperation des donnees pour le slideshow liste des photos showroom
		
		// liste des slideshows client 
		$sclientcondition=array(
				'slideshow.id_categorie'=>2,
				);
		$data['clients']=$this->dataManager->getList('slideshow','','',$sclientcondition,'','id_slideshow DESC');


		// liste des formations 
		$data['formations']=$this->dataManager->getList('formation','','','','','id_formation DESC');

		// liste des actualites 
		$actualitecondition=array(
				'article.id_categorie'=>6,
				);
		$data['actualites']=$this->dataManager->getList('article','','',$actualitecondition,'','id_article DESC');


		$this->load->view('templates/header', $data);
		$this->load->view('pages/accueil', $data);
		$this->load->view('templates/footer', $data);

	}



	/*
	** Méthode gérant la page d'accueil du site 
	*/

	public function presentation(){
		$data['title'] ="GED SARL | Presentation";
		// liste des actualites 
		$actualitecondition=array(
				'article.id_article'=>3,
				);
		$data['presentations']=$this->dataManager->getList('article','','',$actualitecondition,'','id_article DESC');

		// liste des actualites 
		$actualitecondition=array(
				'article.id_categorie'=>6,
				);
		$data['actualites']=$this->dataManager->getList('article','','',$actualitecondition,'','id_article DESC');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/presentation', $data);
		$this->load->view('templates/footer', $data);
	}


	/*
	** Méthode gérant la page de notre politique qualité 
	*/

	public function notre_politique_qualite(){
		$data['title'] ="GED SARL | Presentation";
		// liste des actualites 
		$actualitecondition=array(
				'article.id_article'=>4,
				);
		$data['politiques']=$this->dataManager->getList('article','','',$actualitecondition,'','id_article DESC');

		// liste des actualites 
		$actualitecondition=array(
				'article.id_categorie'=>6,
				);
		$data['actualites']=$this->dataManager->getList('article','','',$actualitecondition,'','id_article DESC');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/politique', $data);
		$this->load->view('templates/footer', $data);
	}
	
	/*
	** Méthode gérant la page des mentions legales 
	*/

	public function mentions_legales(){
		$data['title'] ="GED SARL | Presentation";
		// liste des actualites 
		$actualitecondition=array(
				'article.id_categorie'=>6,
				);
		$data['actualites']=$this->dataManager->getList('article','','',$actualitecondition,'','id_article DESC');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/presentation', $data);
		$this->load->view('templates/footer', $data);
	}
	
	
	/*
	** Méthode gérant la page des services
	*/

	public function services(){
		$data['title'] ="GED SARL | Presentation";
		// liste des actualites 
		$servicecondition=array(
				'article.id_categorie'=>8,
				);
		$data['services']=$this->dataManager->getList('article','','',$servicecondition,'','id_article DESC');

// liste des actualites 
		$actualitecondition=array(
				'article.id_categorie'=>6,
				);
		$data['actualites']=$this->dataManager->getList('article','','',$actualitecondition,'','id_article DESC');

		$this->load->view('templates/header', $data);
		$this->load->view('pages/services', $data);
		$this->load->view('templates/footer', $data);
	}

	/*
	** Méthode gérant la page des actualites
	*/

	public function actualite(){

		$data['title'] ="GED SARL | Presentation";
		// liste des actualites 
		$actualitecondition=array(
				'article.id_categorie'=>6,
				);
		$data['actualites']=$this->dataManager->getList('article','','',$actualitecondition,'','id_article DESC');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/actualite', $data);
		$this->load->view('templates/footer', $data);
	}

	public function lire_article($id){
		$data['title'] ="GED SARL | Presentation";
		// liste des actualites 
		$actualitecondition=array(
				'article.id_categorie'=>6,
				);
		$data['actualites']=$this->dataManager->getList('article','','',$actualitecondition,'','id_article DESC');
		// liste des actualites 
		$articleCondition=array(
				'article.id_categorie'=>6,
				'article.id_article'=>$id
				);
		$data['articles']=$this->dataManager->getList('article','','',$articleCondition,'','id_article DESC');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/lire_article', $data);
		$this->load->view('templates/footer', $data);
	}		

	/*
	** Méthode gérant la page des actualites
	*/

	public function nous_contacter(){
		$data['title'] ="GED SARL | Presentation";
		// liste des actualites 
		$actualitecondition=array(
				'article.id_categorie'=>6,
				);
		$data['actualites']=$this->dataManager->getList('article','','',$actualitecondition,'','id_article DESC');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/contact', $data);
		$this->load->view('templates/footer', $data);
	}		
	

	/*
	** Méthode gérant la page des actualites
	*/

	public function demander_devis(){
		// $data['title'] ="GED SARL | Presentation";
		// $actualitecondition=array(
		// 		'article.id_categorie'=>6,
		// 		);
		// $data['actualites']=$this->dataManager->getList('article','','',$actualitecondition,'','id_article DESC');
		// $this->load->view('templates/header', $data);
		// $this->load->view('pages/presentation', $data);
		// $this->load->view('templates/footer', $data);
		// j essai mon github
	}
	
}