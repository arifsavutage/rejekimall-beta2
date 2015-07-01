<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class pembeli extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('member/model_member');
		
		if($this->session->userdata('username') == ""){
			redirect(base_url().'page/login');
		}
	}
	
	function index(){
		$data	= array(
		'title'		=> 'Dasbor Pembeli',
		'menu'		=> '',
		'isi'		=> 'pembeli/depan',
		'page'		=> 'pembeli/dasbor'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
}