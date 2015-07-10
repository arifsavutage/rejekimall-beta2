<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
#class controller ini untuk mengatur proses auth. login seller

class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('penjual/model_seller');
	}
	
	public function index(){
		$this->load->view('toko/page/login');
	}
	
	function loginauth($data){
		$datalogin	= array(
			'email'=>$this->input->post('email', true),
			'password'=>md5($this->input->post('password', true))
		);
		
		$hasil	= $this->model_seller->login($datalogin);
		
		if($hasil->num_rows() == 1){
			
			$row	= $hasil->row();
			
			if($row->status_system == 0){
				$this->session->set_flashdata('error', 'akun anda belum divalidasi, silahkan hubungi admin untuk konfirmasi');
				redirect(base_url().'penjual/login');
			}
			else{
				foreach($hasil->result() as $sessme){
					$sessdata['idseller']	= $sessme->id_seller;
					$sessdata['userseller']	= $sessme->nama;
					
					$this->session->set_userdata($sessdata);
				}
				
				redirect(base_url().'toko');
			}
			
		}
		else{
			$this->session->set_flashdata('error', 'Email atau password salah');
			redirect(base_url().'penjual/login');
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		
		redirect(base_url().'penjual/login');
	}
}