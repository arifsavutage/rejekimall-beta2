<?php
class Model_konfirmasi extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function simpan($data){
		return $this->db->insert('konfirm_bayar', $data);
	}
}