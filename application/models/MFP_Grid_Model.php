<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MFP_Grid_Model extends CI_Model {
	
	public function getAllMFP()
     {
        $query     = $this->db->get('mfp_candidate');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    public function save() 
    { 
        $data      = $this->input->post(); 
        $this->db->insert('mfp_candidate', $data); 
    } 

    public function update() 
    { 
        $id        = $this->input->post('candidate_id'); 
        $data      = $this->input->post(); 
        $this->db->where('candidate_id', $id)->update('mfp_candidate', $data); 
    } 

    public function delete() 
    { 
        $id        = $this->input->post('candidate_id'); 
        $this->db->where('candidate_id', $id); 
        $this->db->delete('mfp_candidate');
    }
}