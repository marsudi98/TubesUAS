<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coach_Data_Grid extends CI_Controller {

public function coach_gridDinamis()
    {
        $this->load->view('coach_gridDinamisView');
    }

    public function getAllCoach()
    {
        $this->load->model('Coach_Grid_Model');
        $result = $this->Coach_Grid_Model->getAllCoach(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function addCoach(){
        $this->load->model('Coach_Grid_Model');
        $this->Coach_Grid_Model->save();
    }

    public function deleteCoach()
    {
        $this->load->model('Coach_Grid_Model');
        $id = $this->input->post('candidate_id'); 
        $this->Coach_Grid_Model->delete($id);
    }

    public function updateCoach(){
        $this->load->model('Coach_Grid_Model'); 
        $this->Coach_Grid_Model->update();
    }
}