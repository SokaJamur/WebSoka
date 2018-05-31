<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Laporan extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/barang_model', 'barang_model');
			$this->load->library('Fungsi');
		}
		public function index(){
			$data['lapor'] =  $this->barang_model->get_laporan();
			$data['ttlbrg'] = $this->barang_model->total_laporan();
			$data['view'] = 'admin/barang/forms/lapor';
			$this->load->view('admin/layout', $data);
			
		}
	}
?>