<?php
class barang_model extends CI_Model{
	function get_barang(){
		$this->db->get('barang');
		$query = $this->db->get('barang');
		return $result = $query->result_array();
	}
	
	function get_pesan(){
		$this->db->get('pesanan');
		$query = $this->db->get('pesanan');
		return $result = $query->result_array();
	}
}

?>