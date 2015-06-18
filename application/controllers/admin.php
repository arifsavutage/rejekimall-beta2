<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/admin_model');
		
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
			'isi'	=> 'admin/page/home'
		);
		
		$this->load->view('admin/layout/wrapper', $data);
	}
	
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
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login/admin');
	}
}