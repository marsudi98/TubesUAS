<?php defined('BASEPATH') OR exit('No direct script access allowed');

class GK_Grid_Model extends CI_Model {
	
	public function getAllGK()
     {
        $query     = $this->db->get('gk_candidate');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    public function save() 
    { 
        $data      = $this->input->post(); 
        $this->db->insert('gk_candidate', $data); 
    } 

    public function update() 
    { 
        $id        = $this->input->post('candidate_id'); 
        $data      = $this->input->post(); 
        $this->db->where('candidate_id', $id)->update('gk_candidate', $data); 
    } 

    public function delete() 
    { 
        $id        = $this->input->post('candidate_id'); 
        $this->db->where('candidate_id', $id); 
        $this->db->delete('gk_candidate');
    }
}