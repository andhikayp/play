<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificate extends CI_Controller {

	public function index()
	{
		
	}

	public function showSertif()
	{
		// var_dump($this->session->userdata('user_login')['name']); return;
		$this->load->view('sertif');
	}

}

/* End of file cerificate.php */
/* Location: ./application/controllers/certificate.php */