<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class pembeli extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		if(empty($this->session->userdata('username'))){
			redirect(base_url().'login');
		}
		$this->load->model('member/model_member');
		$this->load->model('model_city');
	}
	
	function index(){
		$this->form_validation->set_rules('nmlengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat Rumah', 'required');
		$this->form_validation->set_rules('kdpos', 'Kode Pos', 'required');
		$this->form_validation->set_rules('negara', 'Negara', 'required');
		$this->form_validation->set_rules('propinsi', 'Propinsi', 'required');
		$this->form_validation->set_rules('kotakab', 'Kota / Kab.', 'required');
		
		if($this->form_validation->run() === false)
		{
			$user	= $this->session->userdata('idmember');
			$query	= $this->model_member->detail_member($user);
			$negara	= $this->model_city->getNegara();
			$prop	= $this->model_city->getPropinsi();
			$kota	= $this->model_city->getKota();
			
			$data	= array(
				'title'		=> 'Member Area',
				'menu'		=> 'etalase/menu_etalase',
				'isi'		=> 'pembeli/dasbor',
				'page'		=> 'pembeli/depan',
				'profil'	=> $query,
				'negara'	=> $negara,
				'prop'		=> $prop,
				'kota'		=> $kota
			);
			
			$this->load->view('layout/wrapper', $data);
		}else{
			$update	= array(
				'id_member'	=> $this->input->post('id_member'),
				'nama'		=> $this->input->post('nmlengkap', true),
				'jk'		=> $this->input->post('jk'),
				'email'		=> $this->input->post('email', true),
				'alamat'	=> $this->input->post('alamat', true),
				'no_hp'		=> $this->input->post('hp', true),
				'no_tlprmh'	=> $this->input->post('tlp', true),
				'kdpos'		=> $this->input->post('kdpos', true),
				'kota'		=> $this->input->post('kotakab'),
				'propinsi'	=> $this->input->post('propinsi'),
				'negara'	=> $this->input->post('negara')
			);
			
			$this->model_member->ubah($update);
			redirect(base_url().'pembeli');
		}	
		
	}
	
	function akun(){
		$user	= $this->session->userdata('idmember');
		$query	= $this->model_member->detail_member($user);
		
		$this->form_validation->set_rules('passlama', 'Password Lama', 'required');
		$this->form_validation->set_rules('pass1','Password Baru', 'required');
		$this->form_validation->set_rules('pass2', 'Re-Type Password Baru', 'required');
		
		if($this->form_validation->run() === false){
			$data	= array(
				'title'		=> 'Edit Akun',
				'menu'		=> 'etalase/menu_etalase',
				'isi'		=> 'pembeli/dasbor',
				'page'		=> 'pembeli/akun',
				'profil'	=> $query
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else if($this->input->post('passlamax') != md5($this->input->post('passlama')))
		{
			$this->session->set_flashdata('pesan', 'Password Lama Tidak Sama..');
			redirect(base_url().'pembeli/akun');
		}
		else{
			
			$data	= array(
				'id_member'=>$this->input->post('idmember'),
				'password'=>md5($this->input->post('passbaru2', true))
			);
			
			$this->model_member->editpass($data);
			$this->session->set_flashdata('pesan', 'Password Telah Dirubah..');
			redirect(base_url().'pembeli/akun');
		}
	}
	
	function foto(){
		$this->form_validation->set_rules('gbfoto', 'Foto Member', 'required');
		
		if($this->form_validation->run() === false){
			$user	= $this->session->userdata('idmember');
			$query	= $this->model_member->detail_member($user);
			
			$data	= array(
				'title'		=> 'Edit Akun',
				'menu'		=> 'etalase/menu_etalase',
				'isi'		=> 'pembeli/dasbor',
				'page'		=> 'pembeli/foto',
				'profil'	=> $query
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else{
			$this->load->library('upload');
		
			$username	= $this->session->userdata('username');
			$split		= explode(".", $_FILES['gbfoto']['name']);
			$newname	= $username.".".$split[1];
			
			$config['file_name']		= $newname;
			$config['allowed_types']	= 'gif|jpg|png|jpeg';
			$config['upload_path']		= 'asset/img/member/pp';
			$config['max_size']			= '100';
			$config['max_width']		= '1024';
			$config['max_height']		= '768';
			
			$this->upload->initialize($config);
			
			if($_FILES['gbfoto']['name']){
				if(!$this->upload->do_upload('gbfoto')){
					$this->session->set_flashdata('pesan',"<div class='alert alert-warning'>
					  <button type='button' class='close' data-dismiss='alert'>&times;</button>
					  <strong>Warning!</strong> Ngga Bisa di Upload
					</div>");
					redirect(base_url().'pembeli/foto');
				}
				else{
					$gbr	= $this->upload->data();
					
					$data	= array(
						'id_member'=>$this->input->post('idmember'),
						'foto'=>$gbr['file_name']
					);
					
					$this->model_member->editfoto($data);
					$this->upload->data();
					
					$this->session->set_flashdata('pesan', "teruplaod");
					redirect(base_url().'pembeli/foto');
				}
			}
		}
		
	}
	
	function ktp(){
		$this->form_validation->set_rules('gbktp', 'Scan KTP', 'required');
		
		if($this->form_validation->run() === false){
			$user	= $this->session->userdata('idmember');
			$query	= $this->model_member->detail_member($user);
			
			$data	= array(
				'title'		=> 'Edit Akun',
				'menu'		=> 'etalase/menu_etalase',
				'isi'		=> 'pembeli/dasbor',
				'page'		=> 'pembeli/ktp',
				'profil'	=> $query
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else{
			$this->load->library('upload');
		
			$username	= $this->session->userdata('username');
			$split		= explode(".", $_FILES['gbktp']['name']);
			$newname	= "ktp_".$username.".".$split[1];
			
			$config['file_name']		= $newname;
			$config['allowed_types']	= 'gif|jpg|png|jpeg';
			$config['upload_path']		= 'asset/img/member/ktp';
			$config['max_size']			= '100';
			$config['max_width']		= '1024';
			$config['max_height']		= '768';
			
			$this->upload->initialize($config);
			
			if($_FILES['gbktp']['name']){
				if(!$this->upload->do_upload('gbktp')){
					$this->session->set_flashdata('pesan',"<div class='alert alert-warning'>
					  <button type='button' class='close' data-dismiss='alert'>&times;</button>
					  <strong>Warning!</strong> Ngga Bisa di Upload
					</div>");
					redirect(base_url().'pembeli/ktp');
				}
				else{
					
					$ktp	= $this->upload->data();
																						
					$data	= array(
						'id_member'=>$this->input->post('idmember'),
						'gbr_ktp'=>$ktp['file_name']
					);
					
					$this->model_member->editktp($data);
					$this->upload->data();
					$this->session->set_flashdata('pesan', $this->upload->display_errors());
					redirect(base_url().'pembeli/ktp');
				}
			}
		}
		
	}
}