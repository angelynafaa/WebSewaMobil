<?php 
if (!defined('BASEPATH'))
	exit('No direct script acces allowed');

class Peminjaman extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('Form_validation');
		$this->load->library('M_db');
		$this->load->library('Ion_auth');
		ceklogin();
		$this->load->model('Peminjaman_model');
		$this->load->model('Kendaraan_model');
	}
	public function index(){
		$data['peminjaman'] = $this->Peminjaman_model->tampil_data()->result();
		$this->template->load('template/backend/dashboard' , 'peminjaman/index', $data);
	}

	public function masukan(){
		$data['kendaraan'] = $this->Kendaraan_model->tampil_data()->result();
		$this->template->load('template/backend/dashboard' , 'peminjaman/insert', $data);
	}

	public function insert(){
		$Nama_kendaraan = $this->input->post('nama_kendaraan');
		$Nama_peminjam = $this->input->post('nama_peminjam');
		$KTP = $this->input->post('ktp');
		$No_SIM = $this->input->post('no_sim');
		$Tgl_Pinjam = $this->input->post('tgl_pinjam');
		$Tgl_kembali = $this->input->post('tgl_kembali');

		$data = array(
			'nama_kendaraan' => $Nama_kendaraan, 
			'nama_peminjam' => $Nama_peminjam ,
			'ktp' => $KTP,
			'no_sim' => $No_SIM,
			'tgl_pinjam' => $Tgl_Pinjam,
			'tgl_kembali' => $Tgl_kembali,
			);

		$this->Peminjaman_model->input_data($data, 'peminjaman');
		redirect ('peminjaman/index');
	}
}