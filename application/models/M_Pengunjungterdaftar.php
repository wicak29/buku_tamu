<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengunjungterdaftar extends CI_Model {
	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	public function add_PT($data)
	{
		$this->db->insert('pengunjung_terdaftar',$data);
	}
	public function add_PT_lab($data)
	{
		$this->db->insert('pengunjung_terdaftar_has_lab',$data);
	}
	function check($nrp)
	{
		$query=$this->db->get_where('pengunjung_terdaftar',array('nrp_pengunjung'=>$nrp));
		return $query->result();
	} 
}
