<?php
class Registrasi extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	function index(){	
		$this->load->view('body');	
	}	
	//header
	
	function registerpembeli(){	
		$this->load->view('registerpembeli');
	}
	function registerpenjual(){	
		$this->load->view('registerpenjual');
		}
	function registerperorangan(){
		$this->load->view('registerperorangan');
	}
	function registerbadanusaha () {
		$this->load->view('registerbadanusaha');
	}
	function registerglobal	() {
		$this->load->view('registerglobal');
	}
}