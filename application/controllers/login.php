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
				redirect(base_url().'pembeli');
			}
		}
		else{
			
			$this->session->set_flashdata('error', 'Username atau Password salah');
			
			redirect(base_url().'page/login');
		}
	}
	
	function logout($user){
		if($user == "member"){
			$this->session->sess_destroy();
			redirect(base_url().'page/login');
		}
		else if($user == "seller"){
			$this->session->sess_destroy();
			redirect(base_url().'toko');
		}
		else{
			$this->session->sess_destroy();
			redirect(base_url().'admin');
		}
	}
	
/*
SELLER
*/
	function seller(){
		$data	= array(
			'title'	=> 'LOGIN SELLER',
			'menu'	=> 'etalase/menu_etalase',
			'isi'	=> 'toko/login'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	function authseller(){
		$this->load->model('penjual/model_seller');
		
		$datalogin	= array(
			'email'=>$this->input->post('email', true),
			'password'=>md5($this->input->post('password', true))
		);
		
		$hasil	= $this->model_seller->login($datalogin);
		
		if($hasil->num_rows() == 1){
			
			$row	= $hasil->row();
			
			if($row->status_system == 0){
				$this->session->set_flashdata('error', 'Oops : akun anda belum divalidasi, silahkan hubungi admin untuk konfirmasi');
				redirect(base_url().'login/seller');
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
			$this->session->set_flashdata('error', 'Oops : Email atau password salah');
			redirect(base_url().'login/seller');
		}
	}
/*-------------------------------------------------------------------------------------------------------------------------*/
	
/*
ADMINISTRATOR
*/
	function admin(){
		$data	= array(
			'title'	=> 'LOGIN ADMIN',
			'menu'	=> 'etalase/menu_etalase',
			'isi'	=> 'admin/login'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	function authadmin(){
		$this->load->model('super_model');
		$salt		= "!@#12345Hnahbsgrdt544#55$3";
		
		$login	= array(
			'user'=>$this->input->post('username', true),
			'pass'=>md5(md5($this->input->post('password', true)).md5($salt))
		);
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if($this->form_validation->run() === false){
			$this->load->view('admin/login');
		}
		else{
			$query	= $this->super_model->viewsuper($login);
			
			if($query->num_rows() > 0){
				foreach($query->result_array() as $adm){
					$data['superadmin']	= $adm['user'];
					$data['pass']		= $adm['pass'];
					$data['id']			= $adm['id'];
					
					$this->session->set_userdata($data);
				}
				
				redirect(base_url().'admin');
			}
			else{
				$this->session->set_flashdata('error','Username atau Password salah');
				redirect(base_url().'login/admin');
			}
			
		}
	}
}