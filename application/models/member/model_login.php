<?php
class model_login extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	#validasi login
	function loginval($username, $password){
		
		$query	= $this->db->query('
			SELECT user_id, password, id_member 
			FROM member 
			WHERE user_id = "$username" AND password = md5("$password")');
		
		if($query->num_rows() == 1){
			return true;
		}
		else{
			return "cuk";
		}
	}
	
	function data_detail_login($username, $password){
		$query	= $this->db->query('
			SELECT user_id, password, id_member 
			FROM member 
			WHERE user_id = "$username" AND password = md5("$password")');
		
		
		return $query->row_array();
	}
	
}