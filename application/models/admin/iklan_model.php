<?php
class iklan_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	/*SLIDER*/
	function addslider($data){
		return $this->db->insert('iklan_slider', $data);
	}
	function showslider(){
		$query	= $this->db->query("
		SELECT `idslide`, `nmiklan`, `gbslider` FROM `iklan_slider`
		");
		
		return $query->result_array();
	}
	
	function detailslider($id){
		$query	= $this->db->query("
		SELECT `idslide`, `nmiklan`, `gbslider` 
		FROM `iklan_slider`
		WHERE idslide = ".$id."
		");
		
		return $query->row_array();
	}
	
	function updateslider($data){
		$this->db->where('idslide', $data['idslide']);
		return $this->db->update('iklan_slider', $data);
	}
	
	function delslider($id){
		$this->db->where('idslide', $id);
		return $this->db->delete('iklan_slider');
	}
	/*END OF SLIDER*/
	
	/*BANNER PAKET*/
	function addbanner($data){
		return $this->db->insert('iklan_banner_paket', $data);
	}
	function showbanner(){
		$query	= $this->db->query("
		SELECT 
		`idpkt_baner`, `nmbanner`, `posisi`, `hrgiklan`, 
		`durasi`, `ket`
		FROM iklan_banner_paket
		");
		
		return $query->result_array();
	}
	
	function detailbanner($id){
		$query	= $this->db->query("
		SELECT `idpkt_baner`, `nmbanner`, `posisi`, 
		`hrgiklan`, `durasi`, 
		`ket` 
		FROM iklan_banner_paket
		WHERE idpkt_baner = ".$id."
		");
		
		return $query->row_array();
	}
	
	function updatebanner($data){
		$this->db->where('idpkt_baner', $data['idpkt_baner']);
		return $this->db->update('iklan_banner_paket', $data);
	}
	
	function delbanner($id){
		$this->db->where('idpkt_baner', $id);
		return $this->db->delete('iklan_banner_paket');
	}
	/*END OF PAKET BANNER*/
	
	/*IKLAN BANNER*/
	function addiklanbanner($data){
		return $this->db->insert('iklan_banner', $data);
	}
	function showiklanbanner(){
		$query	= $this->db->query("
		SELECT iklan_banner.`id_banner`, .iklan_banner.`nmiklan`, 
		iklan_banner.`pemesan`, iklan_banner.gbiklan, iklan_banner.status,
		iklan_banner_paket.nmbanner, iklan_banner_paket.ket, iklan_banner_paket.posisi
		FROM `iklan_banner`, iklan_banner_paket
		WHERE iklan_banner.idpkt_baner = iklan_banner_paket.idpkt_baner
		ORDER BY iklan_banner.id_banner DESC
		");
		
		return $query->result_array();
	}
	
	function detailiklanbanner($id){
		$query	= $this->db->query("
		SELECT `id_banner`, `idpkt_baner`, `nmiklan`, `pemesan`, gbiklan, status 
		FROM `iklan_banner`
		WHERE id_banner = ".$id."
		");
		
		return $query->row_array();
	}
	
	function updateiklanbanner($data){
		$this->db->where('id_banner', $data['id_banner']);
		return $this->db->update('iklan_banner', $data);
	}
	
	function deliklanbanner($id){
		$this->db->where('id_banner', $id);
		return $this->db->delete('iklan_banner');
	}
	
	function bannerads($pos, $status){
		$query	= $this->db->query("
		SELECT  iklan_banner.gbiklan, iklan_banner_paket.posisi
		FROM `iklan_banner`, iklan_banner_paket
		WHERE 
		iklan_banner.idpkt_baner = iklan_banner_paket.idpkt_baner
		AND
		iklan_banner_paket.posisi = ".$pos."
		AND
		iklan_banner.status = ".$status."
		ORDER BY RAND()
		");
		
		return $query;
	}
	/*END OF IKLAN BANNER*/
}