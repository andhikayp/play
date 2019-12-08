<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() 
	{ 
		parent::__construct();
		$this->load->library('slice');
		$this->load->library('form_validation');
		$this->load->model('Authentikasi');	
		$this->load->library('session');

		//cek status
		if($this->session->userdata('user_login'))
		{ 
			redirect(base_url("dashboard/index")); 
		}
	}
 
	public function index() 
	{ 
		$this->slice->view('auth/login'); 
	}

	private function validation()
	{
		$this->form_validation->set_rules('loginUsername', 'Username', 'required', array('required' => 'Username wajib dipilih'));
		$this->form_validation->set_rules('loginPassword', 'Password', 'required', array('required' => 'Password wajib dipilih'));
		if ($this->form_validation->run() == FALSE){
			return false;
		}
		else{
			return true;
		}
	}

	private function cekUserPass($data)
	{
		$username = $data['loginUsername']; 
		$password = $data['loginPassword']; 
		$password = crypt($password,'jaDzqvi93kHFY'); 

		$namatabel ="users_kantor"; 
		$user = $this->Authentikasi->check_login($namatabel, array('username' => $username), array('password' => $password));
		return $user;
	}

	private function createSession($user)
	{
		$data_session = array(
			'id' => $user->id,
			// 'id_number' => $user->id_number,
			// 'name' => $user->name,
			// 'progress' => $user->progress,
			'role' => $user->id_unique,
			'username' => $user->username,
			'no_hape_petugas' => $user->no_hape_petugas,
			'created_on' => $user->created_on,
			'last_login' => $user->last_login,
			'active' => $user->active,
			'nama_role' => $user->nama_role,
			'id_role' => $user->id_role,
			'role_kode' => $user->kode_sekolah,
			'npsn' => $user->npsn,
		);
		return $data_session;
	}

	function dologin() 
	{ 
		$status = $this->validation();
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
			redirect(base_url("dashboard/index")); 
		}
		else 
		{ 
			$this->session->set_flashdata('message', array('type' => 'error', 'message' => ["Username atau password tidak sesuai"]));
			redirect(base_url("auth/index")); 
		} 
	}
}
