<?php
class admin_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}
	private $table="section";

	// Methode pour enregistrer une section
	public function ajouter_section($libelle_section){
		if(empty($libelle_section) OR (!is_string($libelle_section))){
			return false;
		}
		return $this->db
					->set( array('libelle_section' =>$libelle_section))
					->insert($this->table);
	}
/*
Methode générique pour enregistrement
**/
	public function save($table,$data=array()){		
		return $this->db
					->set($data)
					->insert($table);
	}


	public function getList($table,$join='',$champs='*',$conditions='',$limit='',$order=''){

			 $this->db
			 ->select($champs)
			 ->from($table);
			 if(is_array($join)){
			 	extract($join);
			 	$this->db->join($tableJoin,$conditionsJoin);
			 }

			 // recuperation des conditions
			 if(is_array($conditions)){
			 	foreach ($conditions as $key => $value) {
			 	$this->db->where($key,$value);
			 }
			 }
			 
			// if($conditions!=''){$this->db->where($conditions);}
			return $this->db->order_by($order)
			 //->limit($limit)
			 ->get()
			 ->result();
	}


}
?>