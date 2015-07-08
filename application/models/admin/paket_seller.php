<?php
class paket_seller extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function viewpaket(){
		$query	= $this->db->query("
			SELECT `idpkt`, `nmpaket`, harga, `poin`, `iklanbaner`, `iklanbaris` 
			FROM paket_seller
		");
		
		return	$query->result_array();
	}
	
	function detailpaket($idpkt){
		$query	= $this->db->query("
			SELECT `idpkt`, `nmpaket`, harga, `poin`, `iklanbaner`, `iklanbaris` 
			FROM paket_seller
			WHERE idpkt = ".$idpkt."
		");
		
		return	$query->row_array();
	}
	
	function add($data){
		return $this->db->insert('paket_seller', $data);
	}
	
	function update($data){
		$this->db->where('idpkt', $data['idpkt']);
		return $this->db->update('paket_seller', $data);
	}
}