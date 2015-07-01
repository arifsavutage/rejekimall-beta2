<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/paket_seller');
		$this->load->model('admin/paket_member');
		$this->load->model('admin/iklan_model');
		
		if($this->session->userdata('superadmin')==""){
			redirect(base_url().'login/admin');
		}
	}
	
	function index(){
		$seller	= $this->admin_model->sellerbaru();
		$member	= $this->admin_model->memberbaru();
		
		$data	=array(
			'title'	=>'Admin Dasboard',
			'seller'=> $seller->result_array(),
			'member'=> $member->result_array(),
			'jmlseller'=> $seller->num_rows(),
			'jmlmember'=> $member->num_rows(),
			'menu'	=> '',
			'profil'=> $this->admin_model->detailprofilweb(),
			'isi'	=> 'admin/page/home',
			'page'	=> 'admin/page/depan'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	function profil(){
		$this->form_validation->set_rules('hp', 'Nomor HP', 'required');
		$this->form_validation->set_rules('pin', 'Pin BB', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		
		if($this->form_validation->run() === false){
			$query	= $this->admin_model->detailprofilweb();
			$data	= array(
				'title'	=> 'Profil Web',
				'menu'	=> '',
				'detail'=> $query,
				'isi'	=> 'admin/page/home',
				'profil'=> $this->admin_model->detailprofilweb(),
				'page'	=> 'admin/page/profil'
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else{
			$data	= array(
				'id'	=> $this->input->post('id'),
				'hp'	=> $this->input->post('hp', true),
				'pin'	=> $this->input->post('pin', true),
				'email'	=> $this->input->post('email', true),
				'fb'	=> $this->input->post('fb',true),
				'twitter'	=> $this->input->post('twit', true),
				'gplus'	=> $this->input->post('plus', true),
				'insta'	=> $this->input->post('insta', true),
				'youtube'	=> $this->input->post('youtube', true)
			);
			
			$this->admin_model->editprofilweb($data);
			$this->session->set_flashdata('pesan', '<div data-alert 
			class="alert-box">
				Data Profil Berhasil Di Update..
				<a href="#" class="close">&times;</a>
			</div>');
			redirect(base_url().'admin/profil');
		}
	}
	function paket(){
		$s	= $this->paket_seller->viewpaket();
		$m	= $this->paket_member->viewpaket();
		$data	=array(
			'title'	=>'Paket',
			'menu'	=> '',
			'pktseller'=> $s,
			'pktmember'=> $m,
			'profil'=> $this->admin_model->detailprofilweb(),
			'isi'	=> 'admin/page/home',
			'page'	=> 'admin/page/paket'
		);
		
		$this->load->view('layout/wrapper', $data);
	}
		
	/*PAKET SELLER*/
	function addpaketseller(){
		$this->form_validation->set_rules('nmpaket', 'Nama Paket', 'required');
		$this->form_validation->set_rules('poin', 'Poin', 'required');
		$this->form_validation->set_rules('banner', 'Banner', 'required');
		$this->form_validation->set_rules('brsiklan', 'Iklan Baris', 'required');
		
		if($this->form_validation->run() === false){
			$data	=array(
				'title'	=>'Tambah Paket Seller',
				'menu'	=> '',
				'profil'=> $this->admin_model->detailprofilweb(),
				'isi'	=> 'admin/page/home',
				'page'	=> 'admin/page/addpaketseller'
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else{
			$input	= array(
				'nmpaket'	=> $this->input->post('nmpaket', true),
				'poin'		=> $this->input->post('poin', true),
				'iklanbaner'=> $this->input->post('banner', true),
				'iklanbaris'=> $this->input->post('brsiklan', true)
			);
			
			$this->paket_seller->add($input);
			$this->session->set_flashdata('pesan','<div data-alert 
			class="alert-box">
				Data Paket Seller Sudah Tersimpan...
				<a href="#" class="close">&times;</a>
			</div>');
			
			redirect(base_url().'admin/paket');
		}
	}
	
	function upsellerpaket($idpkt){
		$this->form_validation->set_rules('nmpaket', 'Nama Paket', 'required');
		$this->form_validation->set_rules('poin', 'Poin', 'required');
		$this->form_validation->set_rules('banner', 'Banner', 'required');
		$this->form_validation->set_rules('brsiklan', 'Iklan Baris', 'required');
		
		if($this->form_validation->run() === false){
			$query	= $this->paket_seller->detailpaket($idpkt);
			$data	=array(
				'title'	=>'Edit Paket Seller',
				'menu'	=> '',
				'detail'=> $query,
				'profil'=> $this->admin_model->detailprofilweb(),
				'isi'	=> 'admin/page/home',
				'page'	=> 'admin/page/uppaketseller'
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else{
			$edit	= array(
				'idpkt'		=> $this->input->post('idpkt'),
				'nmpaket'	=> $this->input->post('nmpaket', true),
				'poin'		=> $this->input->post('poin', true),
				'iklanbaner'=> $this->input->post('banner', true),
				'iklanbaris'=> $this->input->post('brsiklan', true)
			);
			
			$this->paket_seller->update($edit);
			$this->session->set_flashdata('pesan','<div data-alert 
			class="alert-box success">
				Data Paket Sudah Terupdate...
				<a href="#" class="close">&times;</a>
			</div>');
			
			redirect(base_url().'admin/paket');
		}
	}
	/*END OF PAKET SELLER*/
	
	/*PAKET MEMBER*/
	function addpaketmember(){
		$this->form_validation->set_rules('nmpaket', 'Nama Paket', 'required');
		$this->form_validation->set_rules('poin', 'Poin', 'required');
		
		if($this->form_validation->run() === false){
			$data	=array(
				'title'	=>'Tambah Paket Member',
				'menu'	=> '',
				'profil'=> $this->admin_model->detailprofilweb(),
				'isi'	=> 'admin/page/home',
				'page'	=> 'admin/page/addpaketmember'
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else{
			$input	= array(
				'nmpaket'	=> $this->input->post('nmpaket', true),
				'poin'		=> $this->input->post('poin', true),
			);
			
			$this->paket_member->add($input);
			$this->session->set_flashdata('pesan','<div data-alert 
			class="alert-box">
				Data Paket Member Sudah Tersimpan...
				<a href="#" class="close">&times;</a>
			</div>');
			
			redirect(base_url().'admin/paket');
		}
	}
	
	function uppktmember($idpkt){
		$this->form_validation->set_rules('nmpaket', 'Nama Paket', 'required');
		$this->form_validation->set_rules('poin', 'Poin', 'required');
		
		if($this->form_validation->run() === false){
			$query	= $this->paket_member->detailpaket($idpkt);
			$data	=array(
				'title'	=>'Ubah Paket Seller',
				'menu'	=> '',
				'detail'=> $query,
				'profil'=> $this->admin_model->detailprofilweb(),
				'isi'	=> 'admin/page/home',
				'page'	=> 'admin/page/uppaketmember'
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else{
			$edit	= array(
				'id_pkt'	=> $this->input->post('idpkt'),
				'nmpaket'	=> $this->input->post('nmpaket', true),
				'poin'		=> $this->input->post('poin', true)
			);
			
			$this->paket_member->update($edit);
			$this->session->set_flashdata('pesan','<div data-alert 
			class="alert-box success">
				Data Paket Member Sudah Terupdate...
				<a href="#" class="close">&times;</a>
			</div>');
			
			redirect(base_url().'admin/paket');
		}
	}
	/*END OF PAKET MEMBER*/
	
	/*Konfirmasi seller*/
	function confseller($idseller){
		$this->admin_model->konfseller($idseller);
		
		$this->session->set_flashdata('pesan','<div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Info : </strong> Seller sudah dikonfirmasi..</div>');
		redirect(base_url().'admin');	
	}
	
	function delseller($idseller){
		$this->admin_model->hapuspenjual($idseller);
		
		$this->session->set_flashdata('pesan','<div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Info : </strong> Seller sudah dihapus..</div>');
		redirect(base_url().'admin');
	}
	/*End Of Konfirmasi Seller*/
	
	/*Konfirmasi Member*/
	function konfmember($idmember){
		$this->admin_model->memberaprove($idmember);
		
		$this->session->set_flashdata('member','<div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Info : </strong> Member sudah dikonfirmasi..</div>');
	  
	  redirect(base_url().'admin');
	}
	
	function delmember($idmember){
		$this->admin_model->delmember($idmember);
		
		$this->session->set_flashdata('member','<div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Info : </strong> Member sudah dihapus..</div>');
	  
	  redirect(base_url().'admin');
	}
	/*END Of Konfirmasi Member*/
	
	/*IKLAN SLIDER*/
	function viewslider(){
		$query	= $this->iklan_model->showslider();
		
		$data	=array(
				'title'		=>'Tambah Slider',
				'menu'		=> '',
				'detail'	=> $query,
				'profil'=> $this->admin_model->detailprofilweb(),
				'isi'		=> 'admin/page/home',
				'page'		=> 'admin/page/slider'
			);
			
			$this->load->view('layout/wrapper', $data);
	}
	
	function addslider(){
		$this->form_validation->set_rules('nmiklan', 'Nama Iklan', 'required');
		
		if($this->form_validation->run() === false){
			$data	=array(
				'title'	=>'Tambah Slider',
				'menu'	=> '',
				'profil'=> $this->admin_model->detailprofilweb(),
				'isi'	=> 'admin/page/home',
				'page'	=> 'admin/page/addslider'
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else{
			
			$config['file_name']		= $_FILES['gbslide']['name'];
			$config['allowed_types']	= 'jpg|png|gif|jpeg';
			$config['upload_path']		= 'asset/img/slider';
			$config['max_size']			= '480';
			$config['max_width']		= '2000';
			$config['max_height']		= '2000';
			
			$this->upload->initialize($config);
			
			if($_FILES['gbslide']['name']){
				if(!$this->upload->do_upload('gbslide')){
					$this->session->set_flashdata('pesan',$this->upload->display_errors());
					redirect(base_url().'admin/addslider');
				}
				else{
					$gb	= $this->upload->data();
					
					$simpan	= array(
						'nmiklan'=>$this->input->post('nmiklan', true),
						'gbslider'=>$gb['file_name']
					);
					
					$this->iklan_model->addslider($simpan);
					$this->upload->data();
					$this->session->set_flashdata('pesan', 'Data tersimpan');
					
					redirect(base_url().'admin/viewslider');
				}
			}
		}
	}
	
	function editslider($idslide){
		$this->form_validation->set_rules('nmiklan', 'Nama Iklan', 'required');
		
		if($this->form_validation->run() === false){
			
			$query	= $this->iklan_model->detailslider($idslide);
			$data	=array(
				'title'	=>'Tambah Slider',
				'menu'	=> '',
				'profil'=> $this->admin_model->detailprofilweb(),
				'isi'	=> 'admin/page/home',
				'detail'=> $query,
				'page'	=> 'admin/page/upslider'
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else{
			
			$config['file_name']		= $_FILES['gbslide']['name'];
			$config['allowed_types']	= 'jpg|png|gif|jpeg';
			$config['upload_path']		= 'asset/img/slider';
			$config['max_size']			= '480';
			$config['max_width']		= '2000';
			$config['max_height']		= '2000';
			
			$this->upload->initialize($config);
			
			if($_FILES['gbslide']['name']){
				if(!$this->upload->do_upload('gbslide')){
					$this->session->set_flashdata('pesan',$this->upload->display_errors());
					redirect(base_url().'admin/addslider');
				}
				else{
					$gb	= $this->upload->data();
					
					$simpan	= array(
						'idslide'=>$this->input->post('idslide'),
						'nmiklan'=>$this->input->post('nmiklan', true),
						'gbslider'=>$gb['file_name']
					);
					
					unlink(base_url().'asset/img/slider/'.$this->input->post('slidelama'));
					
					$this->iklan_model->updateslider($simpan);
					$this->upload->data();
					$this->session->set_flashdata('pesan', 'Data tersimpan');
					
					redirect(base_url().'admin/viewslider');
				}
			}
			else{
				$simpan	= array(
					'idslide'=>$this->input->post('idslide'),
					'nmiklan'=>$this->input->post('nmiklan', true)
				);
				
				$this->iklan_model->updateslider($simpan);
				$this->session->set_flashdata('pesan', 'Data tersimpan');
				
				redirect(base_url().'admin/viewslider');
			}
		}
	}
	function delslider($idslide){
		$this->iklan_model->delslider($idslide);
		
		redirect(base_url().'admin/viewslider');
	}
	/*End Of Iklan Slider*/
	
	/*Banner*/
	function banner(){
		$banerpkt	= $this->iklan_model->showbanner();
		$baneriklan	= $this->iklan_model->showiklanbanner();
		
		$data	=array(
			'title'	=>'Banner',
			'menu'	=> '',
			'profil'=> $this->admin_model->detailprofilweb(),
			'pktbanner'=> $banerpkt,
			'iklanbanner'=> $baneriklan,
			'isi'	=> 'admin/page/home',
			'page'	=> 'admin/page/banner'
		);
			
		$this->load->view('layout/wrapper', $data);
	}
	
	function addpktbanner(){
		$this->form_validation->set_rules('nmbanner', 'Nama Banner', 'required');
		$this->form_validation->set_rules('posisi', 'Posisi Banner', 'required');
		$this->form_validation->set_rules('harga', 'Harga Banner', 'required');
		$this->form_validation->set_rules('durasi', 'Durasi Banner', 'required');
		
		if($this->form_validation->run() === false){
			$data	=array(
				'title'	=>'Tambah Paket Banner',
				'menu'	=> '',
				'profil'=> $this->admin_model->detailprofilweb(),
				'isi'	=> 'admin/page/home',
				'page'	=> 'admin/page/addpktbanner'
			);
				
			$this->load->view('layout/wrapper', $data);
		}else{
			$split	= explode("-",$this->input->post('posisi'));
			
			$simpan	= array(
				'nmbanner'	=> $this->input->post('nmbanner', true),
				'posisi'	=> $split[0],
				'hrgiklan'	=> $this->input->post('harga', true),
				'durasi'	=> $this->input->post('durasi', true),
				'ket'		=> $split[1]
			);
			
			$this->iklan_model->addbanner($simpan);
			redirect(base_url().'admin/banner');
		}
	}
	
	function uppktbanner($idpkt){
		$this->form_validation->set_rules('nmbanner', 'Nama Banner', 'required');
		$this->form_validation->set_rules('posisi', 'Posisi Banner', 'required');
		$this->form_validation->set_rules('harga', 'Harga Banner', 'required');
		$this->form_validation->set_rules('durasi', 'Durasi Banner', 'required');
		
		if($this->form_validation->run() === false){
			$query	= $this->iklan_model->detailbanner($idpkt);
			
			$data	=array(
				'title'	=>'Tambah Paket Banner',
				'menu'	=> '',
				'profil'=> $this->admin_model->detailprofilweb(),
				'detail'=> $query,
				'isi'	=> 'admin/page/home',
				'page'	=> 'admin/page/uppktbanner'
			);
				
			$this->load->view('layout/wrapper', $data);
		}else{
			$split	= explode("-",$this->input->post('posisi'));
			
			$simpan	= array(
				'idpkt_baner'	=> $this->input->post('idpktbaner'),
				'nmbanner'	=> $this->input->post('nmbanner', true),
				'posisi'	=> $split[0],
				'hrgiklan'	=> $this->input->post('harga', true),
				'durasi'	=> $this->input->post('durasi', true),
				'ket'		=> $split[1]
			);
			
			$this->iklan_model->updatebanner($simpan);
			redirect(base_url().'admin/banner');
		}
	}
	
	#Add Iklan
	function addiklanbanner(){
		$this->form_validation->set_rules('nmiklan', 'Nama Iklan', 'required');
		$this->form_validation->set_rules('pkt', 'Paket Iklan', 'required');
		$this->form_validation->set_rules('nmpemesan', 'Nama Pemesan', 'required');
		
		if($this->form_validation->run() === false){
			$data	= array(
				'title'		=> 'Tambah Banner  Iklan',
				'menu'		=> '',
				'profil'	=> $this->admin_model->detailprofilweb(),
				'isi'		=> 'admin/page/home',
				'page'		=> 'admin/page/addiklanbanner',
				'posisi'	=> $this->iklan_model->showbanner()
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else{
			$config['file_name']		= $_FILES['gbiklan']['name'];
			$config['allowed_types']	= 'jpg|png|gif|jpeg';
			$config['upload_path']		= 'asset/img/iklan';
			$config['max_size']			= '300';
			$config['max_width']		= '1200 ';
			$config['max_height']		= '500';
			
			$this->upload->initialize($config);
			
			if($_FILES['gbiklan']['name']){
				
				if(!$this->upload->do_upload('gbiklan')){
					redirect(base_url().'admin/addiklanbanner');
				}
				else{
					$gb	= $this->upload->data();
					
					$simpan	= array(
						'idpkt_baner'	=> $this->input->post('pkt', true),
						'nmiklan'		=> $this->input->post('nmiklan', true),
						'pemesan'		=> $this->input->post('nmpemesan', true),
						'gbiklan'		=> $gb['file_name'],
						'status'		=> $this->input->post('status')
					);
					
					$this->iklan_model->addiklanbanner($simpan);
					$this->upload->data();
					
					redirect(base_url().'admin/banner');
				}
			}
			
		}
	}
	
	function upiklanbanner($id){
		$this->form_validation->set_rules('nmiklan', 'Nama Iklan', 'required');
		$this->form_validation->set_rules('pkt', 'Paket Iklan', 'required');
		$this->form_validation->set_rules('nmpemesan', 'Nama Pemesan', 'required');
		
		if($this->form_validation->run() === false){
			$query	= $this->iklan_model->detailiklanbanner($id);
			$data	= array(
				'title'		=> 'Tambah Banner  Iklan',
				'menu'		=> '',
				'profil'	=> $this->admin_model->detailprofilweb(),
				'isi'		=> 'admin/page/home',
				'page'		=> 'admin/page/upiklanbanner',
				'detail'	=> $query,
				'posisi'	=> $this->iklan_model->showbanner()
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else{
			$config['file_name']		= $_FILES['gbiklan']['name'];
			$config['allowed_types']	= 'jpg|png|gif|jpeg';
			$config['upload_path']		= 'asset/img/iklan';
			$config['max_size']			= '300';
			$config['max_width']		= '500';
			$config['max_height']		= '500';
			
			$this->upload->initialize($config);
			
			if($_FILES['gbiklan']['name']){
				
				if(!$this->upload->do_upload('gbiklan')){
					redirect(base_url().'admin/addiklanbanner');
				}
				else{
					$gb	= $this->upload->data();
					
					$simpan	= array(
						'id_banner'		=> $this->input->post('idbanner', true),
						'idpkt_baner'	=> $this->input->post('pkt', true),
						'nmiklan'		=> $this->input->post('nmiklan', true),
						'pemesan'		=> $this->input->post('nmpemesan', true),
						'gbiklan'		=> $gb['file_name'],
						'status'		=> $this->input->post('status')
					);
					
					$this->iklan_model->updateiklanbanner($simpan);
					$this->upload->data();
					
					redirect(base_url().'admin/banner');
				}
			}
			else{
				$simpan	= array(
					'id_banner'		=> $this->input->post('idbanner', true),
					'idpkt_baner'	=> $this->input->post('pkt', true),
					'nmiklan'		=> $this->input->post('nmiklan', true),
					'pemesan'		=> $this->input->post('nmpemesan', true),
					'status'		=> $this->input->post('status')
				);
				
				$this->iklan_model->updateiklanbanner($simpan);				
				redirect(base_url().'admin/banner');
			}
			
		}
	}
	
	function deliklanbanner($id){
		$this->iklan_model->deliklanbanner($id);
		redirect(base_url().'admin/banner');
	}
	/*End Of Banner*/
	
	/*BANK*/
	function addbank(){
		
	}
	function showbank(){
		
	}
	function bankdetail(){
		
	}
	function updatebank(){
		
	}
	function deletebank(){
		
	}
	/*END OF BANK*/
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login/admin');
	}
}