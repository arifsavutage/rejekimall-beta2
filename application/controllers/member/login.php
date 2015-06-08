<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class login extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
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
		$this->load->model('member/model_login');
		$query	= $this->model_login->loginval($this->input->post('username'),$this->input->post('password'));
		
		if($query){
			$data	= array(
				'userlogin'=>$this->input->post('username'),
				'is_logged_in'=>true
			);
			
			$this->session->set_userdata($data);
			redirect(base_url().'dasbor/home');
		}
		else{
			$data	= array(
				'title'=>'Rejeki Mall : Login',
				'menu'=>'etalase/menu_etalase',
				'quer'=>$query,
				'error'=>'Username atau Password salah',
				'isi'=>'page/login'
			);
			
			$this->load->view('layout/wrapper', $data);
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'page/login');
	}
}