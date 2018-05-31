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
	public function get_artikel_by_id($id){
			$query = $this->db->get_where('artikel', array('ID_ARTIKEL' => $id));
			return $result = $query->row_array();
		}
	
	
	function edit_artikel($data, $id){
		$this->db->where('ID_ARTIKEL', $id);
		$this->db->update('artikel', $data);
		return true;
	}
}

?>