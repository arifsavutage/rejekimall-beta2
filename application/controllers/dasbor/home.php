<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('member/model_member');
	}
	
	public function index(){
		$seslogin	= $this->session->userdata('userlogin');
		if(!isset($seslogin)){
			redirect(base_url().'page/login');
		}
		else{
			$data	= array(
			'title'=>'Dashboard Rejeki Mall',
			'isi'=>'dasbor/page/main_member_dasbor'
			);
			
			$this->load->view('dasbor/layout/wrapper', $data);
		}
		
	}
	
	public function profil(){
		$idmember	= $this->session->userdata('iduser');
		$data	= array(
			'title'=>'Profile Control',
			'detail'=>$this->model_member->detail_member($idmember),
			'isi'=>'dasbor/page/profile_control'
			);
			
			$this->load->view('dasbor/layout/wrapper', $data);
	}
}