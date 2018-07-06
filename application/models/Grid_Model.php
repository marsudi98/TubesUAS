<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Grid_Model extends CI_Model {
	
	public function getAllPemain()
     {
        $query     = $this->db->get('pemain');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    public function save() 
    { 
        $data      = $this->input->post(); 
        $this->db->insert('pemain', $data); 
    } 

    public function update() 
    { 
        $id        = $this->input->post('id'); 
        $data      = $this->input->post(); 
        $this->db->where('id', $id)->update('pemain', $data); 
    } 

    public function delete() 
    { 
        $id        = $this->input->post('id'); 
        $this->db->where('id', $id); 
        $this->db->delete('pemain');
    }
}