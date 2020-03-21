<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();
	$this->load->model('M_rs');
	}

	public function index(){
		
		//$data['tbl_rs']=$this->M_rs->tampil();
		$data = array(
			
			'tbl_rs'	=> $this->M_rs->tampil()
			
		);

		$this->load->view('aw/header', $data);
		$this->load->view('aw/sidebar',$data);
		$this->load->view('dashboard', $data);
		$this->load->view('aw/footer',$data);
	}

}
