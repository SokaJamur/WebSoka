<?php
class artikel_model extends CI_Model{
	function tampil(){
		$query = $this->db->get('artikel');
		return $result = $query->result_array();
	}
}
?>