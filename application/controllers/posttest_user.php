<?php

class Posttest_user {

	public function index()
	{
		
	}

	public function calculateScore($pretest, $jawaban)
	{
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

/* End of file posttest_user.php */
/* Location: ./application/controllers/posttest_user.php */