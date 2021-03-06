<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Pegawai extends CI_Controller {
 
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
 					redirect('login/logout','refresh');
 				}
 			}
 		}else{
 			redirect('login','refresh');
 		}
 	}

 	public function Index()
 	{
 		$session_data=$this->session->userdata('logged_in');
 		$query = $this->Mbarang->getData_barang();
		$data = array(
					"query" => $query,
				);
		$this->load->view('home',$data);
		}

 	public function beli($kode)
	{
		$data['query']= $this->Mbarang->getData($kode);
		$this->load->view('beli',$data);
	}

	public function total(){
		$this->Mbarang->total();
		redirect('pegawai/total_barang');
	}
	public function total_barang(){
		$data['query'] = $this->Mbarang->total_barang();
		$this->load->view('total', $data);
	}
 }
 
 /* End of file Pegawai.php */
 /* Location: ./application/controllers/Pegawai.php */ ?>