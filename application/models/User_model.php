<?php

class User_model extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	function get(){       
        return $this->db->get('tb_user')->result_array();
    }
}