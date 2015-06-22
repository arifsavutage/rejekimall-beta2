<?php if(!defined('BASEPATH')) exit('No direct access script allowed');
class bayar extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		
		if($this->session->userdata('username') == ""){
			redirect(base_url().'page/login');
		}
		
		$this->load->model('model_transaksi');
	}
	
	function index(){
		
		$data	= array(
			'title'	=> 'Pembayaran',
			'isi'	=> 'dasbor/page/tabel_pesanan'
		);
		
		$this->load->view('dasbor/layout/wrapper', $data);
	}
	
	function tambah($rowid){
		$idmember	= $this->session->userdata('idmember');
		
		$dataorder	= array(
			'id_member'	=> $idmember,
			'waktu'		=> date('Y-m-d H:i:s')
		);
		
		$this->model_transaksi->order($dataorder);
		
		if($rowid == "all"){
			
			$query	= $this->model_transaksi->vieworder($idmember);
			
			if($query->num_rows() > 0):
				
				$row	= $query->row_array();
				
				foreach($this->cart->contents() as $items):
					
					$ordered	= array(
						'idpesan'	=> $row['idpesan'],
						'gid'		=> $items['id'],
						'jml'		=> $items['qty'],
						'subtotal'	=> $items['subtotal'],
						'id_ongkir'	=> 1,
						'alamat'	=> $this->input->post('alamat'),
						'kd_pos'	=> $this->input->post('kdpos')
					);
					
					$this->model_transaksi->orderdetail($ordered);
					
				endforeach;
				
			endif;
			
			$this->cart->destroy();
			redirect(base_url().'dasbor/home');
		}
		else{
			
		}
	}
}