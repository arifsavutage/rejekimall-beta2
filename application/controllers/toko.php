<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class toko extends CI_Controller{
	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('userseller') == ""){
			redirect(base_url().'toko');
		}
	}
	
	public function index(){
		$this->load->view('toko/page/login', $data);
	}
}