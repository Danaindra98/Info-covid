<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rs extends CI_Model {
public function tampil(){
	    $data = $this->db->query("SELECT * FROM tbl_rs");
	    return $data->result();
	}
}