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

		if ($this->form_validation->run() == FALSE)
		{
			return false;
		}
		else
		{
			return true;
		}
	}

	function dologin() 
	{ 
		$status = $this->validation();

		if($status == FALSE)
		{
			$this->session->set_flashdata('message', array('type' => 'error', 'message' => [validation_errors()]));
			return redirect(base_url('auth/index'));
		}

		$username = $this->input->post('loginUsername', TRUE); 
		$password = $this->input->post('loginPassword', TRUE); 
		$password1 = crypt($password,'jaDzqvi93kHFY'); 
        $password2 = crypt($password,'b0c4hd4rj0k3r4d'); 
		//parsing parameter dengan model 
		$namatabel ="users_kantor"; 
		$user = $this->Authentikasi->check_login($namatabel, array('username' => $username), array('password' => $password1)); 
		$user2 = $this->Authentikasi->check_login($namatabel, array('username' => $username), array('password' => $password2)); 
		// var_dump($user2);return;
		//akun ada -> create session
		if($user != FALSE) 
		{ 	
			// var_dump($user->npsn);return;
			$data_session = array(
				'id' => $user->id,
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

			$this->session->set_userdata('user_login',$data_session);
			redirect(base_url("dashboard/index")); 
		}
		elseif($user2 != FALSE) 
		{ 	
			$data_session = array(
				'id' => $user2->id,
				'role' => $user2->id_unique,
				'username' => $user2->username,
				'no_hape_petugas' => $user2->no_hape_petugas,
				'created_on' => $user2->created_on,
				'last_login' => $user2->last_login,
				'active' => $user2->active,
				'nama_role' => $user2->nama_role,
				'id_role' => $user2->id_role,
				'role_kode' => $user2->kode_sekolah,
				'npsn' => $user2->npsn,
				);

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
