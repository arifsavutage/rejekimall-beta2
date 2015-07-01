<?php
class paket_member extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function viewpaket(){
		$query	= $this->db->query("
			SELECT `id_pkt`, `nmpaket`, `poin` FROM `paket_member`
		");
		
		return	$query->result_array();
	}
	
	function detailpaket($idpkt){
		$query	= $this->db->query("
			SELECT `id_pkt`, `nmpaket`, `poin` FROM `paket_member`
			WHERE id_pkt = ".$idpkt."
		");
		
		return	$query->row_array();
	}
	
	function add($data){
		return $this->db->insert('paket_member', $data);
	}
	
	function update($data){
		$this->db->where('id_pkt', $data['id_pkt']);
		return $this->db->update('paket_member', $data);
	}
}