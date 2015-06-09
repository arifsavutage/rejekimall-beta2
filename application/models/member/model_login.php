<?php
class model_login extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	#validasi login
	function loginval($data){
		
		$query	= $this->db->get_where('member', $data);
		
		return $query;
	}
	
	function data_detail_login($username, $password){
		$query	= $this->db->query('
			SELECT user_id, password, id_member 
			FROM member 
			WHERE user_id = "$username" AND password = md5("$password")');
		
		
		return $query->row_array();
	}
	
}