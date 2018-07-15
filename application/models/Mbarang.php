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
	function getData($kode) {
		$query = $this->db->query("SELECT * FROM tb_barang WHERE kode_barang = '$kode'");
		return $query->result();
	}

	function total(){
		$total = $this->input->post('harga') * $this->input->post('jumlah');
		$data = array(
				'kode_barang' => $this->input->post('kode_barang'),
				'nama_pembeli' => $this->input->post('nama_pembeli'),
				'jumlah' => $this->input->post('jumlah'),
				'total_harga' => $total,
			);
		$this->db->insert('tb_pemesanan', $data);
	}
	function total_barang(){
		$query = $this->db->order_by('tb_pemesanan.kd_pemesanan'.' DESC');
		$this->db->join('tb_barang','tb_barang.kode_barang = tb_pemesanan.kode_barang');
		$query = $this->db->get('tb_pemesanan');
		return $query->row();
	}

}