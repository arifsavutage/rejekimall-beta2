<?php
class model_member extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	#menampilkan data member
	public function list_member(){
		$query	= $this->db->query('
		SELECT 
			`id_member`, `user_id`, `password`, 
			`nama`, `Email`, `alamat`, 
			`no_hp`, `no_tlprmh`, `kota`, 
			`kdpos`, `propinsi`, `negara`, 
			`gbr_ktp`, `foto` 
		FROM `member`
		ORDER BY id_member DESC');
		
		return $query->result_array();
	}
	
	#menampilkan detail member
	public function detail_member($id){
		#$query	= $this->db->query('SELECT * FROM member WHERE id_member = "$idmember"');
		$query	= $this->db->get_where('member', array('id_member'=>$id));
		return $query->row_array(); /*mengambil satu baris yg cocok*/
	}
	
	#create id_member
	public function createID(){
		$query	= $this->db->query('SELECT user_id FROM member ORDER BY user_id DESC');
		
		#return $query->num_rows();
		
		if($query->num_rows() == 0)
		{
			return "8000000";
		}
		else{
			$row	= $query->row_array();
			return $row +=1;
		}
	}
	
	#cek username
	public function cekuname($uname){
		$query	= $this->db->get_where('member', array('user_id'=>$uname));
		
		return $query->num_rows();
	}
	
	#menambah member
	public function simpan($data){
		return $this->db->insert('member',$data);
	}
	
	#update data member
	public function ubah($data){
		
	}
	
}