<?php
class Model_city extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function getNegara(){
		$query	= $this->db->query('SELECT id_neg, nama_neg FROM negara');
		return $query->result_array();
	}
	
	public function getPropinsi(){
		$query	= $this->db->query('SELECT `id_prop`, `propinsi`, `id_neg` FROM `propinsi`');
		return $query->result_array();
	}
	
	public function getKota(){
		$query	= $this->db->query('SELECT `id_kab`, `id_prop`, `nmkab`, `id_neg` FROM `kab_kota`');
		return $query->result_array();
	}
}