<?php
class artikel_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	
	function tampil(){
		$query = $this->db->get('artikel');
		return $result = $query->result_array();
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