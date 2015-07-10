<?php
class Admin_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function detailprofilweb(){
		$query	= $this->db->query("
		SELECT 
		`id`, `hp`, `pin`, 
		`email`, `fb`, `twitter`, 
		`gplus`, `insta`, `youtube` 
		FROM `profil`");
		
		return $query->row_array();
	}
	
	function editprofilweb($data){
		$this->db->where('id', $data['id']);
		return $this->db->update('profil', $data);
	}
	
	function sellerbaru(){
		$query	= $this->db->query('
		SELECT 
			`id_seller`, `nama_toko`, `username`, 
			`password`, `tgl_registrasi`, `nama`, 
			`alamat`, `status_system`, `nohp`, 
			`pin`, `token`, `negara`, 
			`provinsi`, `namabank`, `cabang`, 
			`pemilikrek`, `kat`, `newsletter`, 
			`SMS`, `website`, `norek`, 
			`email`, `ket`, `passtrx`, 
			`kota`, `kecamatan`, `kodepos`, 
			`gbr_ktp`, `foto`, `npwp`, 
			`golongan` 
		FROM `seller` 
		WHERE status_system = "0" 
		ORDER BY tgl_registrasi DESC');
		
		return $query;
	}
	
	function konfseller($id){
		$data	= array('status_system'=>'1');
		$this->db->where('id_seller', $id);
		return $this->db->update('seller', $data);
	}
	
	function hapuspenjual($id){
		$this->db->where('id_seller', $id);
		return $this->db->delete('seller');
	}
	
	function memberbaru(){
		$query	= $this->db->query("
		SELECT 
			`id_member`, `user_id`, `password`, 
			`nama`, `jk`, `email`, 
			`alamat`, `no_hp`, `no_tlprmh`, 
			`kota`, `kdpos`, `propinsi`, 
			`negara`, `gbr_ktp`, `foto`, 
			`status`, `golongan` 
		FROM `member` 
		WHERE status = '0'
		ORDER BY id_member DESC
		");
		
		return	$query;
	}
	
	function memberaprove($idmember){
		$data	= array('status'=>'1');
		$this->db->where('id_member', $idmember);
		return $this->db->update('member', $data);
	}
	
	function delmember($idmember){
		$this->db->where('id_member', $idmember);
		return $this->db->delete('member');
	}
}