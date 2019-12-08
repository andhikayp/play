<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() 
	{ 
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('auth');	
		$this->load->library('session');
	}

	public function index()
	{
		
	}

	private function validation($data)
	{
		$this->form_validation->set_rules('loginUsername', 'Username', 'required', array('required' => 'Username wajib dipilih'));
		$this->form_validation->set_rules('loginPassword', 'Password', 'required', array('required' => 'Password wajib dipilih'));
		if ($this->form_validation->run() == FALSE){
			return true;
		}
		else{
			return true;
		}
	}

	private function cekUserPass($data)
	{
		$username = $data['loginUsername']; 
		$password = $data['loginPassword']; 

		$namatabel ="userFacade"; 
		$user = $this->auth->check_login($namatabel, array('email' => $username), array('password' => $password));
		return $user;
	}

	private function createSession($user)
	{
		$data_session = array(
			'id' => $user->id,
			'id_number' => $user->id_number,
			'name' => $user->name,
			'progress' => $user->progress,
		);
		return $data_session;
	}

	function dologin() 
	{ 
		$status = $this->validation($this->input->post());
		if($status == FALSE)
		{
			$this->session->set_flashdata('message', array('type' => 'error', 'message' => [validation_errors()]));
			return redirect(base_url('auth/index'));
		}
		$user = $this->cekUserPass($this->input->post());
		if($user != FALSE) 
		{ 	
			$data_session = $this->createSession($user);
			$this->session->set_userdata('user_login',$data_session);
			redirect(base_url("userFacade/index")); 
		}
		else 
		{ 
			$this->session->set_flashdata('message', array('type' => 'error', 'message' => ["Username atau password tidak sesuai"]));
			redirect(base_url("userFacade/index")); 
		} 
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */