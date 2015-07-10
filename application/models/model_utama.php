<?php
class Model_utama extends CI_Model{
	public function __construct(){
		parent::__construct();
		
		$this->load->database();
	}
	
	function kategori(){
		$query	= $this->db->query("
			SELECT DISTINCT `cid`, `id_seller`, `nama`, slugkat FROM `kategori`
		");
		return $query->result_array();
	}
	
	function randproduk($batas){
		$query	= $this->db->query("
			SELECT 
			`cid`, `gid`, `nama`, 
			`satuan`, `harga`, `gambar`, 
			`keterangan`, `diskon`, `bes_seller` 
		FROM `detail_kategori`
		ORDER BY RAND() LIMIT 0,$batas
		");
		
		return $query->result_array();
	}
}