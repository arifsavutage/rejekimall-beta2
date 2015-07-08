<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Konfirmasi extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('admin/bank_model');
		$this->load->model('model_konfirmasi');
	}
	
	function index(){
		$bank	= $this->bank_model->viewbank();
		
		$data	= array(
			'title'	=> 'Panel Konfirmasi',
			'menu'	=> 'etalase/menu_etalase',
			'isi'	=> 'konfirmasi/index',
			'bank'	=> $bank
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	function kirimemail(){
		$email		= 'arifsavutage@gmail.com';
		$nama		= 'Server Rejeki Mall';
		$subjek		= 'konfirmasi akun';
		$pesan		= 'Silahkan klik link <a href="http://www.facebook.com" target="_blank">ini</a>';
		
		$config		= array(
			'protocol'		=> 'smtp',
			'smtp_host'		=> 'ssl://smtp.googlemail.com',
			'smtp_port'		=> 465,
			'smpt_user'		=> 'arifokbgt@gmail.com',
			'smtp_pass'		=> '4r1f0kbgt',
			'mailtype'		=> 'html',
			'charset'		=> 'iso-8859-1',
			'wordwrap'		=> true
		);
		
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from($email);
		$this->email->to('arif@nitikaryawiguna.co.id');
		$this->email->subject($subjek);
		$this->email->message($pesan);
		
		if($this->email->send()){
			echo "email terkirim";
		}
		else{
			show_error($this->email->print_debugger());
		}
	}
	
	function konfirmseller(){
		$this->form_validation->set_rules('email', true);
		$this->form_validation->set_rules('banktrans1', true);
		
		$config['file_name']		= $_FILES['gbtrans1']['name'];
		$config['allowed_types']	= 'jpg|gif|png|jpeg';
		$config['upload_path']		= 'asset/img/konfirm';
		$config['max_size']			= '100';
		$config['max_width']		= '1000';
		$config['max_height']		= '1000';
		
		$this->upload->initialize($config);
		
		if($this->form_validation->run() === false){
			redirect(base_url().'konfirmasi');
		}
		else{
			
			if(!$_FILES['gbtrans1']['name']){
				if(!$this->upload->do_upload('gbtrans1')){
					$this->session->set_flashdata('pesan','Gagal Upload Gambar..');
					redirect(base_url().'konfirmasi');
				}
				else{
					$gbr	= $this->upload->data();
					$data	= array(
						'email'		=> $this->input->post('email', true),
						'fotobukti'	=> $gbr['file_name'],
						'bank'		=> $this->input->post('banktrans1')
					);
					
					$this->model_konfirmasi->simpan($data);
					$this->upload->data();
					
					$this->session->set_flashdata('pesan','Konfirmasi berhasil');
					redirect(base_url().'konfirmasi');
				}
				
			}
			
		}
	}
	
	function konfirmmember(){
		$this->form_validation->set_rules('email2', true);
		$this->form_validation->set_rules('banktrans2', true);
		
		$config['file_name']		= $_FILES['gbtrans2']['name'];
		$config['allowed_types']	= 'jpg|gif|png|jpeg';
		$config['upload_path']		= 'asset/img/konfirm';
		$config['max_size']			= '100';
		$config['max_width']		= '1000';
		$config['max_height']		= '1000';
		
		$this->upload->initialize($config);
		
		if($this->form_validation->run() === false){
			redirect(base_url().'konfirmasi');
		}
		else{
			
			if(!$_FILES['gbtrans2']['name']){
				if(!$this->upload->do_upload('gbtrans2')){
					$this->session->set_flashdata('pesan','Gagal Upload Gambar..');
					redirect(base_url().'konfirmasi');
				}
				else{
					$gbr	= $this->upload->data();
					$data	= array(
						'email'		=> $this->input->post('email2', true),
						'fotobukti'	=> $gbr['file_name'],
						'bank'		=> $this->input->post('banktrans2')
					);
					
					$this->model_konfirmasi->simpan($data);
					$this->upload->data();
					
					$this->session->set_flashdata('pesan','Konfirmasi Berhasil..');
					redirect(base_url().'konfirmasi');
				}
				
			}
			
		}
	}
}