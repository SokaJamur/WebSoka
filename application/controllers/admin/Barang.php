<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Barang extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/barang_model', 'barang_model');
		}
		public function index(){
			$data['barang_jamur'] =  $this->barang_model->get_jamur();
			$data['barang_baglog'] =  $this->barang_model->get_baglog();
			$data['view'] = 'admin/barang/forms/stok';
			$this->load->view('admin/layout', $data);
		}
	}
?>