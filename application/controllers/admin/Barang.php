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
		public function add_jamur($id = 'J001'){
			if($this->input->post('btn_submit')){
				$this->form_validation->set_rules('stok', 'Stok', 'trim|required');
				$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
			}
				else{
					$data = array(
					'STOK' => $this->input->post('stok'),
					'HARGA' => $this->input->psot('harga')
				);
				$this->barang_model->tambah($data, $id);
			}
		}
	}
?>