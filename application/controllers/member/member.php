<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class member extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('member/model_member');
		$this->load->model('admin/paket_member');
	}
	
	public function index(){
		$query	= $this->model_member->list_member();
		
		/*
			Load to super admin
		*/
	}
	
	public function tambah(){
		$this->form_validation->set_rules('nama', 'Nama Lengap', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('username', 'User Name', 'required');
		$this->form_validation->set_rules('pktmember', 'Paket Member', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('pass1', 'Password', 'required');
		$this->form_validation->set_rules('pass2', 'Re-Type Password', 'required');
		
		if($this->form_validation->run() === false){
			$data	= array('title'=>'Rejeki Mall : Register Pembeli',
				'menu'=>'etalase/menu_etalase',
				'isi'=>'register/registerpembeli'
			);
			
			$this->load->view('layout/wrapper',$data);			
		}
		else if($this->input->post('pass1', true) != $this->input->post('pass2', true)){
			$data	= array('title'=>'Rejeki Mall : Register Pembeli',
				'menu'=>'etalase/menu_etalase',
				'error'=>'Password Tidak Sama, Ulangi Lagi',
				'isi'=>'register/registerpembeli'
			);
			
			$this->load->view('layout/wrapper',$data);
		}
		else if($this->model_member->cekuname($this->input->post('username')) > 0)
		{
			$data	= array('title'=>'Rejeki Mall : Register Pembeli',
				'menu'=>'etalase/menu_etalase',
				'error'=>'Username '.$this->input->post('username').' Sudah Digunakan',
				'isi'=>'register/registerpembeli'
			);
			
			$this->load->view('layout/wrapper',$data);
		}
		else{
			$id			= $this->input->post('pktmember', true);
			$poin		= $this->paket_member->detailpaket($id);
			$sponsor	= $this->input->post('sponsor');
					
			$data	= array(
			'id_pkt'=>$id,
			'user_id'=>$this->input->post('username', true),
			'nama'=>$this->input->post('nama', true),
			'jk'=>$this->input->post('jk', true),
			'email'=>$this->input->post('email', true),
			'password'=>md5($this->input->post('pass2', true)),
			'foto'=>'nopic.png',
			'golongan'=>'3',
			'memberpoin'=>$poin['poin']
			);
			
			if(!empty($sponsor)){
				
			}
			
			$this->model_member->simpan($data);
			$this->session->set_flashdata('pesan','<div data-alert class="alert-box info">
				Pendaftaran berhasil, silahkan tunggu konfirmasi
				<a href="#" class="close">&times;</a>
			</div>');
			redirect(base_url().'register/pembeli');
			
		}
			
	}
	
	public function edit(){
		$this->form_validation->set_rules('nama','Nama Lengkap','required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required');
		$this->form_validation->set_rules('kota', 'Kota', 'required');
		$this->form_validation->set_rules('propinsi', 'Propinsi', 'required');
		$this->form_validation->set_rules('negara', 'Negara', 'required');
		$this->form_validation->set_rules('hp', 'No Hp', 'required');
		
		if($this->form_validation->run()===false){
			redirect(base_url().'dasbor/home/profil');
		}
		else{
			
			$data	= array(
				'id_member'=>$this->input->post('idmember'),
				'nama'=>$this->input->post('nama', true),
				'jk'=>$this->input->post('jk'),
				'email'=>$this->input->post('email', true),
				'alamat'=>$this->input->post('alamat', true),
				'no_hp'=>$this->input->post('hp', true),
				'no_tlprmh'=>$this->input->post('tlp', true),
				'kota'=>$this->input->post('kota', true),
				'kdpos'=>$this->input->post('kdpos', true),
				'propinsi'=>$this->input->post('propinsi', true),
				'negara'=>$this->input->post('negara', true),
				
			);
			
			$this->model_member->ubah($data);
			redirect(base_url().'dasbor/home/profil');
		}
	}
	
	function editakun(){
		$this->form_validation->set_rules('passlama', 'Password Lama', 'required');
		$this->form_validation->set_rules('passbaru','Password Baru', 'required');
		$this->form_validation->set_rules('passbaru2', 'Re-Type Password Baru', 'required');
		
		if($this->form_validation->run() === false){
			redirect(base_url().'dasbor/home/profil');
		}
		else if($this->input->post('passlamax') != md5($this->input->post('passlama')))
		{
			redirect(base_url().'dasbor/home/profil');
		}
		else{
			
			$data	= array(
				'id_member'=>$this->input->post('idmember'),
				'password'=>md5($this->input->post('passbaru2', true))
			);
			
			$this->model_member->editpass($data);
			redirect(base_url().'dasbor/home/profil');
		}
	}
	
	function uploadfoto(){
		
		$this->load->library('upload');
		
		$username	= $this->session->userdata('username');
		$split		= explode(".", $_FILES['foto']['name']);
		$newname	= $username.".".$split[1];
		
		$config['file_name']		= $newname;
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['upload_path']		= 'asset/img/member/pp';
		$config['max_size']			= '100';
		$config['max_width']		= '1024';
		$config['max_height']		= '768';
		
		$this->upload->initialize($config);
		
		if($_FILES['foto']['name']){
			if(!$this->upload->do_upload('foto')){
				$this->session->set_flashdata('pesan',"<div class='alert alert-warning'>
				  <button type='button' class='close' data-dismiss='alert'>&times;</button>
				  <strong>Warning!</strong> Ngga Bisa di Upload
				</div>");
				redirect(base_url().'dasbor/home/profil');
			}
			else{
				$filefoto	= 'asset/img/member/pp/'.$this->input->post('fotolama');
				
				$gbr	= $this->upload->data();
				
				if(file_exists($filefoto)){
					unlink($filefoto);
				}
								
				
				$data	= array(
					'id_member'=>$this->input->post('idmember'),
					'foto'=>$gbr['file_name']
				);
				
				$this->model_member->editfoto($data);
				$this->upload->data();
				
				$this->session->set_flashdata('pesan', $isipesan);
				redirect(base_url().'dasbor/home/profil');
			}
		}
	}
	
	function uploadktp(){
		
		$this->load->library('upload');
		
		$username	= $this->session->userdata('username');
		$split		= explode(".", $_FILES['ktp']['name']);
		$newname	= "ktp_".$username.".".$split[1];
		
		$config['file_name']		= $newname;
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['upload_path']		= 'asset/img/member/ktp';
		$config['max_size']			= '100';
		$config['max_width']		= '1024';
		$config['max_height']		= '768';
		
		$this->upload->initialize($config);
		
		if($_FILES['ktp']['name']){
			if(!$this->upload->do_upload('ktp')){
				$this->session->set_flashdata('pesan',"<div class='alert alert-warning'>
				  <button type='button' class='close' data-dismiss='alert'>&times;</button>
				  <strong>Warning!</strong> Ngga Bisa di Upload
				</div>");
				redirect(base_url().'dasbor/home/profil');
			}
			else{
				$filename	= base_url().'asset/img/member/ktp/'.$this->input->post('ktplama');
				
				$ktp	= $this->upload->data();
				
				if(file_exists($filename)){
					unlink($filename);
				}
				else{
					$isipesan	= "ccuuukkk";
				}
																
				$data	= array(
					'id_member'=>$this->input->post('idmember'),
					'gbr_ktp'=>$ktp['file_name']
				);
				
				$this->model_member->editktp($data);
				$this->upload->data();
				$this->session->set_flashdata('pesan', $this->upload->display_errors());
				redirect(base_url().'dasbor/home/profil');
			}
		}
	}
}