<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//Chargement de models
		$this->load->model('admin_model','adminManager');
		//$this->output->enable_profiler(TRUE);
		
	}

	public function index($page='admin'){
	$this->login();
	}

	public function login(){
	$data['title'] = 'Administration | Login';
	$this->load->view('templates/header', $data);
	$this->load->view('pages/admin', $data);
	$this->load->view('templates/footer', $data);
	}



	public function dashboard(){
		$data['title'] = 'Administration | Login';
		$this->load->view('templates/header', $data);
		$this->load->view('admin/pages/dashboard', $data);
		$this->load->view('templates/footer', $data);
	}

	public function section(){
		
		$data['title'] = 'Administration | Login';
		$data['section']=$this->adminManager->getList('section','','','','','id_section DESC');
		// si le formulaire est envoyé
		if($this->input->post('send')){
			
			$this->form_validation->set_rules('libelle_section','section', 'trim|required|xss_clean');
			$this->form_validation->set_error_delimiters('<p class="alert">', '</p>');
			if(($this->form_validation->run())){
				$this->adminManager->ajouter_section($this->input->post('libelle_section'));
				$data['title'] = 'Administration | Login';
				$this->load->view('templates/header', $data);
				$this->load->view('admin/pages/section', $data);
				$this->load->view('templates/footer', $data);
				
			} else{
				$this->form_validation->set_message('rule', 'Error Message');
				$data['title'] = 'Administration | Login';
				$this->load->view('templates/header', $data);
				$this->load->view('admin/pages/section', $data);
				$this->load->view('templates/footer', $data);
			}
		} else {
		$data['title'] = 'Administration | Login';

		$this->load->view('templates/header', $data);
		$this->load->view('admin/pages/section', $data);
		$this->load->view('templates/footer', $data);
		}
		
		//Verifications lors du post du formulaire
		
	}

	public function categorie(){
		// recuperation de la liste des section'
		$data['section']=$this->adminManager->getList('section','','','','','id_section DESC');
		//$join="('section','categorie.id_section = section.id_section')";
		$join=array(
			'tableJoin'=>'section',
			'conditionsJoin'=>"categorie.id_section = section.id_section"
			);
		$data['categorie']=$this->adminManager->getList('categorie',$join,'','','','id_categorie DESC');
		$data['title'] = 'Administration | Login';
		$this->load->view('templates/header', $data);
		$this->load->view('admin/pages/categorie', $data);
		$this->load->view('templates/footer', $data);
	}

	public function categorieManage(){
		//si le formulaire a ete envoye 
		if($this->input->post('sendCategorie')){
			
			// les regles de validation du formulaire 
			$this->form_validation->set_rules('libelle_categorie','Categorie', 'trim|required|xss_clean');
			$this->form_validation->set_rules('id_section','Section', 'trim|required|xss_clean|integer');
			$this->form_validation->set_error_delimiters('<p class="alert">', '</p>');

			// si les donnees sont valides 
			if ($this->form_validation->run()) {
				//recuperation des donnees a enregistrer
				$champs=array(
					'id_section'=>$this->input->post('id_section'),
					'libelle_categorie'=>$this->input->post('libelle_categorie'),
					);
				
				$this->adminManager->save('categorie',$champs);
				//$this->categorie();
				redirect('admin/categorie');
			}
			//$this->categorie();
		}
	}


	public function slideshow($id_categorie){
		//si aucun parametre n'est passe rediriger  vers le tableau de board
		if ( (empty($id_categorie)) OR (!isset($id_categorie)) ){
			redirect('admin');
		}
		// recuperation de la liste des categories'
		$condition=array(
			'categorie.id_categorie'=>$id_categorie,
			);
		$data['categorie']=$this->adminManager->getList('categorie','','',$condition,'','id_categorie DESC');
		// recuperation de la liste des slideshow
		$join=array(
			'tableJoin'=>'categorie',
			'conditionsJoin'=>"categorie.id_categorie = slideshow.id_categorie"
			);
		$data['slideshow']=$this->adminManager->getList('slideshow',$join,'',$condition,'','id_slideshow DESC');
		
		$data['title'] = 'Administration | Login';
		$this->load->view('templates/header', $data);
		$this->load->view('admin/pages/slideshow', $data);
		$this->load->view('templates/footer', $data);

	}


/**
 * Cette fonction sert à gérer l'enregistrement des slidesows et upload de fichier en base de données
 * un commentaire
 *
 * @return void Fait une redirection selon la suite de la requete
*/

	public function slideshowManage(){
		//tableau des tailles des differents categories de slideshw

		if($this->input->post('sendSlideshow')){

			// verifier les champs obligatoires
			$this->form_validation->set_rules('titre','Titre','trim|required|xss_clean');
			$this->form_validation->set_rules('id_categorie','Categorie','trim|required|xss_clean|integer');
			$this->form_validation->set_rules('description','Description','trim|required|xss_clean');
			$this->form_validation->set_rules('lien','Lien','trim|required|xss_clean');
			$this->form_validation->set_rules('etat','etat','trim|required|xss_clean');

			$this->form_validation->set_error_delimiters('<p class="alert">', '</p>');
			//$this->form_validation->set_rules('','','');

			// si les champs repondent aux criteres 
			if($this->form_validation->run()){
				
				// recuprer les donnees 
				$champs['titre']=$this->input->post('titre');
				$champs['lien']=$this->input->post('lien');
				$champs['description']=$this->input->post('description');
				$champs['etat']=$this->input->post('etat');
				$champs['id_categorie']=$this->input->post('id_categorie');

				// tailles des miniatures en fonction de la categorie [à ameliorer]
			if ($champs['id_categorie']==1) {$height=328; $width=450;}
			if ($champs['id_categorie']==2) {$height=144; $width=144;}
			if ($champs['id_categorie']==3) {$height=183; $width=288;}
			if ($champs['id_categorie']==4) {$height=365; $width=575;}
			
			// veri

				// tentative de upload
				//parametre de configuration disponible pour le upload

				$name=time();
				$types="gif|jpg|png";
				$source= "./assets/images/slideshows/";
				$dest= "./assets/images/slideshows/mini/";
				//$width=100;
				//$height=100;

				// upload 
				if ($imageName=$this->uploadImage($source,$types,$name)) {
					// creation miniature 
					if ($this->createThumbnails($source,$dest,$imageName,$width,$height)) {
						// si uplodad et creation de miniature termine insertion des donnees en base de donnees 
						$champs['image']=$imageName;
						$this->adminManager->save('slideshow',$champs);
						redirect('admin/slideshow/'.$champs['id_categorie']);
						//$this->article();
						
					}
				}

				/*$name=time();
				$configuration['upload_path'] = "./assets/images/slideshows/";
				$configuration['allowed_types'] = 'gif|jpg|png';
				$configuration['max_size']	= '100';
				$configuration['file_name']	= $name;

				$this->load->library('upload',$configuration);
				if(!$this->upload->do_upload('image')){
					$error = array('error' => $this->upload->display_errors());
					$this->slideshow();
       				 
				} else{

					$detail=$this->upload->data();
				
				// recuperer le nouveau nom de l image
				    $champs['image']=$detail['file_name'];

				// si uplodad termine insertion des donnees en base de donnees 
				$this->adminManager->save('slideshow',$champs);
				redirect('admin/slideshow/'.$champs['id_categorie']);
				//$this->slideshow($champs['id_categorie']);
				
				}
				*/

			} else {
				// si les valeurs envoyes ne sont pas normalisées 
				redirect('admin/slideshow/'.$champs['id_categorie']);
			}

		}

	}



	public function article($id_categorie){
		//si aucun parametre n'est passe rediriger  vers le tableau de board
		if ( (empty($id_categorie)) OR (!isset($id_categorie)) ){
			redirect('admin');
		}
		// recuperation de la liste des categories'
		$condition=array(
			'categorie.id_categorie'=>$id_categorie,
			);
		$data['categorie']=$this->adminManager->getList('categorie','','',$condition,'','id_categorie DESC');
		// recuperation de la liste des slideshow
		$join=array(
			'tableJoin'=>'categorie',
			'conditionsJoin'=>"categorie.id_categorie = article.id_categorie"
			);
		$data['article']=$this->adminManager->getList('article',$join,'',$condition,'','id_article DESC');
		$data['title'] = 'Administration | Login';
		$this->load->view('templates/header', $data);
		$this->load->view('admin/pages/article', $data);
		$this->load->view('templates/footer', $data);

	}

	public function articleManage(){
		if($this->input->post('sendArticle')){

			// verifier les champs obligatoires
			$this->form_validation->set_rules('titre','Titre','trim|required|xss_clean');
			$this->form_validation->set_rules('id_categorie','Categorie','trim|required|xss_clean|integer');
			$this->form_validation->set_rules('contenu','Article','trim|required|xss_clean');
			$this->form_validation->set_rules('resume','Resume','trim|required|xss_clean');
			$this->form_validation->set_rules('etat','etat','trim|required|xss_clean');

			$this->form_validation->set_error_delimiters('<p class="alert">', '</p>');
			//$this->form_validation->set_rules('','','');

			// si les champs repondent aux criteres 
			if($this->form_validation->run()){
				
				// recuprer les donnees 
				$champs['titre']=$this->input->post('titre');
				$champs['resume']=$this->input->post('resume');
				$champs['contenu']=$this->input->post('contenu');
				$champs['etat']=$this->input->post('etat');
				$champs['id_categorie']=$this->input->post('id_categorie');
				$champs['date_creation']=date("Y/m/d");

				// tentative de upload
				//parametre de configuration disponible pour le upload
				$name=time();
				$types="gif|jpg|png";
				$source= "./assets/images/article/";
				$dest= "./assets/images/article/mini/";
				$width=100;
				$height=100;

				// upload 
				if ($imageName=$this->uploadImage($source,$types,$name)) {
					// creation miniature 
					if ($this->createThumbnails($source,$dest,$imageName,$width,$height)) {
						// si uplodad et creation de miniature termine insertion des donnees en base de donnees 
						$champs['image']=$imageName;
						$this->adminManager->save('article',$champs);
						redirect('admin/article/'.$champs['id_categorie']);
						//$this->article();
						
					}
				}
				
				
				/*$configuration['upload_path'] = "./assets/images/article/";
				$configuration['allowed_types'] = 'gif|jpg|png';

				$configuration['max_size']	= '1000';
				$configuration['file_name']	= $name;

				$this->load->library('upload',$configuration);
				if(!$this->upload->do_upload('image')){
					$error = array('error' => $this->upload->display_errors());
					$this->article();
       				 
				} else{

					$detail=$this->upload->data();
				
				// recuperer le nouveau nom de l image
				    $champs['image']=$detail['file_name'];

				// si uplodad termine insertion des donnees en base de donnees 
				$this->adminManager->save('article',$champs);
				$this->article();
				
				}*/

			} else {
				// si les valeurs envoyes ne sont pas normalisées 
				redirect('admin/article/'.$this->input->post('id_categorie'));
				//$this->article();
			}

		}
	}

	public function uploadImage($destination,$types,$name){
		// parametres de confiuration de l'upload d 'image
		$configuration['upload_path'] = $destination;
		$configuration['allowed_types'] = $types;
		$configuration['max_size']	= '1000';
		$configuration['file_name']	= $name;
		// chargement de la librairie de upload 
		$this->load->library('upload',$configuration);
		// test si le upload a reussi ou pas 
		if(!$this->upload->do_upload('image')){
					$error = array('error' => $this->upload->display_errors());
					return FALSE; 
				} else{
					$detail=$this->upload->data();
					$imageName=$detail['file_name'];
					return $imageName;			
				}

		
	}

	public function createThumbnails($source,$destination,$name,$width,$height){

		// le sdifferents parametre de la creation de miniature
		$config['image_library'] = 'gd2';
		$config['source_image'] = $source.'/'.$name;
		$config['new_image'] = $destination.$name;
		$config['create_thumb'] = FALSE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = $width;
		$config['height'] = $height;
		$config['x_axis'] = '100';
		$config['y_axis'] = '60';
		//$config['master_dim'] = 'auto';
		$upload_data = $this->upload->data();
		$dim = (intval($upload_data["image_width"]) / intval($upload_data["image_height"])) - ($config['width'] / $config['height']);
		$config['master_dim'] = ($dim > 0)? "height" : "width";
	
		// chargement de la librairie de manipulation d'images 
		$this->load->library('image_lib', $config);
		//$this->image_lib->resize();
		if ( ! $this->image_lib->resize()){
			$this->image_lib->crop();
			return TRUE;
		} else {
			return TRUE;
		}

	}

	// methode de la formation*

	public function formation(){
		//recuperation des categories pour le dropdown
		// recuperation de la liste des categories'
		$condition=array(
			'categorie.id_section'=>4,
			);
		$data['categorie']=$this->adminManager->getList('categorie','','',$condition,'','id_categorie DESC');
		$data['titre']="Gestion de la formation";
		//recuperer la liste des formations 
		$data['formation']=$this->adminManager->getList('formation','','','','','id_formation DESC');

		$this->load->view('templates/header');
		$this->load->view('admin/pages/formation',$data);
		$this->load->view('templates/footer',$data);
	}

	// 
	public function formationManage(){
		if($this->input->post('sendFormation')){

			// verifier les champs obligatoires
			$this->form_validation->set_rules('theme','Theme','trim|required|xss_clean');
			$this->form_validation->set_rules('lieu','Lieu','trim|required|xss_clean');
			$this->form_validation->set_rules('id_categorie','Categorie','trim|required|xss_clean|integer');
			$this->form_validation->set_rules('description','Article','trim|required|xss_clean');
			$this->form_validation->set_rules('date_debut','Date de debut','trim|required|xss_clean');
			$this->form_validation->set_rules('date_fin','Date de fin','trim|required|xss_clean');
			$this->form_validation->set_rules('etat','etat','trim|required|xss_clean');

			$this->form_validation->set_error_delimiters('<p class="alert">', '</p>');
			//$this->form_validation->set_rules('','','');

			// si les champs repondent aux criteres 
			if($this->form_validation->run()){
				
				// recuprer les donnees 
				$champs['theme']=$this->input->post('theme');
				$champs['description']=$this->input->post('description');
				$champs['lieu']=$this->input->post('lieu');
				$champs['id_categorie']=$this->input->post('id_categorie');
				$champs['etat']=$this->input->post('etat');
				$champs['date_debut']=$this->input->post('date_debut');
				$champs['date_fin']=$this->input->post('date_fin');

				// tentative de upload
				//parametre de configuration disponible pour le upload
				$name=time();
				$types="gif|jpg|png";
				$source= "./assets/images/formation/";
				$dest= "./assets/images/formation/mini/";
				$width=100;
				$height=100;

				// upload 
				if ($imageName=$this->uploadImage($source,$types,$name)) {
					// creation miniature 
					if ($this->createThumbnails($source,$dest,$imageName,$width,$height)) {
						// si uplodad et creation de miniature termine insertion des donnees en base de donnees 
						$champs['image']=$imageName;
						$this->adminManager->save('formation',$champs);
						redirect('admin/formation/');
						//$this->article();
						
					}
				}
				
			} else {
				// si les valeurs envoyes ne sont pas normalisées 
				redirect('admin/article/');
				//$this->article();
			}

		}
	}
	
}
?>