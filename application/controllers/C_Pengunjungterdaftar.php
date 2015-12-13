<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Pengunjungterdaftar extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('M_Pengunjungterdaftar');
	}
	public function index()
	{
		
	}
	public function add()
	{
		$data = array(
			'nama_pengunjung' => $this->input->post('nama_pengunjung'),
			'nrp_pengunjung' => $this->input->post('nrp_pengunjung'),
			'telp_pengunjung' => $this->input->post('telp_pengunjung'),
			'tahun_lahir' => $this->input->post('tahun_lahir'),
			'kota_asal' => $this->input->post('kota_asal'),
			'instansi_idinstansi' => $this->input->post('instansi_idinstansi'),
			'delete_at' => 'NULL',
			'update_at' => date('Y-m-d')
			 );

		echo $this->M_Pengunjungterdaftar->add($data);
	}
}

