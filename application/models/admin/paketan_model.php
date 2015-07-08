<?php
class Paketan_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function tambahpaket($data){
		return $this->db->insert('paketan', $data);
	}
	
	function showall(){
		$query	= $this->db->query("
				SELECT `ids`, `nmpaket`, `poinspon`, `hrgpkt`, untuk FROM `paketan`
			");
		
		return $query->result_array();
	}
	function showpaketan($untuk){
		if(empty($untuk)){
			$query	= $this->db->query("
				SELECT `ids`, `nmpaket`, `poinspon`, `hrgpkt`, untuk FROM `paketan`
			");
		}
		else{
			$query	= $this->db->query("
				SELECT `ids`, `nmpaket`, `poinspon`, `hrgpkt`, untuk 
				FROM `paketan`
				WHERE
				untuk = '".$untuk."'
			");
		}
		
		
		return $query->result_array();
	}
	
	function ubahpaketan($data){
		$this->db->where('ids', $data['ids']);
		return $this->db->update('paketan', $data);
	}
	
	function pktdftseller($kolom, $ids){
		$query	= $this->db->query(
		"SELECT ".$kolom." FROM `paketan` WHERE ids=".$ids.""
		);
		
		return $query->row_array();
	}
	
	function detailpaketan($ids){
		$query	= $this->db->query(
		"SELECT `ids`, `nmpaket`, `poinspon`, `hrgpkt`, untuk FROM `paketan` WHERE ids = ".$ids.""
		);
		
		return $query->row_array();
	}
	
	function editpaket($data){
		$this->db->where('ids', $data['ids']);
		return $this->db->update('paketan', $data);
	}
	
	function delete($ids){
		$this->db->where('ids', $ids);
		return $this->db->delete('paketan');
	}
	
	function ambilpoin($untuk, $paket){
		$query	= $this->db->query(
		"SELECT poinspon FROM `paketan` WHERE untuk = '".$untuk."' AND ids = ".$paket.""
		);
		
		return $query->row_array();
	}
}