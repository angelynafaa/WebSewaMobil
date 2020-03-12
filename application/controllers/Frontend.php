<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller
{

	function __construct()
    {
        parent::__construct();
        $this->load->model('Frontend_model','fm');
        $this->load->library('Form_validation');
		$this->load->library('M_db');
        $this->load->model('Peminjaman_model');
        $this->load->model('Kendaraan_model');

    }

    public function index(){
    	//$this->load->view('welcome_message');
        $data['kendaraan'] = $this->Kendaraan_model->tampil_data()->result();
    	$this->template->load('template/frontend/home', 'frontend/home', $data);
    }

    public function galeri(){
    	//$this->load->view('welcome_message');
        $data['video_content'] = $this->Video_model->show_video()->result();
        $this->template->load('template/frontend/home', 'frontend/galeri', $data);
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
        redirect ('frontend/index');
    }

    public function forumdiskusi(){
        $this->template->load('template/frontend/home', 'forumdiskusi/forumdiskusi');
    }
    // public function create()
    // {
    //     $data = array(
    //         'button' => 'Create',
    //         'id_email' => set_value('id_email'),
    //         'nama_depan' => set_value('nama_depan'),
    //         'nama_belakang' => set_value('nama_belakang'),
    //         'email' => set_value('email'),
    //         'subject' => set_value('subject'),
    //         'pesan' => set_value('pesan')
    //     );

    //     $this->template->load('template/frontend/home', 'frontend/home', $data);
    // }

    

}
