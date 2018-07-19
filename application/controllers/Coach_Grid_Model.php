<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Coach_Grid_Model extends CI_Model {
	
	public function getAllCoach()
     {
        $query     = $this->db->get('coach_candidate');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    public function save() 
    { 
        $data      = $this->input->post(); 
        $this->db->insert('coach_candidate', $data); 
    } 

    public function update() 
    { 
        $id        = $this->input->post('candidate_id'); 
        $data      = $this->input->post(); 
        $this->db->where('candidate_id', $id)->update('coach_candidate', $data); 
    } 

    public function delete() 
    { 
        $id        = $this->input->post('candidate_id'); 
        $this->db->where('candidate_id', $id); 
        $this->db->delete('coach_candidate');
    }
}