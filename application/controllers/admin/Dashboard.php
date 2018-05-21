<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/artikel_model');
		}

		public function index(){
			$data['all_artikel']=$this->artikel_model->tampil();
			$data['view'] = 'admin/dashboard/index';
			$this->load->view('admin/layout', $data);
		}
		
		public function add(){
			if($this->input->post('submit')){

				$this->form_validation->set_rules('JUDUL', 'Judul');
				$this->form_validation->set_rules('ISI', 'Isi');
				$this->form_validation->set_rules('GAMBAR', 'Gambar');

				if ($this->form_validation->run() == FALSE) {
					$data['view'] = 'admin/artikel/artikel_add';
					$this->load->view('admin/layout', $data);
				}
				else{
					$data = array(
						'JUDUL' => $this->input->post('JUDUL'),
						'ISI' => $this->input->post('ISI'),
						'GAMBAR' => $this->input->post('GAMBAR'),
						'created_at' => date('Y-m-d : h:m:s'),
						'updated_at' => date('Y-m-d : h:m:s'),
					);
					$data = $this->security->xss_clean($data);
					$result = $this->user_model->add_user($data);
					if($result){
						$this->session->set_flashdata('msg', 'Record is Added Successfully!');
						redirect(base_url('admin/Dashboard'));
					}
				}
			}
			else{
				$data['view'] = 'admin/artikel/artikel_add';
				$this->load->view('admin/layout', $data);
			}
		}
		
		public function edit($id = 0){
			if($this->input->post('submit')){
				$this->form_validation->set_rules('JUDUL', 'Judul');
				$this->form_validation->set_rules('ISI', 'Isi');
				$this->form_validation->set_rules('GAMBAR', 'Gambar');

				if ($this->form_validation->run() == FALSE) {
					$data['artikel'] = $this->user_model->get_user_by_id($id);
					$data['view'] = 'admin/artikel/artikel_edit';
					$this->load->view('admin/layout', $data);
				}
				else{
					$data = array(
						'JUDUL' => $this->input->post('JUDUL'),
						'ISI' => $this->input->post('ISI'),
						'GAMBAR' => $this->input->post('GAMBAR')
					);
					$data = $this->security->xss_clean($data);
					$result = $this->user_model->edit_user($data, $id);
					if($result){
						$this->session->set_flashdata('msg', 'Artikel Berhasil diedit !');
						redirect(base_url('admin/users'));
					}
				}
			}
			else{
				$data['artikel'] = $this->user_model->get_user_by_id($id);
				$data['view'] = 'admin/artikel/artikel_edit';
				$this->load->view('admin/layout', $data);
			}
		}

		public function del($id = 0){
			$this->db->delete('artikel', array('ID_ARTIKEL' => $id));
			$this->session->set_flashdata('msg', 'Artikel Berhasil di Hapus !');
			redirect(base_url('admin/Dashboard'));
		}
	}

?>	