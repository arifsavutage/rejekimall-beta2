<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class jajal extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('jajal_model');
	}
	
	public function index(){
		$query	= $this->jajal_model->ahay();
		
		
		$data	= array('nampil'=>$query, 'title'=>'hasuu');
		$this->load->view('jajal', $data);
	}
	
	public function passadm(){
		$passadm	= "super4dm1n";
		$salt		= "!@#12345Hnahbsgrdt544#55$3";
		$encrypt	= md5(md5($passadm).md5($salt));
		
		$data	= array(
			'mypass'=>$encrypt
		);
		
		$this->load->view('jajalpas', $data);
	}
}