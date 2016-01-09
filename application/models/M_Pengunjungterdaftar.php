<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengunjungterdaftar extends CI_Model {
	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	public function add($data)
	{
		$this->db->insert('pengunjung_terdaftar',$data);
	}
}
