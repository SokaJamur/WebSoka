<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Barang extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/barang_model', 'barang_model');
		}
		public function index(){
			$data['barang_'] =  $this->barang_model->get_barang();
			$data['view'] = 'admin/barang/forms/stok';
			$this->load->view('admin/layout', $data);
		}
		public function add_stok($id=0){
			if($this->input->post('submit')){
				$this->form_validation->set_rules('stok', 'Stok', 'trim|required');
				$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
				
				if ($this->form_validation->run() == FALSE) {
					$data['barang'] = $this->barang_model->get_by_id($id);
					$data['view'] = 'admin/barang/forms/tambah_stok';
					$this->load->view('admin/layout', $data);
				}
				else{
					$data = array(
						'STOK' => $this->input->post('stok')
					);
					$result = $this->barang_model->tambah($data, $id);
					if($result){
						$this->session->set_flashdata('msg', 'Stok Berhasil ditambah !');
						redirect(base_url('admin/barang'));
					}
				}
			}
			else{
				$data['barang'] = $this->barang_model->get_by_id($id);
				$data['view'] = 'admin/barang/forms/tambah_stok';
					$this->load->view('admin/layout', $data);
			}
	}
	}
?>