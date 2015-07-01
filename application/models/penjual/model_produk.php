<?php
class model_produk extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function createproduk($data){
		return $this->db->insert('detail_kategori', $data);
	}
	
	function editproduk($data){
		$this->db->where('gid', $data['gid']);
		return $this->db->update('detail_kategori', $data);
	}
	
	function allproduk($dari, $sampai){
		$query	= $this->db->query('
			SELECT 
			`cid`, `gid`, `nama`, 
			`satuan`, `harga`, `gambar`, 
			`keterangan`, `diskon`, `bes_seller` 
		FROM `detail_kategori`
		ORDER BY cid ASC LIMIT '.$dari.', '.$sampai.'
		');
		
		return $query;
	}
	
	function jmlrow(){
		return $this->db->get('detail_kategori');
	}
	
	public function readproduk($id){
		$query	= $this->db->query('
			SELECT 
			detail_kategori.gid, detail_kategori.nama, 
			detail_kategori.satuan, detail_kategori.harga, 
			detail_kategori.gambar, detail_kategori.keterangan, 
			detail_kategori.diskon, detail_kategori.bes_seller 
			FROM detail_kategori, kategori, seller 
			WHERE 
				kategori.cid = detail_kategori.cid
			AND
				seller.id_seller = kategori.id_seller
			AND
				kategori.id_seller = "'.$id.'"
			ORDER BY detail_kategori.gid DESC
		');
		
		return $query;
	}
	
	public function detailproduk($gid){
		$query	= $this->db->query('
			SELECT
			seller.nama_toko, seller.tgl_registrasi, seller.alamat,
			detail_kategori.gid, detail_kategori.nama, 
			detail_kategori.satuan, detail_kategori.harga, 
			detail_kategori.gambar, detail_kategori.keterangan, 
			detail_kategori.diskon, detail_kategori.bes_seller, 
			detail_kategori.ukuran, detail_kategori.stok,
			detail_kategori.warna, kategori.cid
			FROM detail_kategori, kategori, seller 
			WHERE 
				kategori.cid = detail_kategori.cid
			AND
				seller.id_seller = kategori.id_seller
			AND
				detail_kategori.gid="'.$gid.'"
			ORDER BY detail_kategori.gid DESC
		');
		
		return $query;
	}
}