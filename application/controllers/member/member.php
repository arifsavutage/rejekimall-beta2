<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Member extends CI_Controller{
	
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
		$this->form_validation->set_rules('pktmember', 'Paket Member', 'required');
		$this->form_validation->set_rules('nama', 'Nama Lengap', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('username', 'User Name', 'required');
		$this->form_validation->set_rules('pktmember', 'Paket Member', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('pass1', 'Password', 'required');
		$this->form_validation->set_rules('pass2', 'Re-Type Password', 'required');
		
		if($this->form_validation->run() === false){
			$data	= array(
				'title'	=> 'Register Pembeli',
				'menu'	=> 'etalase/menu_etalase',
				'isi'	=> 'register/registerpembeli'
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
			'gbr_ktp'=>'blank-id-card.jpg',
			'golongan'=>'3',
			'memberpoin'=>$poin['poin']
			);
			
			if(!empty($sponsor)){
				$this->load->model('admin/paketan_model');
				$untuk	= "member";
				$poin	= $this->paketan_model->ambilpoin($untuk);
				
				$dapatpoin	= array(
					'id_member'		=> $sponsor,
					'memberpoin'	=> $poin['poinspon']
				);
				$this->model_member->addpoin($dapatpoin);
			}
			
			$this->model_member->simpan($data);
			$this->session->set_flashdata('pesan','<div data-alert class="alert-box info">
				Pendaftaran berhasil, silahkan tunggu konfirmasi
				<a href="#" class="close">&times;</a>
			</div>');
			redirect(base_url().'register/pembeli');
			
		}
			
	}
}