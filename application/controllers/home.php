<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
class home extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data	= array('title'=>'Rejeki Mall',
		'menu'=>'home/menu_home',
		'isi'=>'home/index_home');
		$this->load->view('layout/wrapper',$data);
	}
}