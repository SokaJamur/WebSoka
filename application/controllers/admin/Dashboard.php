<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/artikel_model');
			$this->load->library('upload');
		}

		public function index(){
			$data['all_artikel']=$this->artikel_model->tampil();
			$data['view'] = 'admin/dashboard/index';
			$this->load->view('admin/layout', $data);
		}
		
		public function add(){
		if($this->input->post('submit')){
			$config['upload_path'] = './assets/img/'; 
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;
			
			$this->upload->initialize($config);
			if(!empty($_FILES['gambar']['name'])){
	        if ($this->upload->do_upload('gambar')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/img/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['new_image']= './assets/img/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
                $jdl=$this->input->post('judul');
                $isi=$this->input->post('isi');
			}
			}

			$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
			$this->form_validation->set_rules('isi', 'Isi', 'trim|required');
			$this->form_validation->set_rules('gambar', 'Gambar', 'trim|required');
				
				if ($this->form_validation->run() == FALSE) {
					$data['view'] = 'admin/artikel/artikel_add';
					$this->load->view('admin/layout', $data);
				}else{
					$data = array(
						'JUDUL' => $this->input->post('firstname'),
						'ISI' => $this->input->post('firstname'),
						'GAMBAR' => $this->input->post('lastname')
					);
					$data = $this->security->xss_clean($data);
					$result = $this->artikel_model->upload($data);
					if($result){
						$this->session->set_flashdata('msg', 'Artikel Berhasil Ditambahkan!');
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
				$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
				$this->form_validation->set_rules('isi', 'Isi', 'trim|required');
				$this->form_validation->set_rules('gambar', 'Gambar', 'trim|required');

				if ($this->form_validation->run() == FALSE) {
					$data['artikel'] = $this->artikel_model->edit($id);
					$data['view'] = 'admin/artikel/artikel_edit';
					$this->load->view('admin/layout', $data);
				}
				else{
					$data = array(
						'JUDUL' => $this->input->post('judul'),
						'ISI' => $this->input->post('isi'),
						'GAMBAR' => $this->input->post('gambar')
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
				$data['artikel'] = $this->artikel_model->edit($id);
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