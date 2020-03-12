<?php defined('BASEPATH') OR exit('No direct script acces allowed');

class Kendaraan_model extends CI_Model{


	function __construct(){
		parent::__construct();
		$this->load->library('m_db');
	}

	//tampil data
	function tampil_data(){
		return $this->db->get('kendaraan');
	}

	//insert data
	function input_data($data,$table){
		$this->db->insert($table, $data);
	}
} 