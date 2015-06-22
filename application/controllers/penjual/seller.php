<?php if(!defined('BASEPATH')) exit('No direct access script allowed');
#class controller ini hanya berfungsi untuk CRUD

class seller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('penjual/model_seller');
		
	}
	
	public function index(){
		#$this->load->view('toko/page/login');
	}
	
	function tambah(){
		$this->form_validation->set_rules('toko', 'Nama Toko', 'required');
		$this->form_validation->set_rules('nama', 'Nama Lengap', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('pass1', 'Password', 'required');
		$this->form_validation->set_rules('pass2', 'Re-Type Password', 'required');
		$this->form_validation->set_rules('hp', 'Handphone', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('negara', 'Negara', 'required');
		$this->form_validation->set_rules('propinsi', 'Propinsi', 'required');
		$this->form_validation->set_rules('kota', 'Kota', 'required');
		$this->form_validation->set_rules('kec', 'Kecamatan', 'required');
		$this->form_validation->set_rules('kdpos', 'Kode Pos', 'required');
		$this->form_validation->set_rules('nmbank', 'Nama Bank', 'required');
		$this->form_validation->set_rules('an', 'Pemilik rekening', 'required');
		$this->form_validation->set_rules('norek', 'Nomor Rekening', 'required');
		$this->form_validation->set_rules('cabang', 'Nama Cabang', 'required');
		
		if($this->form_validation->run() === false){
			$data	= array(
				'title'=>'Rejeki Mall : Register Seller',
				'menu'=>'etalase/menu_etalase',
				'isi'=>'register/registerperorangan'
			);
			
			$this->load->view('layout/wrapper',$data);			
		}
		else if($this->model_seller->cekuname($this->input->post('email', true)) > 0)
		{
			$data	= array(
				'title'=>'Rejeki Mall : Register Seller',
				'menu'=>'etalase/menu_etalase',
				'error'=>'Email '.$this->input->post('email').' Sudah Digunakan',
				'isi'=>'register/registerperorangan'
			);
			
			$this->load->view('layout/wrapper',$data);
		}
		else{
			
			$data	= array(
			'nama_toko'=>$this->input->post('toko', true),
			'username'=>$this->input->post('email', true),
			'nama'=>$this->input->post('nama', true),
			'email'=>$this->input->post('email', true),
			'password'=>md5($this->input->post('pass2', true)),
			'alamat'=>$this->input->post('alamat', true),
			'negara'=>$this->input->post('negara', true),
			'provinsi'=>$this->input->post('propinsi', true),
			'kota'=>$this->input->post('kota', true),
			'kecamatan'=>$this->input->post('kec', true),
			'kodepos'=>$this->input->post('kdpos', true),
			'pin'=>$this->input->post('pin', true),
			'nohp'=>$this->input->post('hp', true),
			'namabank'=>$this->input->post('nmbank', true),
			'cabang'=>$this->input->post('cabang', true),
			'pemilikrek'=>$this->input->post('an', true),
			'norek'=>$this->input->post('norek', true),
			'tgl_registrasi'=>date('Y-m-d'),
			'foto'=>'nopic.png',
			'golongan'=>'2'
			);
			
			$exe	= $this->model_seller->tambahseller($data);
			
			if($exe){
				$this->session->set_flashdata('pesan','<div class="alert-box">
				Pendaftaran berhasil, silahkan tunggu konfirmasi admin
				<a href="#" class="close">&times;</a>
				</div>');
				redirect(base_url().'register/seller');
			}
			else{
				$this->session->set_flashdata('pesan','<div class="alert-box warning">
				Pendaftaran gagal tersimpan..!!
				<a href="#" class="close">&times;</a>
				</div>');
				redirect(base_url().'register/seller');
			}
			
		}
	}
}