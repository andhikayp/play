<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserNonfacade extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pretest');
		$this->load->model('posttest');
		$this->load->model('user');
		$this->load->library('session');
	}

	public function showResult()
	{
		$sql = "SELECT * FROM userFacade WHERE id = ?;";
        $user = $this->db->query($sql, array($this->session->userdata('user_login')['id']))->first_row();

        $sql = "SELECT id, right_answer FROM pretest;";
        $pretest = $this->db->query($sql, array())->result();

		$sql = "SELECT id, right_answer FROM posttest;";
	    $posttest =  $this->db->query($sql, array())->result();

	    $sql = "SELECT * FROM posttest_user where user_id = ?;";
		$jawaban_pretest =  $this->db->query($sql, array($this->session->userdata('user_login')['id']))->result();
		
		$sql = "SELECT * FROM posttest_user where user_id = ?;";
	    $jawaban_posttest = $this->db->query($sql, array($this->session->userdata('user_login')['id']))->result();

		$score = 0;
		for ($i=0; $i < count($pretest); $i++) { 
			if ($pretest[$i]->right_answer == $jawaban_pretest[$i]->answer) {
				$score++;
			}
		}
		$nilai_pretest = ($score/count($pretest))*100;

		$score = 0;
		for ($i=0; $i < count($posttest); $i++) { 
			if ($posttest[$i]->right_answer == $jawaban_posttest[$i]->answer) {
				$score++;
			}
		}
		$nilai_posttest = ($score/count($posttest))*100;

		$data['user'] = $user; 
		$data['nilai_pretest'] = $nilai_pretest; 
		$data['nilai_posttest'] = $nilai_posttest; 

		var_dump($data); return;
		$this->load->view('sertif', $data);
	}

}