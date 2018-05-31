<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fungsi {
	protected $_ci;
	
	function __construct()
	{
		$this->_ci =&get_instance();
		$this->_ci->load->model('barang_model');
	}

	function rupiah($nominal)
	{
 		$rp = "Rp ".number_format($nominal,0,',','.');
		return $rp;
	}
}