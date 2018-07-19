	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin_Model extends CI_Model
	{
		public function getDataUser()
		{
			$query = $this->db->get("user");
			return $query->result();
		}
		
		public function insertUser()
	 	{
	 		$data = array(
	 			'name' => $this->input->post('name'),
	 			'username' => $this->input->post('username'),
	 			'password' => md5($this->input->post('password')),
	 			'level' => $this->input->post('level')
	 		);
	 		$this->db->insert('user',$data);
	 	}

	 	public function getUser($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('user');
			return $query->result();
		}

		public function updateById($id)
		{
			$data = array(
				'name' => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'level' => $this->input->post('level')
			);
			$this->db->where('id', $id);
			$this->db->update('user', $data);
		}

	 	public function deleteUser($id) { 
	        if ($this->db->delete("user", "id = ".$id)) { 
	           return true; 
        	} 
     	} 


	}

?>