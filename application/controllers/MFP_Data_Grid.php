<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MFP_Data_Grid extends CI_Controller {

public function mfp_gridDinamis()
    {
        $this->load->view('mfp_gridDinamisView');
    }

    public function getAllMFP()
    {
        $this->load->model('MFP_Grid_Model');
        $result = $this->MFP_Grid_Model->getAllMFP(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function addMFP(){
        $this->load->model('MFP_Grid_Model');
        $this->MFP_Grid_Model->save();
    }

    public function deleteMFP()
    {
        $this->load->model('MFP_Grid_Model');
        $id = $this->input->post('candidate_id'); 
        $this->MFP_Grid_Model->delete($id);
    }

    public function updateMFP(){
        $this->load->model('MFP_Grid_Model'); 
        $this->MFP_Grid_Model->update();
    }
}