<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_instansi extends CI_Model {
	
	function add_instansi($data)
	{
		$this->db->insert('instansi',$data);
	}
	function get_instansi()
	{
		$query=$this->db->get('instansi');
		return $query->result;
	}
	// function get_instansi_byname($instansi)
	// {
	// 	$query=$this->db->get_where('instansi',array('nama_instansi'=>$instansi));
	// 	return $query->result();
	// } 
}
