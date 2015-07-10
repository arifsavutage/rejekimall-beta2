<?php if(!defined('BASEPATH'))exit ('No direct script access allowed');

class Page extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model("model_utama");
	}
	
	public function index(){
		$data	= array(
		'title'=>'Rejeki Mall : Nama Page',
		'menu'=>'etalase/menu_etalase',
		'kategori'=>$this->model_utama->kategori(),
		'isi'=>'page/main_page'
		);
		$this->load->view('layout/wrapper',$data);	
	}
	
	public function buletin(){
		$data	= array(
			'title'=>'Rejeki Mall : Buletin',
			'menu'=>'etalase/menu_etalase',
			'kategori'=>$this->model_utama->kategori(),
			'isi'=>'page/buletin'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	public function about(){
		$data	= array(
			'title'=>'Rejeki Mall : About',
			'menu'=>'etalase/menu_etalase',
			'kategori'=>$this->model_utama->kategori(),
			'isi'=>'page/about'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	/*public function product(){
		$data	= array(
			'title'=>'Rejeki Mall : Product',
			'menu'=>'etalase/menu_etalase',
			'isi'=>'page/product'
		);
		
		$this->load->view('layout/wrapper', $data);
	}*/
	
	public function iklanbaris(){
		$data	= array(
			'title'=>'Rejeki Mall : Iklan Baris',
			'menu'=>'etalase/menu_etalase',
			'kategori'=>$this->model_utama->kategori(),
			'isi'=>'page/iklanbaris'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	public function iklanjasa(){
		$data	= array(
			'title'=>'Rejeki Mall : Iklan Jasa',
			'menu'=>'etalase/menu_etalase',
			'kategori'=>$this->model_utama->kategori(),
			'isi'=>'page/iklanjasa'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	public function komplain(){
		$data	= array(
			'title'=>'Rejeki Mall : Komplain',
			'menu'=>'etalase/menu_etalase',
			'kategori'=>$this->model_utama->kategori(),
			'isi'=>'page/laporkankomplain'
		);
		
		$this->load->view('layout/wrapper',$data);
	}
	
	/*public function toko(){
		$data	= array(
			'title'=>'Rejeki Mall : toko',
			'menu'=>'etalase/menu_etalase',
			'isi'=>'toko/pengaturan_toko'
		);
		
		$this->load->view('layout/wrapper',$data);
	}
	
	public function tambah_produk(){
		$data	= array(
			'title'=>'Rejeki Mall : tambah produk',
			'menu'=>'etalase/menu_etalase',
			'isi'=>'toko/tambah_produk'
		);
		
		$this->load->view('layout/wrapper',$data);
	}*/
	
	public function login(){
				
		$data	= array(
			'title'=>'Rejeki Mall : Login',
			'menu'=>'etalase/menu_etalase',
			'isi'=>'page/login'
		);
		$this->load->view('layout/wrapper', $data);
	}
}