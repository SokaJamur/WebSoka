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
	}

?>	