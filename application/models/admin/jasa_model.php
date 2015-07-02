<?php
class Jasa_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function tambah($data){
		return $this->db->insert('jasa_kirim', $data);
	}
	
	function viewjasa(){
		$query	= $this->db->query("
			SELECT `id_jasa`, `nama` FROM `jasa_kirim`
		");
		
		return $query->result_array();
	}
	
	function detailjasa($id_jasa){
		$query	= $this->db->query("
			SELECT `id_jasa`, `nama` 
			FROM `jasa_kirim`
			WHERE id_jasa = ".$id_jasa."
		");
		
		return $query->row_array();
	}
	
	function update($data){
		$this->db->where('id_jasa', $data['id_jasa']);
		return $this->db->update('jasa_kirim', $data);
	}
	
	function delete($id_jasa){
		$this->db->where('id_jasa', $id_jasa);
		return $this->db->delete('jasa_kirim');
	}
}