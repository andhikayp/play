<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserFacade extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pretest');
		$this->load->model('posttest');
		$this->load->model('user');
		$this->load->library('session');
		require('pretest_user.php');
		require('posttest_user.php');
		require('mergeData.php');
	}
	
	public function index()
	{
		$this->load->view('home');
		
	}

	public function showResult()
	{
		$user = $this->user->getUserProfile($this->session->userdata('user_login')['id']);
		$pretest = $this->pretest->getPretestJawaban();
		$posttest = $this->posttest->getPosttestJawaban();
		$jawaban_pretest = $this->pretest->getPretestJawabanUser($this->session->userdata('user_login')['id']);
		$jawaban_posttest = $this->posttest->getPosttestJawabanUser($this->session->userdata('user_login')['id']);

		$score_pretest = new Pretest_user;
		$nilai_pretest = $score_pretest->calculateScore($pretest, $jawaban_pretest);

		$score_posttest = new Posttest_user;
		$nilai_posttest = $score_posttest->calculateScore($posttest, $jawaban_posttest);

		$mergeData = new MergeData;
		$data = $mergeData->mergeShowResult($user, $nilai_pretest, $nilai_posttest);
		$this->load->view('skor', $data);
	}
}

/* End of file userFacade.php */
/* Location: ./application/controllers/userFacade.php */