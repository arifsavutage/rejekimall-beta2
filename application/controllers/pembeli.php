<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Pembeli extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		if($this->session->userdata('username')==""){
			redirect(base_url().'login');
		}
		
		$this->load->model('member/model_member');
		$this->load->model('model_city');
		$this->load->model('model_transaksi');
	}
	
	function index(){
		$this->form_validation->set_rules('nmlengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat Rumah', 'required');
		$this->form_validation->set_rules('kdpos', 'Kode Pos', 'required');
		$this->form_validation->set_rules('negara', 'Negara', 'required');
		$this->form_validation->set_rules('propinsi', 'Propinsi', 'required');
		$this->form_validation->set_rules('kotakab', 'Kota / Kab.', 'required');
		
		if($this->form_validation->run() === false)
		{
			$user	= $this->session->userdata('idmember');
			$query	= $this->model_member->detail_member($user);
			$negara	= $this->model_city->getNegara();
			$prop	= $this->model_city->getPropinsi();
			$kota	= $this->model_city->getKota();
			
			$data	= array(
				'title'		=> 'Member Area',
				'menu'		=> 'etalase/menu_etalase',
				'isi'		=> 'pembeli/dasbor',
				'page'		=> 'pembeli/depan',
				'profil'	=> $query,
				'negara'	=> $negara,
				'prop'		=> $prop,
				'kota'		=> $kota
			);
			
			$this->load->view('layout/wrapper', $data);
		}else{
			$update	= array(
				'id_member'	=> $this->input->post('id_member'),
				'nama'		=> $this->input->post('nmlengkap', true),
				'jk'		=> $this->input->post('jk'),
				'email'		=> $this->input->post('email', true),
				'alamat'	=> $this->input->post('alamat', true),
				'no_hp'		=> $this->input->post('hp', true),
				'no_tlprmh'	=> $this->input->post('tlp', true),
				'kdpos'		=> $this->input->post('kdpos', true),
				'kota'		=> $this->input->post('kotakab'),
				'propinsi'	=> $this->input->post('propinsi'),
				'negara'	=> $this->input->post('negara')
			);
			
			$this->model_member->ubah($update);
			redirect(base_url().'pembeli');
		}	
		
	}
	
	function akun(){
		$user	= $this->session->userdata('idmember');
		$query	= $this->model_member->detail_member($user);
		
		$this->form_validation->set_rules('passlama', 'Password Lama', 'required');
		$this->form_validation->set_rules('pass1','Password Baru', 'required');
		$this->form_validation->set_rules('pass2', 'Re-Type Password Baru', 'required');
		
		if($this->form_validation->run() === false){
			$data	= array(
				'title'		=> 'Edit Akun',
				'menu'		=> 'etalase/menu_etalase',
				'isi'		=> 'pembeli/dasbor',
				'page'		=> 'pembeli/akun',
				'profil'	=> $query
			);
			
			$this->load->view('layout/wrapper', $data);
		}
		else if($this->input->post('passlamax') != md5($this->input->post('passlama')))
		{
			$this->session->set_flashdata('pesan', 'Password Lama Tidak Sama..');
			redirect(base_url().'pembeli/akun');
		}
		else{
			
			$data	= array(
				'id_member'=>$this->input->post('idmember'),
				'password'=>md5($this->input->post('pass2', true))
			);
			
			$this->model_member->editpass($data);
			$this->session->set_flashdata('pesan', 'Password Telah Dirubah..');
			redirect(base_url().'pembeli/akun');
		}
	}
	
	function foto(){
		$user	= $this->session->userdata('idmember');
		
		$query	= $this->model_member->detail_member($user);
		
		$data	= array(
			'title'		=> 'Unggah Foto',
			'menu'		=> 'etalase/menu_etalase',
			'isi'		=> 'pembeli/dasbor',
			'page'		=> 'pembeli/foto',
			'profil'	=> $query
		);
		
		$this->load->view('layout/wrapper', $data);
		
	}
	
	function upfoto(){
		$this->load->library('upload');
		
		$username	= $this->session->userdata('username');
		$split		= explode(".", $_FILES['gbfoto']['name']);
		$newname	= $username.".".$split[1];
		
		$config['file_name']		= $newname;
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['upload_path']		= 'asset/img/member/pp';
		$config['max_size']			= '100';
		$config['max_width']		= '1024';
		$config['max_height']		= '768';
		
		$this->upload->initialize($config);
		
		if($_FILES['gbfoto']['name']){
			if(!$this->upload->do_upload('gbfoto')){
				$this->session->set_flashdata('pesan',"<div class='alert alert-warning'>
				  <button type='button' class='close' data-dismiss='alert'>&times;</button>
				  <strong>Warning!</strong> Ngga Bisa di Upload
				</div>");
				redirect(base_url().'pembeli/foto');
			}
			else{
				$gbr	= $this->upload->data();
				
				$data	= array(
					'id_member'=>$this->input->post('idmember'),
					'foto'=>$gbr['file_name']
				);
				
				$this->model_member->editfoto($data);
				$this->upload->data();
				
				$this->session->set_flashdata('pesan', "teruplaod");
				redirect(base_url().'pembeli/foto');
			}
		}
	}
	
	function ktp(){
		$user	= $this->session->userdata('idmember');
		$query	= $this->model_member->detail_member($user);
		
		$data	= array(
			'title'		=> 'Unggah Ktp',
			'menu'		=> 'etalase/menu_etalase',
			'isi'		=> 'pembeli/dasbor',
			'page'		=> 'pembeli/ktp',
			'profil'	=> $query
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	function upktp(){
		$this->load->library('upload');
		
		$username	= $this->session->userdata('username');
		$split		= explode(".", $_FILES['gbktp']['name']);
		$newname	= "ktp_".$username.".".$split[1];
		
		$config['file_name']		= $newname;
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['upload_path']		= 'asset/img/member/ktp';
		$config['max_size']			= '100';
		$config['max_width']		= '1024';
		$config['max_height']		= '768';
		
		$this->upload->initialize($config);
		
		if($_FILES['gbktp']['name']){
			if(!$this->upload->do_upload('gbktp')){
				$this->session->set_flashdata('pesan',"<div class='alert alert-warning'>
				  <button type='button' class='close' data-dismiss='alert'>&times;</button>
				  <strong>Warning!</strong> Ngga Bisa di Upload
				</div>");
				redirect(base_url().'pembeli/ktp');
			}
			else{
				
				$ktp	= $this->upload->data();
																					
				$data	= array(
					'id_member'=>$this->input->post('idmember'),
					'gbr_ktp'=>$ktp['file_name']
				);
				
				$this->model_member->editktp($data);
				$this->upload->data();
				$this->session->set_flashdata('pesan', $this->upload->display_errors());
				redirect(base_url().'pembeli/ktp');
			}
		}
	}
	/*end of up ktp*/
	
	function view_transaksi(){
		
		$idmember	= $this->session->userdata('idmember');
		$order		= $this->model_transaksi->viewtrans($idmember)->result_array();
		
		$data	= array(
			'title'		=> 'Tabel Pesanan',
			'menu'		=> 'etalase/menu_etalase',
			'isi'		=> 'pembeli/dasbor',
			'page'		=> 'pembeli/view_transaksi',
			'order'		=> $order
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	function detailtrans($idpesan){
		$this->load->model('model_transaksi');
		
		$detail		= $this->model_transaksi->detailtrans($idpesan);
		
		$data	= array(
			'title'		=> 'Detail Transaksi',
			'menu'		=> 'etalase/menu_etalase',
			'isi'		=> 'pembeli/dasbor',
			'page'		=> 'pembeli/detail_transaksi',
			'detail'	=> $detail
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	function konfirm($idpesan){
		$this->load->model('model_transaksi');
		$this->load->model('admin/bank_model');
			
		$bank		= $this->bank_model->viewbank();
		$detail		= $this->model_transaksi->details($idpesan);
		
		$data	= array(
			'title'		=> 'Detail Transaksi',
			'menu'		=> 'etalase/menu_etalase',
			'isi'		=> 'pembeli/dasbor',
			'page'		=> 'pembeli/konfirm',
			'detail'	=> $detail,
			'bank'		=> $bank
		);
		
		$this->load->view('layout/wrapper', $data);
	}
	
	function konfirmexe(){
		$this->load->model('model_transaksi');
		$this->load->library('upload');
		
		$username	= $this->session->userdata('username');
		$split		= explode(".", $_FILES['bukti']['name']);
		$newname	= $this->input->post('idpesan')."_".$username.".".$split[1];
		
		$config['file_name']		= $newname;
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['upload_path']		= 'asset/img/member/bukti';
		$config['max_size']			= '200';
		$config['max_width']		= '1000';
		$config['max_height']		= '1000';
		
		$this->upload->initialize($config);
		
		if($_FILES['bukti']['name']){
			if(!$this->upload->do_upload('bukti')){
				$this->session->set_flashdata('pesan',"
				  <strong>Warning!</strong> Ngga Bisa di Upload");
				redirect(base_url().'pembeli/konfirm/'.$this->input->post('idpesan'));
			}
			else{
				
				$bukti	= $this->upload->data();
																					
				$data	= array(
					'idpesan'	=> $this->input->post('idpesan'),
					'bank'		=> $this->input->post('bank'),
					'bukti'		=> $bukti['file_name'],
					'status'	=> 1,
					'tglkonfirm'=> date('Y-m-d H:i:s')
				);
				
				$this->model_transaksi->poskonfirm($data);
				$this->upload->data();
				$this->session->set_flashdata('pesan', $this->upload->display_errors());
				redirect(base_url().'pembeli/konfirm/'.$this->input->post('idpesan'));
			}
		}
	}
}