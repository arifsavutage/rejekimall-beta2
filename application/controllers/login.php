<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class login extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	
	public function index(){
	$data	= array(
		'title'=>'Rejeki Mall : Login',
		'menu'=>'etalase/menu_etalase',
		'isi'=>'page/login'
		);
			
		$this->load->view('layout/wrapper', $data);
	}
	
	function validate_login(){
		$datalogin	= array(
			'user_id'=>$this->input->post('username', true),
			'password'=>md5($this->input->post('password', true))		
		);
		
		$this->load->model('member/model_login');
		$hasil	= $this->model_login->loginval($datalogin);
		
		if($hasil->num_rows() == 1){
			
			$x	= $hasil->row();
			
			if($x->status == 0){				
				$this->session->set_flashdata('error', 'Anda belum memvalidasi akun, silahkan cek email anda');
				redirect(base_url().'page/login');
			}else{
				
				foreach($hasil->result() as $sess){
					$sesdata['logged_in']	= 'Sudah Login';
					$sesdata['idmember']	= $sess->id_member;
					$sesdata['username']	= $sess->user_id;
					
					$this->session->set_userdata($sesdata);
				}
				redirect(base_url().'dasbor/home');
			}
		}
		else{
			
			$this->session->set_flashdata('error', 'Username atau Password salah');
			
			redirect(base_url().'page/login');
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'page/login');
	}
}