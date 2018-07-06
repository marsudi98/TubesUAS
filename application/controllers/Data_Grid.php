<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Grid extends CI_Controller {

public function gridDinamis()
    {
        $this->load->view('gridDinamisView');
    }

    public function getAllPemain()
    {
        $this->load->model('Grid_Model');
        $result = $this->Grid_Model->getAllPemain(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function addPemain(){
        $this->load->model('Grid_Model');
        $this->Grid_Model->save();
    }

    public function deletePemain()
    {
        $this->load->model('Grid_Model');
        $id = $this->input->post('id'); 
        $this->Grid_Model->delete($id);
    }

    public function updatePemain(){
        $this->load->model('Grid_Model'); 
        $this->Grid_Model->update();
    }
}