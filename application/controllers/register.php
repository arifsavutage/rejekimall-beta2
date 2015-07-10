<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('model_city');
		$this->load->model("model_utama");
		$this->load->model("admin/paket_member");
		$this->load->model("admin/paket_seller");
		$this->load->model("admin/paketan_model");
	}
	
	public function index(){
		$data	= array('title'=>'Rejeki Mall : Register',
		'menu'=>'etalase/menu_etalase',
		'kategori'=>$this->model_utama->kategori(),
		'isi'=>'register/registerpenjual'
		);
		$this->load->view('layout/wrapper',$data);
	}
	
	public function pengusaha(){
		$data	= array('title'=>'Register Badan Usaha',
		'menu'=>'etalase/menu_etalase',
		'kategori'=>$this->model_utama->kategori(),
		'isi'=>'register/registerbadanusaha'
		);
		$this->load->view('layout/wrapper',$data);
	}
	
	public function asing(){
		$data	= array('title'=>'Rejeki Mall : Register Seller Asing',
		'menu'=>'etalase/menu_etalase',
		'isi'=>'register/registerglobal'
		);
		$this->load->view('layout/wrapper',$data);
	}
	
	public function seller(){
		$negara	= $this->model_city->getNegara();
		$prop	= $this->model_city->getPropinsi();
		$kota	= $this->model_city->getKota();
		$pkt	= $this->paket_seller->viewpaket();
		$jenis	= $this->paketan_model->showpaketan('seller');
		
		$data	= array(
		'title'		=>'Register Seller',
		'menu'		=>'etalase/menu_etalase',
		'kategori'	=>$this->model_utama->kategori(),
		'negara'	=>$negara,
		'prop'		=>$prop,
		'kota'		=>$kota,
		'paket'		=> $pkt,
		'jenis'		=> $jenis,
		'isi'		=>'register/registerperorangan'
		);
		$this->load->view('layout/wrapper',$data);
	}
	
	public function pembeli(){
		
		$query	= $this->paket_member->viewpaket();
		$data	= array(
			'title'		=>'Rejeki Mall : Register Pembeli',
			'menu'		=>'etalase/menu_etalase',
			'kategori'	=>$this->model_utama->kategori(),
			'pktmember'	=> $query,
			'isi'		=>'register/registerpembeli'
			);
			$this->load->view('layout/wrapper',$data);
	}
}