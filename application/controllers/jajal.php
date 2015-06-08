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
}