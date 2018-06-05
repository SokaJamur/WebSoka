<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/artikel_model');
			$this->load->helper(array('form', 'url'));
		}

		public function index(){
			$data['all_artikel']=$this->artikel_model->tampil();
			$data['view'] = 'admin/dashboard/index';
			$this->load->view('admin/layout', $data);
		}
		
		public function add(){
		$dir = 'assets/img/';
        $config['upload_path']      = 'assets/img/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
        $this->load->library('upload', $config);
        $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar')) {
			$data['view'] = 'admin/artikel/artikel_add';
			$this->load->view('admin/layout', $data);
		}else{
        $data = array(
            'JUDUL' => $this->input->post('judul'),
            'ISI' => $this->input->post('isi'),
            'GAMBAR' => $dir.$this->upload->data('file_name'),            
        );
        $this->db->insert('artikel',$data);
		redirect(base_url('admin/Dashboard'));
	}
	
		}
		
		public function add1(){
		if($this->input->post('submit')){
			$config['upload_path'] = './assets/img/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			
			$this->load->library('upload', $config);
			//$this->upload->initialize($config);
			
				$data = array(
				'JUDUL' => $this->input->post('judul'),
				'ISI' => $this->input->post('isi'),
				'GAMBAR' => $this->input->post('gambar')
				);
				$this->artikel_model->upload($data);
				redirect(base_url('admin/Dashboard'));
				
			}
			else{
				$data['view'] = 'admin/artikel/artikel_add';
				$this->load->view('admin/layout', $data);
			}
		
	}
	
		
		public function edit($id = 0){
			if($this->input->post('submit')){
				$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
				$this->form_validation->set_rules('isi', 'Isi', 'trim|required');
				$this->form_validation->set_rules('gambar', 'Gambar', 'trim|required');

				
				if ($this->form_validation->run() == FALSE) {
					$data['artikel'] = $this->artikel_model->get_artikel_by_id($id);
					$data['view'] = 'admin/artikel/artikel_edit';
					$this->load->view('admin/layout', $data);
				}
				else{
					$data = array(
						'JUDUL' => $this->input->post('judul'),
						'ISI' => $this->input->post('isi'),
						'GAMBAR' => $this->input->post('gambar')
					);
					$result = $this->artikel_model->edit_artikel($data, $id);
					if($result){
						$this->session->set_flashdata('msg', 'Artikel Berhasil diedit !');
						redirect(base_url('admin/dashboard'));
					}
				}
			}
			else{
				$data['artikel'] = $this->artikel_model->get_artikel_by_id($id);
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