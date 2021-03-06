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
		public function cari_data(){
			$tgl_awal = $this->input->get('tgl_awal', TRUE);
			$tgl_akhir = $this->input->get('tgl_akhir', TRUE);
			$data['cari'] = $this->barang_model->cari($tgl_awal,$tgl_akhir );
			$data['ttlbrg'] = $this->barang_model->total_($tgl_awal,$tgl_akhir );
			$data['view'] = 'admin/barang/forms/lapor_cari';
			$this->load->view('admin/layout', $data, $tgl_awal, $tgl_akhir);
		}
	}
?>