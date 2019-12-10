<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pretest extends CI_Model {

	public function getPretestJawaban()
	{
		$sql = "SELECT id, right_answer FROM pretest;";
        return $this->db->query($sql, array())->result();
	}

	public function getPretestJawabanUser($id)
	{
		$sql = "SELECT * FROM pretest_user where user_id = ?;";
        return $this->db->query($sql, array($id))->result();
	}
}

/* End of file pretest.php */
/* Location: ./application/models/pretest.php */