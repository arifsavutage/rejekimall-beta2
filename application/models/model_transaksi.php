<?php
class model_transaksi extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function order($data){
		return $this->db->insert('order', $data);
	}
	
	function vieworder($id){
		$query	= $this->db->query('SELECT `idpesan` FROM `order` WHERE id_member = '.$id.' ORDER BY waktu DESC');
		return $query;
	}
	
	function orderdetail($datadetail){
		return $this->db->insert('order_detail', $datadetail);
	}
}