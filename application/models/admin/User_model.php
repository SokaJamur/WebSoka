<?php
	class User_model extends CI_Model{

		public function get_all_users(){
			$query = $this->db->get('user');
			return $result = $query->result_array();
		}

		public function get_user_by_id($id){
			$query = $this->db->get_where('user', array('ID_USER_' => $id));
			return $result = $query->row_array();
		}

		public function edit_user($data, $id){
			$this->db->where('ID_USER_', $id);
			$this->db->update('user', $data);
			return true;
		}

	}

?>