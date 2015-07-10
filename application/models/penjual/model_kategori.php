<?php
class Model_kategori extends CI_Model{
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
	function detail($cid){
		$query	= $this->db->get_where('kategori',array('cid'=>$cid));
		
		return $query->row_array();
	}
	
	function edit($data){
		$this->db->where('cid', $data['cid']);
		return $this->db->update('kategori', $data);
	}
	
	function delete($cid){
		$this->db->where('cid', $cid);
		return $this->db->delete('kategori');
	}
}