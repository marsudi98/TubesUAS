<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pemain_model extends CI_Model
	{
		public function getDatapemain()
		{
			$query = $this->db->get("pemain");
			return $query->result_array();
		}
		public function insertpemain()
		{
			$tgl 				= $this->input->post('tanggalGabung');
			$tglBaru			= date_format(new DateTime($tgl),"Y-m-d");
			$object 			= array(
				'nama' 			=> $this->input->post('nama'),
				'nickname' 		=> $this->input->post('nickname'),
				'rank'			=> $this->input->post('rank'),
				'tanggalGabung'	=> $tglBaru,
				'photo'			=> $this->upload->data('file_name')
			);
			$this->db->insert('pemain', $object);

		}

		public function getpemain($id)
		{
			$this->db->where('id', $id);
			$query 				= $this->db->get('pemain');
			return $query->result();
		}

		public function updateById($id)
		{
			$data 				= array(
				'nama' 			=> $this->input->post('nama'),
				'nickname' 		=> $this->input->post('nickname'),
				'rank'			=> $this->input->post('rank'),
				'tanggalGabung' => $this->input->post('tanggalGabung'),
				'photo'			=> $this->upload->data('file_name')
			);
			$this->db->where('id', $id);
			$this->db->update('pemain', $data);
		}
		public function delete($id) { 
         if ($this->db->delete("pemain", "id = ".$id)) { 
            return true; 
         } 
      } 
	}

?>