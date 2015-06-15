<?php
class model_kategori extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function tambahkat($data){
		return $this->db->insert('kategori', $data);
	}
	function tampilkat($id){
		$query	= $this->db->get_where('kategori', array('id_seller'=>$id));
		return $query->result_array();
	}
}