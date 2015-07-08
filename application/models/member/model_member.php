<?php
class model_member extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	#sponsoring member
	function sponsorin($data){
		$query	= $this->db->query("
			UPDATE member SET memberpoin = memberpoin+".$data['poin']."
			WHERE id_member = ".$data['sponsor']."
		");
		
		return $query;
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
		$this->db->where('id_member', $data['id_member']);
		return $this->db->update('member', $data);
	}
	
	#update old password`
	public function editpass($data){
		$this->db->where('id_member', $data['id_member']);
		return $this->db->update('member', $data);
	}
	
	#update poin
	public function addpoin($data){
		return $this->db->query("
			UPDATE member SET memberpoin = memberpoin + $data[memberpoin] WHERE id_member = ".$data['id_member']."
		");
	}
	
	#update foto profil
	public function editfoto($data){
		$this->db->where('id_member', $data['id_member']);
		return $this->db->update('member', $data);
	}
	
	#update foto ktp
	public function editktp($data){
		$this->db->where('id_member', $data['id_member']);
		return $this->db->update('member', $data);
	}
}