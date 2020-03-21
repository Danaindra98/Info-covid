<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
	public function __construct() {
		parent::__construct();
	//$this->load->model('M_rs');
	}

	
	public function index(){
		
		//$data['tbl_rs']=$this->M_rs->tampil();
		/*$data = array(
			
			'tbl_rs'	=> $this->M_rs->tampil()
			
		);*/

		$this->load->view('aw/header');
		$this->load->view('aw/sidebar');
		$this->load->view('list');
		$this->load->view('aw/footer');
	}

}
