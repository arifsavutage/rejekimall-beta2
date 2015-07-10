<?php
class Model_seller extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function tambahseller($data){
		return $this->db->insert('seller', $data);
	}
	
	/*BIAYA*/
	function addbiaya($data){
		return $this->db->insert('seller_bayar', $data);
	}
	
	function viewseller(){
		$query	= $this->db->query("
			SELECT 
				`id_seller`, `idpkt`, `nama_toko`, 
				`username`, `password`, `tgl_registrasi`, 
				`nama`, `alamat`, `status_system`, 
				`nohp`, `pin`, `token`, 
				`negara`, `provinsi`, `namabank`, 
				`cabang`, `pemilikrek`, `kat`, 
				`newsletter`, `SMS`, `website`, 
				`norek`, `email`, `ket`, 
				`passtrx`, `kota`, `kecamatan`, 
				`kodepos`, `gbr_ktp`, `foto`, 
				`npwp`, `golongan`, `poinseller` 
			FROM `seller`
		");
		
		return $query->result_array();
	}
	
	function detailseller($idseller){
		$query	= $this->db->query("
			SELECT 
				`id_seller`, `idpkt`, `nama_toko`, 
				`username`, `password`, `tgl_registrasi`, 
				`nama`, `alamat`, `status_system`, 
				`nohp`, `pin`, `token`, 
				`negara`, `provinsi`, `namabank`, 
				`cabang`, `pemilikrek`, `kat`, 
				`newsletter`, `SMS`, `website`, 
				`norek`, `email`, `ket`, 
				`passtrx`, `kota`, `kecamatan`, 
				`kodepos`, `gbr_ktp`, `foto`, 
				`npwp`, `golongan`, `poinseller` 
			FROM `seller`
			WHERE id_seller = ".$idseller."
		");
		
		return $query->row_array();		
	}
	
	function editseller($data){
		$this->db->where('id_seller', $data['id_seller']);
		return $this->db->update('seller', $data);
	}
	
	function addpoin($data){
		$query	= $this->db->query("
		UPDATE `seller` SET `poinseller` = poinseller + ".$data['poinseller']." WHERE `id_seller` = ".$data['id_seller']."
		");
		
		return $query;
	}
	
	#cek username
	public function cekuname($uname){
		$query	= $this->db->get_where('seller', array('email'=>$uname));
		
		return $query->num_rows();
	}
	
	function login($data){
		$query	= $this->db->get_where('seller', $data);
		
		return $query;
	}
}