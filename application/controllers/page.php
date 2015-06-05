<?php if(!defined('BASEPATH'))exit ('No direct script access allowed');

class page extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data	= array('title'=>'Rejeki Mall : Nama Page',
		'menu'=>'etalase/menu_etalase',
		'isi'=>'page/main_page'
		);
		$this->load->view('layout/wrapper',$data);	
	}
	
	public function buletin(){
		$data	= array(
			'title'=>'Rejeki Mall : Buletin',
			'menu'=>'etalase/menu_etalase',
			'isi'=>'page/buletin'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	public function about(){
		$data	= array(
			'title'=>'Rejeki Mall : About',
			'menu'=>'etalase/menu_etalase',
			'isi'=>'page/about'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	public function product(){
		$data	= array(
			'title'=>'Rejeki Mall : Product',
			'menu'=>'etalase/menu_etalase',
			'isi'=>'page/product'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	public function iklanbaris(){
		$data	= array(
			'title'=>'Rejeki Mall : Iklan Baris',
			'menu'=>'etalase/menu_etalase',
			'isi'=>'page/iklanbaris'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	public function iklanjasa(){
		$data	= array(
			'title'=>'Rejeki Mall : Iklan Jasa',
			'menu'=>'etalase/menu_etalase',
			'isi'=>'page/iklanjasa'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	public function komplain(){
		$data	= array(
			'title'=>'Rejeki Mall : Komplain',
			'menu'=>'etalase/menu_etalase',
			'isi'=>'page/laporkankomplain'
		);
		
		$this->load->view('layout/wrapper',$data);
	}
}