<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
class home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		
		$this->load->model('model_utama');
		$this->load->model('admin/iklan_model');
		$this->load->model('admin/admin_model');
		$this->load->library('cart');
	}
	
	public function index(){
		$batas	= 11;
		$randproduk	= $this->model_utama->randproduk($batas);
		$slider		= $this->iklan_model->showslider();
		$banner1	= $this->iklan_model->bannerads(1,1);
		$banner2	= $this->iklan_model->bannerads(2,1);
		$banner3	= $this->iklan_model->bannerads(3,1);
		$banner4	= $this->iklan_model->bannerads(4,1);
		$banner5	= $this->iklan_model->bannerads(5,1);
		$banner6	= $this->iklan_model->bannerads(6,1);
		$profil		= $this->admin_model->detailprofilweb();
		
		$data	= array('title'=>'Rejeki Mall',
		'menu'=>'home/menu_home',
		'kategori'=>$this->model_utama->kategori(),
		'randproduk'=>$randproduk,
		'slider'=>$slider,
		'banner1'=>$banner1->row_array(),
		'banner2'=>$banner2->result_array(),
		'banner3'=>$banner3->row_array(),
		'banner4'=>$banner4->row_array(),
		'banner5'=>$banner5->row_array(),
		'banner6'=>$banner6->row_array(),
		'profil'=>$profil,
		'isi'=>'home/index_home');
		$this->load->view('layout/wrapper',$data);
	}
}