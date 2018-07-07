<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mbarang extends CI_model {

	function getData_barang() {
		$query = $this->db->query("SELECT * FROM tb_barang");
		return $query->result();
	}
	function hapus_barang($data) {
		$this->db->where('kode_barang',$data['kode_barang']);
		$this->db->delete('tb_barang');
	}
	function simpan_editBarang($update,$primary_key) {
		$this->db->update('tb_barang',$update,$primary_key);
	}

	function edit_barang($where = " ") {
		 $query = $this->db->query("SELECT * FROM tb_barang ".$where);
		 return $query->result_array();
	}
	function addBarang($input) {
		$this->db->insert('tb_barang',$input);
	}

}