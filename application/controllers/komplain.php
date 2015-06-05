<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class komplain extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data	= array(
			'title'=>'Rejeki Mall : Komplain',
			'menu'=>'etalase/menu_etalase',
			'isi'=>'toko/laporkankomplain'
			);
		$this->load->view('layout/wrapper', $data);
	}
}