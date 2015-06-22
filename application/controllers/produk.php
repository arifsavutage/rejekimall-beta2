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
		if($this->session->userdata('username') == "")
		{
			redirect(base_url().'page/login');
		}
		else{
			$gid	= $this->input->post('kdbrg', true);
			$jml	= $this->input->post('jumlah', true);
			$ukuran	= $this->input->post('ukuran', true);
			$harga	= $this->input->post('harga', true);
			$nmbrg	= $this->input->post('nmbrg', true);
			
			
			$data	= array(
				'id'	=> $gid,
				'qty'	=> $jml,
				'price'	=> $harga,
				'name'	=> $nmbrg,
				'options'=> array('size'=>$ukuran)
			);
			
			$this->cart->insert($data);
				
			redirect(base_url());
		}
		
	}
	
	function updatecart(){
		
		unset($_POST['ubahcart']);
		
		$contents	= $this->input->post();
		
		foreach($contents as $content){
			$data	= array(
				'rowid'	=> $content['rowid'],
				'qty'	=> $content['qty']
			);
			
			$this->cart->update($data);
		}
		
		
		redirect(base_url().'produk/isicart');
	}
	
	function removecart($rowid){
		if($rowid == "all"){
            
			// Destroy data which store in  session.
			$this->cart->destroy();
			
			redirect(base_url());
						
		}else{
            
			// Destroy selected rowid in session.
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
                     // Update cart data, after cancle.
			$this->cart->update($data);
		}
		
		redirect(base_url().'produk/isicart');
	}
	
	function isicart(){
		$data	= array(
			'title'	=> 'Cart View',
			'menu'	=> 'etalase/menu_etalase',
			'isi'	=> 'page/cart_view'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
}