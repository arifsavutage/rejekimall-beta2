<?php
class Model_brand extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function addbrand($data){
		return $this->db->insert('brand', $data);
	}
	
	function viewbrand($id){
		$query	= $this->db->query("
			SELECT `idbrand`, `idseller`, `nmbrand`, `gb_brand` FROM `brand` WHERE idseller = '".$id."'
		");
		return $query->result_array();
	}
	
	function detailbrand($idbrand){
		$query	= $this->db->get_where('brand', array('idbrand'=>$idbrand));
		
		return $query->row_array();
	}
	
	function updatebrand($data){
		$this->db->where('idbrand', $data['idbrand']);
		return $this->db->update('brand', $data);
	}
	
	function deletebrand($data){
		$this->db->where('idbrand', $data['idbrand']);
		return $this->db->delete('brand');
	}
}