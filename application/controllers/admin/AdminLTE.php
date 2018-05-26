<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class AdminLTE extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/barang_model', 'barang_model');
		}
		
		public function index(){
			redirect(base_url('admin/auth'));
		}
		public function general_form(){
			$data['barang_jamur'] =  $this->barang_model->get_barang();
			$data['view'] = 'admin/adminlte/forms/general';
			$this->load->view('admin/layout', $data);
		}
		public function inline(){
			$data['pesan'] =  $this->barang_model->get_pesan();
			$data['view'] = 'admin/adminlte/charts/inline';
			$this->load->view('admin/layout', $data);
		}
		public function data_table(){
			$data['view'] = 'admin/adminlte/tables/data';
			$this->load->view('admin/layout', $data);
		}
	}