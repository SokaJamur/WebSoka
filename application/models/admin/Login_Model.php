<?php
class Login_model extends CI_Model{
	public $user;
	public $password;

	public $label=[];

	public function __construct(){
		parent::__construct();
		$this->label=$this->_atributeLabels();
		$this->load->database();
	}

	public function cek_log(){
		$sql = sprintf("SELECT COUNT(*) AS hitung FROM user WHERE EMAIL = '%s' AND PASSWORD='%s'",
			$this->user,
			$this->password);
			$sql1 = sprintf("SELECT * FROM user WHERE EMAIL = '%s' AND PASSWORD='%s'",
			$this->user,
			$this->password);

			$query = $this->db->query($sql);
			$query1 = $this->db->query($sql1);
			$result = $query1->row_array();
			$row = $query->row_array();
			if($result['LEVEL'] == "admin"){
			return $row['hitung'] == 1 ;
			}
			else { return $row['hitung'] == 0 ;}
	}

	private function _atributeLabels(){
		return [
			'user'=>'User : ',
			'password'=>'Password : '];
	}
}
?>