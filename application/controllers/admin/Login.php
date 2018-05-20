<?php
class Login extends CI_Controller{
	public $model = NULL;

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/Login_model');
		$this->model = $this->Login_model;

		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index(){
		if(isset($_POST['btn_log'])){
			$this->model->user = $_POST['email'];
			$this->model->password = $_POST['password'];
			if ($this->model->cek_log()==TRUE) {
				$admin_data = array(
							
						 	'name' => $this->model->user = $_POST['email'],
						 	'is_admin_login' => TRUE
						);
						$this->session->set_userdata($admin_data);
						redirect(base_url('admin/dashboard'), 'refresh');
			}
			else{
				$data['msg'] = 'Invalid Email or Password!';
						$this->load->view('admin/auth/login', $data);
			}
		}else{
			$this->load->view('admin/auth/login', ['model'=>$this->model]);
		}
	}

	public function logout(){
		$this->session->sess_destroy();
			redirect(base_url('admin/auth/login'), 'refresh');
			
		
	}
}
?>