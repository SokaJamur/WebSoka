<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pesanan extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/barang_model', 'barang_model');
		}
		public function index(){
			$data['pesan'] =  $this->barang_model->get_pesan();
			$data['view'] = 'admin/barang/forms/pesan';
			$this->load->view('admin/layout', $data);
		}
		public function detail_($id_pesan = 0){
				$data['detail'] = $this->barang_model->pesan_detail($id_pesan);
				$data['view'] = 'admin/barang/forms/detail_pesanan';
				$this->load->view('admin/layout', $data);
			}
	}
?>