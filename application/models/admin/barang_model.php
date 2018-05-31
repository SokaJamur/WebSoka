<?php
class barang_model extends CI_Model{
	function get_barang(){
		$query = $this->db->get('barang');
		return $result = $query->result_array();
	}
	function get_pesan(){
		$this->db->select('pesanan.*, user.NAMA, user.ALAMAT, barang.NAMA_BARANG');
		$this->db->from('pesanan');
		$this->db->join('user', 'user.ID_USER_ = pesanan.ID_USER');
		$this->db->join('barang', 'barang.ID_BARANG = pesanan.ID_BARANG');
		$query = $this->db->get();
		return $result = $query->result_array();
	}
	function pesan_detail($id_pesan){
		$this->db->select('pesanan.*, user.NAMA, user.ALAMAT, user.NO_HP, barang.NAMA_BARANG');
		$this->db->from('pesanan');
		$this->db->join('user', 'user.ID_USER_ = pesanan.ID_USER');
		$this->db->join('barang', 'barang.ID_BARANG = pesanan.ID_BARANG');
		$this->db->where(array('ID_PESAN' => $id_pesan));
		$query = $this->db->get();
		return $result = $query->result_array();
	}
	function get_laporan(){
		$this->db->select('pesanan.*, user.NAMA, user.ALAMAT, user.NO_HP, barang.NAMA_BARANG');
		$this->db->from('pesanan');
		$this->db->join('user', 'user.ID_USER_ = pesanan.ID_USER');
		$this->db->join('barang', 'barang.ID_BARANG = pesanan.ID_BARANG');
		$query = $this->db->get();
		return $result = $query->result_array();
	}
	function tambah($data, $id){
		$this->db->where('ID_BARANG', $id);
		$this->db->update('barang', $data);
		return true;
	}
	function get_by_id($id){
		$query = $this->db->get_where('barang', array('ID_BARANG' => $id));
		return $result = $query->row_array();
	}
	function total_laporan(){
        $this->db->select_sum('TOTAL');
        $query = $this->db->get('pesanan');
        return $query->result();
    }
}

?>