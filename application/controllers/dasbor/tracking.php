<?php if(!defined('BASEPATH')) exit('No direct access script allowed');
class tracking extends CI_Controller{
	public function __construct(){
		parent::__construct();
		
	}
	function index(){
		$data	= array(
			'title'=>'Tracking Barang',
			'isi'=>'dasbor/page/tracking'
		);
		
		$this->load->view('dasbor/layout/wrapper', $data);
	}
}