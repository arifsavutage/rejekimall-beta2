<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class etalase extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model("model_utama");
	}
	
	public function index(){
		$data	= array('title'=>'Rejeki Mall - Etalase',
		'menu'=>'etalase/menu_etalase',
		'kategori'=>$this->model_utama->kategori(),
		'isi'=>'etalase/index_etalase'
		);
		
		$this->load->view('layout/wrapper',$data);
	}
}