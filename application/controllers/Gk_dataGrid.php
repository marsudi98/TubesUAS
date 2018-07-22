<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gk_dataGrid extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') == NULL ){
            echo '<script>alert("Sorry, you\'re not logged in!")</script>';
            redirect('login','refresh');
        } elseif($this->session->userdata('logged_in')['level'] == 'user'){
            echo '<script>alert("Sorry, you\'re not admin!")</script>';
            redirect('voting','refresh');
        }
    }

    public function gk_gridDinamis()
    {
        $this->load->view('admin/gridDinamisView_gk');
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