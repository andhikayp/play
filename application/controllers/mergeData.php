<?php
class MergeData {
	public function index()
	{
				
	}

	public function mergeShowResult($user, $nilai_pretest, $nilai_posttest)
	{
		$data['user'] = $user; 
		$data['nilai_pretest'] = $nilai_pretest; 
		$data['nilai_posttest'] = $nilai_posttest; 
		return $data;
	}
}

/* End of file mergeData.php */
/* Location: ./application/controllers/mergeData.php */