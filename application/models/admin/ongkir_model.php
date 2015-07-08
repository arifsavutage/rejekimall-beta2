<?php
class Ongkir_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function tambah($data){
		return $this->db->insert('ongkos_kirim', $data);
	}
	
	function viewongkir(){
		$query	= $this->db->query("
			SELECT 
				ongkos_kirim.`id_ongkir`, ongkos_kirim.`harga`,
				kab_kota.nmkab, propinsi.propinsi, negara.nama_neg,
				jasa_kirim.nama
			FROM `ongkos_kirim`, kab_kota, propinsi, negara, jasa_kirim
			WHERE
				ongkos_kirim.id_kab = kab_kota.id_kab
				AND
				ongkos_kirim.id_prop = propinsi.id_prop
				AND
				ongkos_kirim.id_neg = negara.id_neg
				AND
				ongkos_kirim.id_jasa = jasa_kirim.id_jasa
			ORDER BY ongkos_kirim.id_ongkir DESC
		");
		
		return $query->result_array();
	}
	
	function cariongkir($negara, $propinsi, $kota){
		$query	= $this->db->query("
			SELECT `id_ongkir`, `id_kab`, `id_jasa`, `harga`, `id_prop`, `id_neg` 
			FROM `ongkos_kirim`
			WHERE id_neg = ".$negara." AND id_prop = ".$propinsi." AND id_kab = ".$kota."
		");
		
		return $query->row_array();
	}
	
	function detailongkir($idongkir){
		$query	= $this->db->query("
			SELECT `id_ongkir`, `id_kab`, `id_jasa`, `harga`, `id_prop`, `id_neg` 
			FROM `ongkos_kirim`
			WHERE id_ongkir = ".$idongkir."
		");
		
		return $query->row_array();
	}
	
	function update($data){
		$this->db->where('id_ongkir', $data['id_ongkir']);
		
		return $this->db->update('ongkos_kirim', $data);
	}
	
	function delete($idongkir){
		$this->db->where('id_ongkir', $idongkir);
		
		return $this->db->delete('ongkos_kirim');
	}
}