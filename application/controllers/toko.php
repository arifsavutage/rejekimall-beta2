<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
#class controller ini untuk mengatur view dasbor sellernya

class toko extends CI_Controller{
	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('userseller') == ""){
			redirect(base_url().'login/seller');
		}
		
		$this->load->model('penjual/model_kategori');
		$this->load->model('penjual/model_produk');
		$this->load->model('penjual/model_brand');
		$this->load->model('penjual/model_seller');
		$this->load->model('model_city');
	}
	
	public function index(){
		$data	= array(
			'title'=>'Dasbor Seller',
			'menu'=>'',
			'isi'=>'toko/page/home',
			'page'=>'toko/page/depan'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	/*PROFIL SELLER*/
	function profilseller(){
		$this->form_validation->set_rules('nmtoko', 'Nama Toko', 'required');
		$this->form_validation->set_rules('nmseller', 'Nama Seller', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('negara', 'Negara', 'required');
		$this->form_validation->set_rules('propinsi', 'Propinsi', 'required');
		$this->form_validation->set_rules('kotakab', 'Kota / Kab.', 'required');
		$this->form_validation->set_rules('kec', 'Kecamatan', 'required');
		$this->form_validation->set_rules('kdpos', 'Kode Pos', 'required');
		$this->form_validation->set_rules('hp', 'No. Handphone', 'required');
		$this->form_validation->set_rules('nmbank', 'Nama Bank', 'required');
		$this->form_validation->set_rules('an', 'Nama Pemilik Rek.', 'required');
		$this->form_validation->set_rules('norek', 'Nomor Rek.', 'required');
		$this->form_validation->set_rules('cabang', 'Cabang', 'required');
		
		if($this->form_validation->run() === false){
			$query	= $this->model_seller->detailseller($this->session->userdata('idseller'));
			
			$negara	= $this->model_city->getNegara();
			$prop	= $this->model_city->getPropinsi();
			$kota	= $this->model_city->getKota();
			
			$data	= array(
				'title'		=> 'Profil Seller',
				'menu'		=> '',
				'isi'		=> 'toko/page/home',
				'page'		=> 'toko/page/profil',
				'negara'	=> $negara,
				'prop'		=> $prop,
				'kota'		=> $kota,
				'detail'	=> $query
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else{
			$edit	= array(
				'id_seller'	=> $this->input->post('idseller'),
				'nama_toko'	=> $this->input->post('nmtoko', true),
				'nama'		=> $this->input->post('nmseller', true),
				'alamat'	=> $this->input->post('alamat', true),
				'negara'	=> $this->input->post('negara'),
				'provinsi'	=> $this->input->post('propinsi'),
				'kota'		=> $this->input->post('kotakab'),
				'kecamatan'	=> $this->input->post('kec', true),
				'kodepos'	=> $this->input->post('kdpos', true),
				'nohp'		=> $this->input->post('hp', true),
				'pin'		=> $this->input->post('pin', true),
				'website'	=> $this->input->post('website', true),
				'namabank'	=> $this->input->post('nmbank', true),
				'pemilikrek'=> $this->input->post('an', true),
				'norek'		=> $this->input->post('norek', true),
				'cabang'	=> $this->input->post('cabang', true),
			);
			
			$this->model_seller->editseller($edit);
			$this->session->set_flashdata('pesan', '<strong>Profil Berhasil Dirubah..</strong>');
			redirect(base_url().'toko/profilseller');
		}
	}
	/*END OF PROFIL SELLER*/
	
	/*AKUN SELLER*/
	function akun(){
		
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('passlama', 'Password Lama', 'required');
		$this->form_validation->set_rules('pass1', 'Password Baru', 'required');
		$this->form_validation->set_rules('pass2', 'Ulangi Password', 'required');
		
		if($this->form_validation->run() === false){
			$query	= $this->model_seller->detailseller($this->session->userdata('idseller'));
			$data	= array(
				'title'		=> 'Akun Seller',
				'menu'		=> '',
				'isi'		=> 'toko/page/home',
				'page'		=> 'toko/page/akun',
				'detail'	=> $query
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else if(md5($this->input->post('passlama', true)) != $this->input->post('passlamax')){
			$this->session->set_flashdata('pesan', '<strong>Password Tidak Sama..</strong>');
			redirect(base_url().'toko/akun');
		}
		else{
			$ubah	= array(
				'id_seller'	=> $this->input->post('idseller'),
				'email'		=> $this->input->post('email', true),
				'password'	=> md5($this->input->post('pass2', true))
			);
			
			$this->model_seller->editseller($ubah);
			$this->session->set_flashdata('pesan', '<strong>Akun Berhasil Dirubah..</strong>');
			redirect(base_url().'toko/akun');
		}
		
	}
	/*END OF AKUN SELLER*/
	
	/*UPLOAD FOTO PP*/
	function upfoto(){
		$data	= array(
			'title'		=> 'Upload Foto',
			'menu'		=> '',
			'isi'		=> 'toko/page/home',
			'page'		=> 'toko/page/upfoto'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	function upfotoexe(){
		$this->load->library('upload');
		
		$idseller	= $this->session->userdata('idseller');
		$nmseller	= $this->model_seller->detailseller($idseller);
		
		$split		= explode(".", $_FILES['pp']['name']);
		$newname	= $nmseller['nama'].".".$split[1];
		
		$config['file_name']		= $newname;
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['upload_path']		= 'asset/img/seller/picprofile';
		$config['max_size']			= '100';
		$config['max_width']		= '1024';
		$config['max_height']		= '768';
		
		$this->upload->initialize($config);
		
		if($_FILES['pp']['name']){
			if(!$this->upload->do_upload('pp')){
				$this->session->set_flashdata('pesan',"<div class='alert alert-warning'>
				  <button type='button' class='close' data-dismiss='alert'>&times;</button>
				  <strong>Warning!</strong> Ngga Bisa di Upload
				</div>");
				redirect(base_url().'toko/upfoto');
			}
			else{
				$gbr	= $this->upload->data();
				
				$data	= array(
					'id_seller'=>$idseller,
					'foto'=>$gbr['file_name']
				);
				
				$this->model_seller->editseller($data);
				$this->upload->data();
				
				$this->session->set_flashdata('pesan', "teruplaod");
				redirect(base_url().'toko/upfoto');
			}
		}
	}
	/*END OF UPLOAD FOTO PP*/
	
	/*Kategori*/
	function tambah_kategori(){
		$this->form_validation->set_rules('namakat', 'Nama Kategori', 'required');
		
		if($this->form_validation->run() === false){
			
			$data	= array(
				'title'=>'Tambah Kategori',
				'menu'=>'',
				'isi'=>'toko/page/home',
				'page'=>'toko/page/tambahkat'
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else{
			
			$slugkat	= url_title(strtolower($this->input->post('namakat')), 'dash', true);
			
			$masuk	= array(
				'id_seller'	=> $this->session->userdata('idseller'),
				'nama'		=> $this->input->post('namakat', true),
				'slugkat'	=> $slugkat
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
			'menu'=>'',
			'isi'=>'toko/page/home',
			'page'=>'toko/page/datakat',
			'detail'=>$query
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	function editkat($cid){
		$this->form_validation->set_rules('namakat','Nama Kategori', 'required');
		
		if($this->form_validation->run() === false){
			$data	= array(
				'title'=>'Edit Kategori',
				'menu'=>'',
				'isi'=>'toko/page/home',
				'page'=>'toko/page/edit_kat',
				'detail'=>$this->model_kategori->detail($cid)
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else{
			$slugkat	= url_title(strtolower($this->input->post('namakat')), 'dash', true);
			
			$data	= array(
				'cid'		=> $this->input->post('cid'),
				'nama'		=> $this->input->post('namakat'),
				'slugkat'	=> $slugkat
			);
			
			$this->model_kategori->edit($data);
			redirect(base_url().'toko/tampil_kat');
		}
	}
	
	function delkat($cid){
		$this->model_kategori->delete($cid);
		redirect(base_url().'toko/tampil_kat');
	}
	/*End Of Kategori*/
	
	/*Brand*/
	function addbrand(){
		$this->form_validation->set_rules('nmbrand', 'Nama Brand', 'required');
		
		if($this->form_validation->run() === false){
			
			$data	= array(
					'title'=>'Tambah Brand',
					'menu'=>'',
					'isi'=>'toko/page/home',
					'page'=>'toko/page/addbrand'
				);
				
				$this->load->view('layout/wrapper', $data);
		}
		else{
			$ids		= $this->session->userdata('idseller');
			$brand		= $ids."_".$_FILES['brand']['name'];
			
			$config['file_name']		= $brand;
			$config['allowed_types']	= 'jpg|png|gif|jpeg';
			$config['upload_path']		= 'asset/img/brand';
			$config['max_size']			= '300';
			$config['max_width']		= '1000';
			$config['max_height']		= '1000';
			
			$this->upload->initialize($config);
			
			if($_FILES['brand']['name']){
				
				if(!$this->upload->do_upload('brand')){
					$this->session->set_flashdata('pesan',$this->upload->display_errors());
					redirect(base_url().'toko/addbrand');
				}
				else{
					$gb	= $this->upload->data();
					
					$simpan	= array(
						'idseller'=>$ids,
						'nmbrand'=>$this->input->post('nmbrand', true),
						'gb_brand'=>$gb['file_name']
					);
					
					$this->model_brand->addbrand($simpan);
					$this->upload->data();
					$this->session->set_flashdata('pesan', 'Data tersimpan');
					
					redirect(base_url().'toko/viewbrand');
				}			
			}
			
		}
	}
	
	function viewbrand(){
		$id		= $this->session->userdata('idseller');
		$query	= $this->model_brand->viewbrand($id);
		$data	= array(
			'title'=>'Data Brand',
			'menu'=>'',
			'isi'=>'toko/page/home',
			'page'=>'toko/page/viewbrand',
			'detail'=>$query
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	function editbrand($idbrand){
		$this->form_validation->set_rules('nmbrand', 'Nama Brand', 'required');
		
		if($this->form_validation->run() === false){
			$query	= $this->model_brand->detailbrand($idbrand);
			
			$data	= array(
				'title'	=> 'Edit Brand',
				'menu'=>'',
				'isi'=>'toko/page/home',
				'page'=>'toko/page/editbrand',
				'detail'=>$query
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else{
			if(!empty($_FILES['brand']['name'])){
				$ids		= $this->session->userdata('idseller');
				$brand		= $ids."_".$_FILES['brand']['name'];
				
				$config['file_name']		= $brand;
				$config['allowed_types']	= 'jpg|png|gif|jpeg';
				$config['upload_path']		= 'asset/img/brand';
				$config['max_size']			= '300';
				$config['max_width']		= '1000';
				$config['max_height']		= '1000';
				
				$this->upload->initialize($config);
				
				if($_FILES['brand']['name']){
					
					if(!$this->upload->do_upload('brand')){
						$this->session->set_flashdata('pesan',$this->upload->display_errors());
						redirect(base_url().'toko/addbrand');
					}
					else{
						$gb	= $this->upload->data();
						
						$simpan	= array(
							'idbrand'=>$this->input->post('idbrand'),
							'nmbrand'=>$this->input->post('nmbrand', true),
							'gb_brand'=>$gb['file_name']
						);
						
						$this->model_brand->updatebrand($simpan);
						$this->upload->data();
						$this->session->set_flashdata('pesan', 'Data tersimpan');
						
						unlink(base_url().'asset/img/brand/'.$this->input->post('brandlama'));
						
						redirect(base_url().'toko/viewbrand');
					}			
				}
			}else{
				$simpan	= array(
					'idbrand'=>$this->input->post('idbrand'),
					'nmbrand'=>$this->input->post('nmbrand', true)
				);
				
				$this->model_brand->updatebrand($simpan);
				$this->upload->data();
				$this->session->set_flashdata('pesan', 'Data tersimpan');
				
				redirect(base_url().'toko/viewbrand');
			}
		}
	}
	
	function delbrand($idbrand){
		$this->model_brand->deletebrand($idbrand);
		
		redirect(base_url().'toko/viewbrand');
	}
	/*End Of Brand*/
	
	/*Produk*/
	function tambah_produk(){
		
		$this->load->library('upload');
		
		$this->form_validation->set_rules('katproduk', 'Kategori Produk', 'required');
		$this->form_validation->set_rules('nmproduk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('satuan', 'KSatuan', 'required');
		$this->form_validation->set_rules('harga', 'Harga Produk', 'required');
		$this->form_validation->set_rules('stok', 'Stok Barang', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan Produk', 'required');
		
		if($this->form_validation->run() === false){
			$data	= array(
				'title'=>'Tambah Produk',
				'menu'=>'',
				'kategori'=>$this->model_kategori->tampilkat($this->session->userdata('idseller')),
				'brand'	=> $this->model_brand->viewbrand($this->session->userdata('idseller')),
				'isi'=>'toko/page/home',
				'page'=>'toko/page/tambahproduk',
			);
		
			$this->load->view('layout/wrapper', $data);
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
						'idbrand'=>$this->input->post('brand', true),
						'nama'=>$this->input->post('nmproduk', true),
						'satuan'=>$this->input->post('satuan', true),
						'harga'=>$this->input->post('harga', true),
						'ukuran'=>$this->input->post('ukuran', true),
						'warna'=>$this->input->post('warna', true),
						'stok'=>$this->input->post('stok', true),
						'gambar'=>$gb['file_name'],
						'keterangan'=>$this->input->post('keterangan', true),
						'diskon'=>$this->input->post('diskon', true)
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
			'menu'=>'',
			'detail'=>$query->result_array(),
			'isi'=>'toko/page/home',
			'page'=>'toko/page/dataproduk'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	function edit_produk($gid){
		
		$this->form_validation->set_rules('katproduk', 'Kategori Produk', 'required');
		$this->form_validation->set_rules('nmproduk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('satuan', 'KSatuan', 'required');
		$this->form_validation->set_rules('harga', 'Harga Produk', 'required');
		$this->form_validation->set_rules('stok', 'Stok Barang', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan Produk', 'required');
		
		if($this->form_validation->run() === false){
			
			$query			= $this->model_produk->detailproduk($gid);
			$data	= array(
				'title'=>'Edit Produk',
				'menu'=>'',
				'kategori'=>$this->model_kategori->tampilkat($this->session->userdata('idseller')),
				'brand'	=> $this->model_brand->viewbrand($this->session->userdata('idseller')),
				'list'=>$query->row_array(),
				'isi'=>'toko/page/home',
				'page'=>'toko/page/edit_produk'
			);
		
			$this->load->view('layout/wrapper', $data);
		}else{
			if(!empty($_FILES['gambar']['name'])){
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
						$gblama	= base_url().'asset/img/seller/produk'.$this->input->post('gbrlama');
						
						$simpan	= array(
							'cid'=>$this->input->post('katproduk', true),
							'gid'=>$this->input->post('gid', true),
							'idbrand'=>$this->input->post('brand'),
							'nama'=>$this->input->post('nmproduk', true),
							'satuan'=>$this->input->post('satuan', true),
							'harga'=>$this->input->post('harga', true),
							'ukuran'=>$this->input->post('ukuran', true),
							'warna'=>$this->input->post('warna', true),
							'stok'=>$this->input->post('stok', true),
							'gambar'=>$gb['file_name'],
							'keterangan'=>$this->input->post('keterangan', true),
							'diskon'=>$this->input->post('diskon', true)
						);
						
						$this->model_produk->editproduk($simpan);
						$this->upload->data();
						$this->session->set_flashdata('pesan', 'Data tersimpan');
						unlink($gblama);
						
						redirect(base_url().'toko/tampil_produk');
					}	
				}
			}
			else{
				$simpan	= array(
					'cid'=>$this->input->post('katproduk', true),
					'gid'=>$this->input->post('gid', true),
					'idbrand'=>$this->input->post('brand'),
					'nama'=>$this->input->post('nmproduk', true),
					'satuan'=>$this->input->post('satuan', true),
					'harga'=>$this->input->post('harga', true),
					'ukuran'=>$this->input->post('ukuran', true),
					'warna'=>$this->input->post('warna', true),
					'stok'=>$this->input->post('stok', true),
					'keterangan'=>$this->input->post('keterangan', true),
					'diskon'=>$this->input->post('diskon', true)
				);
				
				$this->model_produk->editproduk($simpan);
				$this->session->set_flashdata('pesan', 'Data tersimpan');
				
				redirect(base_url().'toko/tampil_produk');
			}
			
			
		}
	}
}