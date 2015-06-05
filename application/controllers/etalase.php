<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class etalase extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data	= array('title'=>'Rejeki Mall - Etalase',
		'menu'=>'etalase/menu_etalase',
		'isi'=>'etalase/index_etalase'
		);
		
		$this->load->view('layout/wrapper',$data);
	}
}