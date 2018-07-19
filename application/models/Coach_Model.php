	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Coach_Model extends CI_Model
	{
		public function getDatacoach() 
		{
			$query = $this->db->get("coach_candidate");
			return $query->result();
		}
		
		public function insertcoach()
		{
			$tgl 				= $this->input->post('tanggalGabung');
			$tglBaru			= date_format(new DateTime($tgl),"Y-m-d");
			$object 			= array(
				'fullname' 		=> $this->input->post('fullname'),
				'nation' 		=> $this->input->post('nation'),
				'photo'			=> $this->upload->data('file_name'));
			$this->db->insert('coach_candidate', $object);
		}

		public function getcoach($id)
		{	
			$this->db->where('candidate_id', $id);
			$query = $this->db->get("coach_candidate");
			return $query->result();
			// $query = $this->db->get('coach');
			// $this->db->where('id', $id);
			// return $query->result_array();
		}

		public function updateById($id)
		{
			$data 				= array(
				'fullname' 		=> $this->input->post('fullname'),
				'nation' 		=> $this->input->post('nation'),
				'photo'			=> $this->upload->data('file_name')
			);
			$this->db->where('candidate_id', $id);
			$this->db->update('coach_candidate', $data);
		}
		public function delete($id) { 
         if ($this->db->delete('coach_candidate', 'candidate_id = '.$id)) { 
            return true; 
         } 
      } 
	}

?>