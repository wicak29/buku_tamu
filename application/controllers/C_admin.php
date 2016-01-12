<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->model('M_instansi');
		if(!$this->session->has_userdata('username'))
		{
			redirect(site_url('C_auth'));
		}	
	}

	public function index()
	{
		$data['page_title'] = "Home ";
		$data['instansi'] = $this->M_instansi->get_instansi();
		$this->load->view('admin/V_home', $data);
	}

	public function add()
	{
		$data = array(
				'nama_admin' => $this->input->post('nama_admin'),
				'username' => $this->input->post('username'),
				'password' => sha1($this->input->post('password')),
				'lab_idlab' => $this->input->post('id_lab'),
				'update_at' => date('Y-m-d'),
				'delete_at' => 'null'
			);
		echo $this->M_admin->add($data);
	}
}
