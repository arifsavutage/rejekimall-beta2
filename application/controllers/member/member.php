<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class member extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('member/model_member');
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
			#$iduser	= $this->input->post('id_user');
			$data	= array(
			'user_id'=>$this->input->post('username', true),
			'nama'=>$this->input->post('nama', true),
			'jk'=>$this->input->post('jk', true),
			'email'=>$this->input->post('email', true),
			'password'=>md5($this->input->post('pass2', true)),
			'foto'=>'nopic.png',
			'golongan'=>'3'
			);
			
			$this->model_member->simpan($data);
			redirect(base_url().'register/pembeli');
			
		}
			
	}
}