<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		
	}
	
	public function index(){
		$seslogin	= $this->session->userdata('userlogin');
		if(!isset($seslogin)){
			redirect(base_url().'page/login');
		}
		else{
			$data	= array(
			'title'=>'Dashboard Rejeki Mall',
			'isi'=>'dasbor/page/main_page'
			);
			
			$this->load->view('dasbor/layout/wrapper', $data);
		}
		
	}
}