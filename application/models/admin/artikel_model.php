<?php
class artikel_model extends CI_Model{
	function tampil(){
		$query = $this->db->get('artikel');
		return $result = $query->result_array();
	}
	
	function upload($data){
		$this->db->insert('artikel', $data);
		return true;
	}
	
	function edit($data, $id){
		$this->db->where('ID_ARTIKEL', $id);
		$this->db->update('artikel', $data);
		return true;
	}
}

?>