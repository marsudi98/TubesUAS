<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GK_Data_Grid extends CI_Controller {

public function gk_gridDinamis()
    {
        $this->load->view('gk_gridDinamisView');
    }

    public function getAllGK()
    {
        $this->load->model('GK_Grid_Model');
        $result = $this->GK_Grid_Model->getAllGK(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function addGK(){
        $this->load->model('GK_Grid_Model');
        $this->GK_Grid_Model->save();
    }

    public function deleteGK()
    {
        $this->load->model('GK_Grid_Model');
        $id = $this->input->post('candidate_id'); 
        $this->GK_Grid_Model->delete($id);
    }

    public function updateGK(){
        $this->load->model('GK_Grid_Model'); 
        $this->GK_Grid_Model->update();
    }
}