<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function getUserProfile($id)
	{
		$sql = "SELECT * FROM userFacade WHERE id = ?;";
        return $this->db->query($sql, array($id))->first_row();
	}
	

}

/* End of file user.php */
/* Location: ./application/models/user.php */