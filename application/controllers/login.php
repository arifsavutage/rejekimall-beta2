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
	
	function admin(){
		$this->load->view('admin/login');
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