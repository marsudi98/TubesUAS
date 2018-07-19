<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Model extends CI_Model
{	
	public function cek_user($data){
		$query = $this->db->get_where('user',$data);
		return $query;
	}
}	