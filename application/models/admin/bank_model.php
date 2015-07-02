<?php
class Bank_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function tambah($data){
		return $this->db->insert('bank', $data);
	}
	
	function viewbank(){
		$query	= $this->db->query("
			SELECT `idbank`, `nmbank`, `norek`, `an` FROM `bank`
		");
		
		return $query->result_array();
	}
	
	function detail($idbank){
		$query	= $this->db->query("
			SELECT `idbank`, `nmbank`, `norek`, `an` 
			FROM `bank`
			WHERE idbank = ".$idbank."
		");
		
		return $query->row_array();		
	}
	
	function ubah($data){
		$this->db->where('idbank', $data['idbank']);
		return $this->db->update('bank', $data);
	}
	
	function hapus($idbank){
		$this->db->where('idbank', $idbank);
		return $this->db->delete('bank');
	}
}