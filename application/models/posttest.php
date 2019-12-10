<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Posttest extends CI_Model {
		public function getPosttestJawaban()
		{
			$sql = "SELECT id, right_answer FROM posttest;";
	        return $this->db->query($sql, array())->result();
		}

		public function getPosttestJawabanUser($id)
		{
			$sql = "SELECT * FROM posttest_user where user_id = ?;";
	        return $this->db->query($sql, array($id))->result();
		}
	}
	
	/* End of file posttest.php */
	/* Location: ./application/models/posttest.php */	