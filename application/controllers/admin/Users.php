<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Users extends MY_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('admin/user_model', 'user_model');
		}

		public function index(){
			$data['all_users'] =  $this->user_model->get_all_users();
			$data['view'] = 'admin/users/user_list';
			$this->load->view('admin/layout', $data);
		}
		
		public function edit($id = 0){
			if($this->input->post('submit')){
				$this->form_validation->set_rules('NAMA', 'Nama');
				$this->form_validation->set_rules('ALAMAT', 'Alamat');
				$this->form_validation->set_rules('EMAIL', 'Email');
				$this->form_validation->set_rules('NO_HP', 'No HP');

				if ($this->form_validation->run() == FALSE) {
					$data['user'] = $this->user_model->get_user_by_id($id);
					$data['view'] = 'admin/users/user_edit';
					$this->load->view('admin/layout', $data);
				}
				else{
					$data = array(
						'NAMA' => $this->input->post('NAMA'),
						'ALAMAT' => $this->input->post('ALAMAT'),
						'EMAIL' => $this->input->post('EMAIL'),
						'NO_HP' => $this->input->post('NO_HP')
					);
					$data = $this->security->xss_clean($data);
					$result = $this->user_model->edit_user($data, $id);
					if($result){
						$this->session->set_flashdata('msg', 'Data Berhasil Diperbarui !');
						redirect(base_url('admin/users'));
					}
				}
			}
			else{
				$data['user'] = $this->user_model->get_user_by_id($id);
				$data['view'] = 'admin/users/user_edit';
				$this->load->view('admin/layout', $data);
			}
		}

		public function del($id = 0){
			$this->db->delete('user', array('ID_USER_' => $id));
			$this->session->set_flashdata('msg', 'Data Berhasil Dihapus !');
			redirect(base_url('admin/users'));
		}

	}


?>