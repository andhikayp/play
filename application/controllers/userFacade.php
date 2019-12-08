<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserFacade extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

}

/* End of file userFacade.php */
/* Location: ./application/controllers/userFacade.php */