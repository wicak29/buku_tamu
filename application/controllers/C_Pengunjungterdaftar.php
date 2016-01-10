<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pengunjungterdaftar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengunjungterdaftar');
		$this->load->model('M_instansi');
		if(!$this->session->has_userdata('username'))
		{
			redirect(site_url('C_auth'));
		}
	}
	public function index()
	{
		// $this->get_instansi();
	}

	public function add()
	{
		$nama=$this->input->post('v_nama');
		$nrp=$this->input->post('v_nrp');
		$telp=$this->input->post('v_telp');
		$tahun=$this->input->post('v_tahun');
		$kota=$this->input->post('v_kota');
		$instansi=$this->input->post('v_instansi');
		$nama_instansi=$this->input->post('v_nama_instansi');
		$keperluan=$this->input->post('v_keperluan');

		if (!$nrp)
		{
			$nrp=0;
		}

		if (!$instansi)
		{
			$instansi=1;
		}

		//checking whether the user already in our database or not
		$res=$this->M_pengunjungterdaftar->check($nrp);		
		//getting the intansi ID by input name
		
		$data_instansi = array(
			'nama_instansi' => $nama_instansi,
			'delete_at' => 'NULL',
			'update_at' => date('Y-m-d')
			);
		//ini masih masalah
		if($nama_instansi=='NON ITS')
		{
			$this->M_pengunjungterdaftar->add_instansi($data_instansi);
		}
		$data_PT = array(
			'nama_pengunjung' => $nama,
			'nrp_pengunjung' => $nrp,
			'telp_pengunjung' => $telp,
			'tahun_lahir' => $tahun,
			'kota_asal' => $kota,
			'instansi_idinstansi' => $get_instansi[0]->idinstansi,
			'delete_at' => 'NULL',
			'update_at' => date('Y-m-d')
			 );

		if(sizeof($res)<1)
		{
			$this->M_pengunjungterdaftar->add_PT($data_PT);
			$res=$this->M_pengunjungterdaftar->check($nrp);
		}

		$data_PT_lab = array(
			'pengunjung_terdaftar_idpengunjung' => $res[0]->idpengunjung,
			'pengunjung_terdaftar_instansi_idinstansi' => $res[0]->instansi_idinstansi,
			'lab_idlab' => $this->session->has_userdata('lab_idlab'),
			'jam_datang' => date("Y-m-d H:i:s"),
			'jam_keluar' => '',
			'keperluan' => $keperluan
			);		
		$this->M_pengunjungterdaftar->add_PT_lab($data_PT_lab);
		redirect(site_url('C_pengunjungterdaftar'));
	}

}

