<?php
class model_utama extends CI_Model{
	public function __construct(){
		parent::__construct();
		
		$this->load->database();
	}
	
	function randproduk(){
		$query	= $this->db->query('
			SELECT 
			`cid`, `gid`, `nama`, 
			`satuan`, `harga`, `gambar`, 
			`keterangan`, `diskon`, `bes_seller` 
		FROM `detail_kategori`
		ORDER BY RAND() LIMIT 0,30
		');
		
		return $query->result_array();
	}
}