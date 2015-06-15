<?php
class model_seller extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function tambahseller($data){
		return $this->db->insert('seller', $data);
	}
	
	#cek username
	public function cekuname($uname){
		$query	= $this->db->get_where('seller', array('email'=>$uname));
		
		return $query->num_rows();
	}
	
	function login($data){
		$query	= $this->db->get_where('seller', $data);
		
		return $query;
	}
}