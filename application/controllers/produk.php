<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');
class produk extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('penjual/model_produk');
		$this->load->model('model_utama');
	}
	
	function index(){
		redirect(base_url().'produk/all');
	}
	
	function all(){
		$jml	= $this->model_produk->jmlrow();
		
		$config['base_url']			= base_url().'produk/all/';
		$config['total_rows']		= $jml->num_rows();
		$config['per_page']			= $per_page	= 8;
		$config['uri_segment']		= 3;
		
		$config['full_tag_open']	= "<ul class='pagination'>";
		$config['full_tag_close']	= "</ul>";
		$config['num_tag_open']		= "<li>";
		$config['num_tag_close']	= "</li>";
		$config['cur_tag_open']		= "<li class='current'><a href=''>";
		$config['cur_tag_close']	= "</li>";
		$config['first_tag_open'] 	= "<li class='arrow'><a href=''>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] 	= "<li class='arrow'><a href=''>";
		$config['last_tagl_close'] 	= "</li>";
		
		$this->pagination->initialize($config);
		
		$page	= ($this->uri->segment(3)) ? $this->uri->segment(3):0;
		$query	= $this->model_produk->allproduk($page, $per_page);
		
		$data	= array(
			'title'=>'All Produk',
			'menu'=>'etalase/menu_etalase',
			'detail'=>$query->result_array(),
			'kategori'=>$this->model_utama->kategori(),
			'paging'=> $this->pagination->create_links(),
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
			'kategori'=>$this->model_utama->kategori(),
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
			$warna	= $this->input->post('warna', true);
			
			
			$data	= array(
				'id'	=> $gid,
				'qty'	=> $jml,
				'price'	=> $harga,
				'name'	=> $nmbrg,
				'options'=> array('size'=>$ukuran, 'warna'=>$warna)
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