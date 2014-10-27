<?php

class crud_modele extends CI_Model{

	public function __construct(){
		parent::__construct();
	}


	/*
Methode générique pour le crud
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