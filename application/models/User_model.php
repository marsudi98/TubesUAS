<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function login($username,$password)
 	{
 		$this->db->select('id,username,password,level');
 		$this->db->from('user');
 		$this->db->where('username',$username);
 		$this->db->where('password', MD5($password));
 		$query = $this->db->get();
 		if($query->num_rows()==1){
 			return $query->result();
 		}else{
 			return false;
 		}
 		
 	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */