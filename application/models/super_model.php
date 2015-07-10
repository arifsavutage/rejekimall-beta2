<?php
class Super_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function viewsuper($datasuper){
		$query	= $this->db->get_where('superadm', $datasuper);
		return $query;
	}
}