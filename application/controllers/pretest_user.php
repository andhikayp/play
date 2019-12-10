<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Pretest_user{

	public function index()
	{
		
	}

	public function calculateScore($pretest, $jawaban)
	{
		// var_dump();
		$score = 0;
		for ($i=0; $i < count($pretest); $i++) { 
			if ($pretest[$i]->right_answer == $jawaban[$i]->answer) {
				$score++;
			}
		}
		$nilai = ($score/count($pretest))*100;
		return $nilai;
	}
}

/* End of file pretest_user.php */
/* Location: ./application/controllers/pretest_user.php */