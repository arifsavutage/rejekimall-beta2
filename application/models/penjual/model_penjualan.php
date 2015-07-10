<?php
class Model_penjualan extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	
	#order
	#ctt status: 0 = belum transfer, 1=transfer, 2=packing, 3=kirim, 4=diterima, 5=retur
	function order($idseller, $status){
		$query	= $this->db->query("
		SELECT 
			member.id_member, member.nama as nm_member, `order`.idpesan, 
			`order`.waktu, `order`.`totalbayar`, `order`.`ongkoskirim`, 
			`order`.`to`, `order`.`alamat`, `order`.`kdpos`, 
			`order`.`kontak`, `order`.`tglkonfirm`, `order`.`bank`, 
			`order`.`bukti`,
			detail_kategori.nama as nm_produk, order_detail.jml, order_detail.subtotal
		FROM member, `order`, seller, order_detail, kategori, detail_kategori 
		WHERE 
			member.id_member = `order`.id_member 
			AND 
			`order`.idpesan = order_detail.idpesan 
			AND 
			order_detail.gid = detail_kategori.gid 
			AND 
			detail_kategori.cid = kategori.cid 
			AND 
			kategori.id_seller = seller.id_seller 
			AND 
			seller.id_seller = ".$idseller."
			AND
			order_detail.status = ".$status."
			GROUP BY order.idpesan

		");
		
		return $query;
	}
	
	#detail penjualan
	function orderdetail($idpesan, $idseller, $status){
		$query	= $this->db->query("
		SELECT 
			member.id_member, member.nama as nm_member, `order`.idpesan, 
			`order`.waktu, `order`.`totalbayar`, `order`.`ongkoskirim`, 
			`order`.`to`, `order`.`alamat`, `order`.`kdpos`, 
			`order`.`kontak`, `order`.`tglkonfirm`, `order`.`bank`, 
			`order`.`bukti`,
			detail_kategori.nama as nm_produk, detail_kategori.gambar, 
			order_detail.jml, order_detail.subtotal
		FROM member, `order`, seller, order_detail, kategori, detail_kategori 
		WHERE 
			member.id_member = `order`.id_member 
			AND 
			`order`.idpesan = order_detail.idpesan 
			AND 
			order_detail.gid = detail_kategori.gid 
			AND 
			detail_kategori.cid = kategori.cid 
			AND 
			kategori.id_seller = seller.id_seller 
			AND 
			seller.id_seller = ".$idseller." 
			AND
			order_detail.status =  ".$status."
			AND
			order.idpesan ='".$idpesan."'
		");
		
		return $query->result_array();
	}
	
	function updateorder($data){
		$query	= $this->db->query(
			"UPDATE `order` SET status = ".$data['status']." WHERE idpesan ='".$data['idpesan']."'"
		);
		
		return $query;
	}
}