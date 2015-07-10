<?php
class Jajal_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	
	public function ahay(){
		$query	= $this->db->query('SELECT user_id FROM member');
		
		#return $query->num_rows();
		if($query->num_rows() == 0)
		{
			return "mbuh";
		}
		else{
			return "yayy";
		}
	}
}