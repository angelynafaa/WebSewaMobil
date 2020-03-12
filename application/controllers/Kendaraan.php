<?php 
if (!defined('BASEPATH'))
	exit('No direct script acces allowed');

class Kendaraan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('Form_validation');
		$this->load->library('M_db');
		$this->load->library('Ion_auth');
		ceklogin();
		$this->load->model('Kendaraan_model');
	}

	public function index(){
		$data['kendaraan'] = $this->Kendaraan_model->tampil_data()->result();
		$this->template->load('template/backend/dashboard' , 'kendaraan/index', $data);
	}

	public function masukan(){
		$this->template->load('template/backend/dashboard' , 'kendaraan/insert');
	}

	public function insert(){
		$Nama = $this->input->post('Nama');
		$Jenis = $this->input->post('Jenis');
		$Harga = $this->input->post('Harga');

		$data = array(
			'Nama' => $Nama, 
			'Jenis' => $Jenis,
			'Harga' => $Harga);
		$this->Kendaraan_model->input_data($data, 'kendaraan');
		redirect ('kendaraan/index');
	}

	public function edit(){

	}

	public function hapus(){

	}
}