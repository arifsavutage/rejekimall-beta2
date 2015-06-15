<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
#class controller ini untuk mengatur view dasbor sellernya

class toko extends CI_Controller{
	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('userseller') == ""){
			redirect(base_url().'penjual/login');
		}
		
		$this->load->model('penjual/model_kategori');
		$this->load->model('penjual/model_produk');
	}
	
	public function index(){
		$data	= array(
			'title'=>'Dasbor Seller Rejeki Mall',
			'isi'=>'toko/page/home'
		);
		
		$this->load->view('toko/layout/wrapper', $data);
	}
	
	/*Kategori*/
	function tambah_kategori(){
		$this->form_validation->set_rules('namakat', 'Nama Kategori', 'required');
		
		if($this->form_validation->run() === false){
			$data	= array(
				'title'=>'Tambah Kategori',
				'isi'=>'toko/page/tambahkat'
			);
			
			$this->load->view('toko/layout/wrapper', $data);
		}
		else{
			$masuk	= array(
				'id_seller'=>$this->session->userdata('idseller'),
				'nama'=>$this->input->post('namakat', true)
			);
			
			$this->model_kategori->tambahkat($masuk);
			redirect(base_url().'toko/tampil_kat');			
		}
	}
	
	function tampil_kat(){
		$id		= $this->session->userdata('idseller');
		$query	= $this->model_kategori->tampilkat($id);
		$data	= array(
			'title'=>'Data Kategori',
			'isi'=>'toko/page/datakat',
			'detail'=>$query
		);
		
		$this->load->view('toko/layout/wrapper', $data);
	}
	/*End Of Kategori*/
	
	/*Produk*/
	function tambah_produk(){
		
		$this->load->library('upload');
		
		$this->form_validation->set_rules('katproduk', 'Kategori Produk', 'required');
		$this->form_validation->set_rules('nmproduk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('satuan', 'KSatuan', 'required');
		$this->form_validation->set_rules('harga', 'Harga Produk', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan Produk', 'required');
		
		if($this->form_validation->run() === false){
			$data	= array(
				'title'=>'Tambah Produk',
				'kategori'=>$this->model_kategori->tampilkat($this->session->userdata('idseller')),
				'isi'=>'toko/page/tambahproduk'
			);
		
			$this->load->view('toko/layout/wrapper', $data);
		}else{
			$ids		= $this->session->userdata('idseller');
			$gbproduk	= $ids."_".$_FILES['gambar']['name'];
			
			$config['file_name']		= $gbproduk;
			$config['allowed_types']	= 'jpg|png|gif|jpeg';
			$config['upload_path']		= 'asset/img/seller/produk';
			$config['max_size']			= '300';
			$config['max_width']		= '1000';
			$config['max_height']		= '1000';
			
			$this->upload->initialize($config);
			
			if($_FILES['gambar']['name']){
				
				if(!$this->upload->do_upload('gambar')){
					$this->session->set_flashdata('pesan',$this->upload->display_errors());
					redirect(base_url().'toko/tambah_produk');
				}
				else{
					$gb	= $this->upload->data();
					
					$simpan	= array(
						'cid'=>$this->input->post('katproduk', true),
						'nama'=>$this->input->post('nmproduk', true),
						'satuan'=>$this->input->post('satuan', true),
						'harga'=>$this->input->post('harga', true),
						'gambar'=>$gb['file_name'],
						'keterangan'=>$this->input->post('keterangan', true),
						'diskon'=>$this->input->post('diskon', true),
						'bes_seller'=>$this->input->post('best', true),
					);
					
					$this->model_produk->createproduk($simpan);
					$this->upload->data();
					$this->session->set_flashdata('pesan', 'Data tersimpan');
					
					redirect(base_url().'toko/tampil_produk');
				}	
			}
			
		}
		
	}
	
	function tampil_produk(){
		$id		= $this->session->userdata('idseller');
		$query	= $this->model_produk->readproduk($id);
		
		$data	= array(
			'title'=>'Daftar Produk',
			'detail'=>$query->result_array(),
			'isi'=>'toko/page/dataproduk'
		);
		
		$this->load->view('toko/layout/wrapper', $data);
	}
}