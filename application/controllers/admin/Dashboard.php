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
		/*if($this->input->post('submit')){
			$config = ['upload_path' => 'assests/img/', 
			'allowed_types' => 'jpg|png|jpeg',
			];
			
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if(!empty($_FILES['gambar']['name'])){
	        if ($this->upload->do_upload()){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='assests/img/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['new_image']= './assests/img/'.$gbr['file_name'];
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
						'JUDUL' => $this->input->post('judul'),
						'ISI' => $this->input->post('isi'),
						'GAMBAR' => $this->input->post('gambar')
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
			}*/
		$dir = 'assests/img/';
        $config['upload_path']      = 'assests/img/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar')) {
            $error = array(
                'error'     => $this->upload->display_errors(),
           
            );
            $this->load->view('admin/artikel/artikel_add');
        }else{
        $data = array(
            'JUDUL' => $this->input->post('judul'),
			'ISI' => $this->input->post('isi'),
            'GAMBAR' => $dir.$this->upload->data('file_name'),
            
            
        );
        $this->db->insert('artikel',$data);
        redirect(base_url('admin/dashboard'));
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
					
					$data = $this->security->xss_clean($data);
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