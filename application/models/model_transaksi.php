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
	
	function viewtrans($idmember){
		$query	= $this->db->query('
			SELECT 
				`idpesan`, `id_member`, `waktu`, 
				`totalbayar`, `ongkoskirim`, `to`, 
				`alamat`, `kdpos`, `kontak` 
			FROM `order` 
			WHERE id_member = '.$idmember.' AND status =0 ');
		
		return $query->result_array();
	}
	
	function detailtrans($idpesan){
		$query	= $this->db->query("
		SELECT 
			`order`.idpesan, `order`.to, `order`.alamat, 
			`order`.kdpos, `order`.kontak, detail_kategori.nama, 
			order_detail.jml, order_detail.subtotal 
		FROM detail_kategori, order_detail, `order` 
		WHERE 
			order.idpesan = order_detail.idpesan 
			AND 
			detail_kategori.gid = order_detail.gid 
			AND `order`.idpesan = '".$idpesan."' 
			ORDER BY `order`.waktu DESC 
		");
		
		return $query->result_array();
	}
	
	function details($idpesan){
		$query	= $this->db->query("
		SELECT 
			idpesan, bukti
		FROM `order` 
		WHERE 
			idpesan = '".$idpesan."'
		");
		
		return $query->row_array();
	}
	
	function poskonfirm($data){
		$this->db->where('idpesan', $data['idpesan']);
		return $this->db->update('order', $data);
	}
}