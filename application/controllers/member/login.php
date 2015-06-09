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
		$datalogin	= array(
			'user_id'=>$this->input->post('username', true),
			'password'=>md5($this->input->post('password', true))		
		);
		
		$this->load->model('member/model_login');
		$hasil	= $this->model_login->loginval($datalogin);
		
		if($hasil->num_rows() == 1){
			
			foreach($hasil->result() as $sess){
				$sesdata['logged_in']	= 'Sudah Login';
				$sesdata['idmember']	= $sess->id_member;
				$sesdata['username']	= $sess->user_id;
				$sesdata['statusvalid']	= $sess->status;
				
				$this->session->set_userdata($sesdata);
			}
			
			redirect(base_url().'dasbor/home');
			/*$statvalid	= $this->session->userdata('statusvalid');
			if($statvalid == 0){
				$data	= array(
					'title'=>'Rejeki Mall : Login',
					'menu'=>'etalase/menu_etalase',
					'error'=>'Anda belum memvalidasi akun, silahkan cek email anda..',
					'isi'=>'page/login'
					);
						
					$this->load->view('layout/wrapper', $data);
			}else{
				redirect(base_url().'dasbor/home');
			}*/
		}
		else{
			/*$data	= array(
				'title'=>'Rejeki Mall : Login',
				'menu'=>'etalase/menu_etalase',
				'error'=>'Username atau Password salah',
				'isi'=>'page/login'
			);
			
			$this->load->view('layout/wrapper', $data);*/
			$data['error']	= 'Username atau Password salah';
			
			redirect(base_url().'page/login', $data);
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'page/login');
	}
}