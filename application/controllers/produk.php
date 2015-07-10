<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');
class Produk extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('penjual/model_produk');
		$this->load->model('model_utama');
		$this->load->model('model_city');
		$this->load->model('admin/ongkir_model');
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
	
	function kategori($slug){
		$jml	= $this->model_produk->jmlkat($slug);
		
		$config['base_url']			= base_url().'produk/kategori/'.$slug.'/';
		$config['total_rows']		= $jml->num_rows();
		$config['per_page']			= $per_page	= 8;
		$config['uri_segment']		= 4;
		
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
		
		$page	= ($this->uri->segment(4)) ? $this->uri->segment(4):0;
		
		$kat	= $this->model_produk->bykategori($page, $per_page, $slug);
		
		$data	= array(
			'title'=>'Produk Rejeki Mall',
			'menu'=>'etalase/menu_etalase',
			'detail'=>$kat,
			'kategori'=>$this->model_utama->kategori(),
			'paging'=> $this->pagination->create_links(),
			'isi'=>'page/kategori'
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
	
	function bayarbilling(){
		$this->form_validation->set_rules('to', true);
		$this->form_validation->set_rules('negara', true);
		$this->form_validation->set_rules('propinsi', true);
		$this->form_validation->set_rules('kota', true);
		$this->form_validation->set_rules('alamat', true);
		$this->form_validation->set_rules('kdpos', true);
		$this->form_validation->set_rules('kontak', true);
		
		if($this->form_validation->run() === false){
			$data	= array(
				'title'		=>'Billing',
				'menu'		=>'etalase/menu_etalase',
				'negara'	=> $this->model_city->getNegara(),
				'propinsi'	=> $this->model_city->getPropinsi(),
				'kota'		=> $this->model_city->getKota(),
				'kategori'	=>$this->model_utama->kategori(),
				'ongkir'	=>$this->ongkir_model->viewongkir(),	
				'isi'=>'page/billing'
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else{
			$this->load->model('model_transaksi');
			
			$negara	= $this->input->post('negara');
			$prop	= $this->input->post('propinsi');
			$kota	= $this->input->post('kota');
			
			$ongkir	= $this->ongkir_model->cariongkir($negara, $prop, $kota);
			
			#RAND()
			$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < 5; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}				
			#END RAND()
			
			$idpesan	= $this->session->userdata('idmember').'-'.$randomString;
			
			$order	= array(
				'idpesan'		=> $idpesan,
				'id_member'		=> $this->session->userdata('idmember'),
				'waktu'			=> date('Y-m-d H:i:s'),
				'totalbayar'	=> $this->input->post('totbayar'),
				'ongkoskirim'	=> $ongkir['harga'],
				'to'			=> $this->input->post('to'),
				'alamat'		=> $this->input->post('alamat'),
				'kdpos'			=> $this->input->post('kdpos'),
				'kontak'		=> $this->input->post('kontak'),
			);
			
			$this->model_transaksi->order($order);
			
			foreach($this->cart->contents() as $orderdetail){
				$detail	= array(
					'idpesan'	=> $idpesan,
					'gid'		=> $orderdetail['id'],
					'jml'		=> $orderdetail['qty'],
					'subtotal'	=> $orderdetail['subtotal'],
					'warna'		=> $orderdetail['options']['warna'],
					'ukuran'	=> $orderdetail['options']['size']
				);
				
				$this->model_transaksi->orderdetail($detail);
				$this->model_produk->kurangistok($detail);
			}
			
			$this->cart->destroy();
			
			echo "<h1>Kode Order : $idpesan</h1>
			<br >
			<span style='font-size:10px;color:red;'>
				Simpan dengan baik kode order anda, silahkan gunakan untuk konfirmasi transfer atau tracking
			</span>";
			$this->session->set_flashdata('pesan',"<h1>Kode Order : $idpesan</h1>
			<br >
			<span style='font-size:12px;color:red;'>
				Simpan dengan baik kode order anda, silahkan gunakan untuk konfirmasi transfer atau tracking
			</span>");
			redirect(base_url().'produk/bayarbilling');
		}
		
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
				
			redirect(base_url().'produk/detail/'.$this->input->post('kdbrg'));
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
			'title'		=> 'Keranjang Belanja',
			'menu'		=> 'etalase/menu_etalase',
			'kategori'	=> $this->model_utama->kategori(),
			'isi'		=> 'page/cart_view'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
}