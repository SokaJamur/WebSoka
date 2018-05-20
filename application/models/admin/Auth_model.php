<?php
	class Auth_model extends CI_Model{

		public function login($data){
			$query = $this->db->get_where('user', array('EMAIL' => $data['EMAIL']));
			if ($query->num_rows() == 0){
				return false;
			}
			else{
				$result = $query->row_array();
			    $validPassword = password_verify($data['PASSWORD'], $result['PASSWORD']);
			    if($validPassword){
			        return $result = $query->row_array();
			    }
				
			}
		}

		public function change_pwd($data, $id){
			$this->db->where('ID_USER_', $id);
			$this->db->update('user', $data);
			return true;
		}

	}

?>