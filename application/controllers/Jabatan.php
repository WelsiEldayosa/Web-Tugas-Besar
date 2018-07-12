<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Jabatan extends CI_Controller {
 
 	public function __construct()
 	{
 		parent::__construct();
 		if($this->session->userdata('logged_in')){
 			$session_data = $this->session->userdata('logged_in');
 			$data['username'] = $session_data['username'];
 			$data['level'] = $session_data['level'];
 			$current_controller = $this->router->fetch_class();
 			$this->load->library('acl');
 			if (! $this->acl->is_public($current_controller))
 			{
 				if (! $this->acl->is_allowed($current_controller, $data['level']))
 				{
 					echo '<script>alert("Hanya bisa dikunjungi oleh Admin")</script>';
 					redirect('pegawai','refresh');
 				}
 			}
 		}else{
 			redirect('login','refresh');
 		}
 	}

 	public function Index()
 	{
 		$session_data=$this->session->userdata('logged_in');
 		$data['username']=$session_data['username'];
 		$query = $this->Mbarang->getData_barang();
		$data = array(
					"query" => $query,
				);
		$this->load->view('loginJabatan',$data);
		}
 
	function hapus_barang($kode_barang)
	{
		$data['kode_barang']=$kode_barang;
		
		$this->Mbarang->hapus_barang($data);
		redirect('jabatan');
	}
	public function edit_barang($kode)
	{
		$barang=$this->Mbarang->edit_barang("where kode_barang ='$kode'");
		$data = array(
				"kode_barang"		=> $barang[0]['kode_barang'],
				"nama_barang" 		=> $barang[0]['nama_barang'],
				"harga"		 		=> $barang[0]['harga'],
				"stok"		 		=> $barang[0]['stok'],
				);

		$this->load->view('edit_loginJabatan', $data);
	}
	function simpan_edit_barang ()
	{
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		
		$primary_key = array(
					'kode_barang' 		=> $kode_barang
			);

		$update=array(
					'kode_barang'		=> $kode_barang,
					'nama_barang'		=> $nama_barang, 
					'harga'				=> $harga, 
					'stok'				=> $stok 
					
					);

		$this->Mbarang->simpan_editBarang($update,$primary_key);
		redirect('jabatan');

	}
	function addBarang ()
	{
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		
		
		$input=array(
					'kode_barang'			=> $kode_barang, 
					'nama_barang'			=> $nama_barang, 
					'harga'					=> $harga, 
					'stok'					=> $stok
					
					);

		$this->Mbarang->addBarang($input);
		redirect('jabatan');

	}
	public function tambah_barang()
	{
		$this->load->view('tambah_barang');
	}

	
 
 }
 
 /* End of file Pegawai.php */
 /* Location: ./application/controllers/Pegawai.php */ ?>