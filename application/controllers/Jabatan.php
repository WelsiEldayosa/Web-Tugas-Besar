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
 		$this->load->view('loginJabatan',$data);
 	}
 
 }
 
 /* End of file Pegawai.php */
 /* Location: ./application/controllers/Pegawai.php */ ?>