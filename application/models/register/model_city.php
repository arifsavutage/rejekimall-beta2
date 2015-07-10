<?php
class Model_city extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function getNegara(){
		$query	= $this->db->query('SELECT id_neg, nama_neg FROM negara');
		return $query->result_array();
	}
}