<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class register extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('model_city');
	}
	
	public function index(){
		$data	= array('title'=>'Rejeki Mall : Register',
		'menu'=>'etalase/menu_etalase',
		'isi'=>'register/registerpenjual'
		);
		$this->load->view('layout/wrapper',$data);
	}
	
	public function pengusaha(){
		$data	= array('title'=>'Rejeki Mall : Register Badan Usaha',
		'menu'=>'etalase/menu_etalase',
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
		
		$data	= array('title'=>'Rejeki Mall : Register Seller',
		'menu'=>'etalase/menu_etalase',
		'negara'=>$negara,
		'prop'=>$prop,
		'kota'=>$kota,
		'isi'=>'register/registerperorangan'
		);
		$this->load->view('layout/wrapper',$data);
	}
	
	public function pembeli(){
				
		$data	= array('title'=>'Rejeki Mall : Register Pembeli',
		'menu'=>'etalase/menu_etalase',
		'isi'=>'register/registerpembeli'
		);
		$this->load->view('layout/wrapper',$data);
	}
}