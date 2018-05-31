<?php
class barang_model extends CI_Model{
	function get_jamur(){
		$this->db->where('NAMA_BARANG', 'Jamur');
		$query = $this->db->get('barang');
		return $result = $query->result_array();
	}
	function get_baglog(){
		$this->db->where('NAMA_BARANG', 'Baglog');
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
		$this->db->update('pesanan', $data);
		return true;
	}
}

?>