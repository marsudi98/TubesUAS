	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class MFP_Model extends CI_Model
	{
		public function getDatamfp() {
			$query = $this->db->get("mfp_candidate");
			return $query->result();
		}
		
		public function insertmfp()
		{
			$tgl 				= $this->input->post('birth');
			$tglBaru			= date_format(new DateTime($tgl),"Y-m-d");
			$object 			= array(
				'fullname' 		=> $this->input->post('fullname'),
				'nation' 		=> $this->input->post('nation'),
				'number'		=> $this->input->post('number'),
				'position' 		=> $this->input->post('position'),
				// 'votes' 		=> $this->input->post('votes'),
				'photo'			=> $this->upload->data('file_name')
			);
			$this->db->insert('mfp_candidate', $object);
		}

		public function getmfp($id)
		{	
			$this->db->where('candidate_id', $id);
			$query = $this->db->get("mfp_candidate");
			return $query->result();
			// $query = $this->db->get('mfp');
			// $this->db->where('id', $id);
			// return $query->result_array();
		}

		public function updateById($id)
		{
			$data 				= array(
				'fullname' 		=> $this->input->post('fullname'),
				'nation' 		=> $this->input->post('nation'),
				'number'		=> $this->input->post('number'),
				'position' 		=> $this->input->post('position'),
				'votes' 		=> $this->input->post('votes'),
				'photo'			=> $this->upload->data('file_name')
			);
			$this->db->where('candidate_id', $id);
			$this->db->update('mfp_candidate', $data);
		}
		public function delete($id) { 
         if ($this->db->delete('mfp_candidate', 'candidate_id = '.$id)) { 
            return true; 
         } 
      } 
	}

?>