<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	function Index()
	{
		$query = $this->Mbarang->getData_barang();
		$data = array(
					"query" => $query,
				);
		$this->load->view('barang',$data);
	}
 
	function hapus_barang($id_buku)
	{
		$data['kode_barang']=$kode_barang;
		
		$this->Mbarang->hapus_barang($data);
		redirect('data_barang');
	}

	function tambah_barang ()
	{
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		
		$input=array(
					'kode_barang'			=> $judul, 
					'nama_barang'		=> $noisbn, 
					'harga'		=> $penulis, 
					'stok'		=> $penerbit, 
					);

		$this->Mbarang->addBarang($input);
		redirect('data_barang');

	}

	
}