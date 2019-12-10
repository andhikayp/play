<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pretest');
		$this->load->model('posttest');
		$this->load->model('user');
		$this->load->library('session');
	}

	public function index()
	{
		$sql = "SELECT * FROM journal;";
        $data['journal'] = $this->db->query($sql, array())->result();
		$this->load->view('jurnal', $data);
	}

}

/* End of file journal.php */
/* Location: ./application/controllers/journal.php */