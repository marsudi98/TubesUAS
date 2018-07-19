	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class GK_Model extends CI_Model
	{
		public function getDatagk() {
			$query = $this->db->get("gk_candidate");
			return $query->result();
		}
		
		public function insertgk()
		{
			$tgl 				= $this->input->post('birth');
			$tglBaru			= date_format(new DateTime($tgl),"Y-m-d");
			$object 			= array(
				'fullname' 		=> $this->input->post('fullname'),
				'nation' 		=> $this->input->post('nation'),
				'number'		=> $this->input->post('number'),
				// 'votes' 		=> $this->input->post('votes'),
				'photo'			=> $this->upload->data('file_name')
			);
			$this->db->insert('gk_candidate', $object);
		}

		public function getgk()
		{	
			$query = $this->db->get("gk_candidate");
			return $query->result();
			// $query = $this->db->get('gk');
			// $this->db->where('id', $id);
			// return $query->result_array();
		}

		public function updateById($id)
		{
			$data 				= array(
				'fullname' 		=> $this->input->post('fullname'),
				'nation' 		=> $this->input->post('nation'),
				'number'		=> $this->input->post('number'),
				'votes' 		=> $this->input->post('votes'),
				'photo'			=> $this->upload->data('file_name')
			);
			$this->db->where('candidate_id', $id);
			$this->db->update('gk_candidate', $data);
		}
		public function delete($id) { 
         if ($this->db->delete('gk_candidate', 'candidate_id = '.$id)) { 
            return true; 
         } 
      } 
	}

?>