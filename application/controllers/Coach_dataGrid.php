<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coach_dataGrid extends CI_Controller {
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

    public function coach_gridDinamis()
    {
        $this->load->view('admin/gridDinamisView_coach');
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