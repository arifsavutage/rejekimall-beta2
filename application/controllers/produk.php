<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');
class produk extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('penjual/model_produk');
		$this->load->database();
	}
	
	function index(){
		$query	= $this->model_produk->allproduk();
		$data	= array(
			'title'=>'All Produk',
			'menu'=>'etalase/menu_etalase',
			'detail'=>$query,
			'isi'=>'toko/view_produk'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	function detail($gid){
		#$id		= $this->session->userdata('idseller');
		$row	= $this->model_produk->detailproduk($gid);
		
		$data	= array(
			'title'=>'Produk Rejeki Mall',
			'menu'=>'etalase/menu_etalase',
			'detail'=>$row->row_array(),
			'isi'=>'page/product'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	function addcart(){
		$gid	= $this->input->post('kdbrg', true);
		$jml	= $this->input->post('jumlah', true);
		$ukuran	= $this->input->post('ukuran', true);
		$harga	= $this->input->post('harga', true);
		
		
		$data	= array(
			'id'	=> '$gid',
			'qty'	=> '$jml',
			'price'	=> '$harga',
			'option'=> array('size'=>'$ukuran')
		);
		
		$this->cart->insert($data);
			
		redirect(base_url());
	}
	
	function isicart(){
		$cart	= $this->cart->contents();
		
		echo "<pre>";
		echo print_r($cart);
	}
}