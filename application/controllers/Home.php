<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in') == null){
			redirect('Login','refresh');
		}
	}
	public function index()
	{
		$query = $this->Mbarang->getData_barang();
		$data = array(
					"query" => $query,
				);
		$this->load->view('home', $data);
	}
	
}
