<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
class home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		
		$this->load->model('model_utama');
		$this->load->library('cart');
	}
	
	public function index(){
		
		$randproduk	= $this->model_utama->randproduk();
		
		$data	= array('title'=>'Rejeki Mall',
		'menu'=>'home/menu_home',
		'randproduk'=>$randproduk,
		'isi'=>'home/index_home');
		$this->load->view('layout/wrapper',$data);
	}
}