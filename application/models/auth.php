<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {
	
	function check_login($table, $field1, $field2) 
    { 
        $this->db->select('*'); 
        $this->db->from($table); 
        $this->db->where($field1); 
        $this->db->where($field2); 
        $this->db->limit(1); 
        $query = $this->db->get(); 
        if ($query->num_rows() == 0)  
        { 
            return FALSE; 
        }  
        else  
        { 
            return $query->first_row(); 
        } 
    }
}

/* End of file auth.php */
/* Location: ./application/models/auth.php */