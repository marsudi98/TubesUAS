<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Election_Controller extends CI_Controller {

	function __construct(){
       parent::__construct();
 	}

	public function index(){
		$this->load->helper('url','form');
		$this->load->model('Election_Model');
		$data['coach_list'] = $this->Election_Model->getDatacoach();
		$data['gk_list'] = $this->Election_Model->getDatagk();
		$data['mfp_list'] = $this->Election_Model->getDatamfp();
		$this->load->view('election_data_page', $data);
	}

	public function voting_page()
	{	
		$this->load->view('election_page');
	}
	
	function cast_vote(){
<<<<<<< HEAD
		$this->load->model('Election_Model');
		$selected_coach = $this->input->post('coach');
		$coach_vote = $this->Election_Model->add_vote_coach($selected_coach);
		 
		$selected_gk = $this->input->post('gk');
		$gk_vote = $this->Election_Model->add_vote_gk($selected_gk);
		 
		foreach ($this->input->post('mfp') as $selected_mfp){
			$mfp_vote = $this->Election_Model->add_vote_mfp($selected_mfp);
		}

		redirect('Election_controller/vote_success');
		//$this->index();
=======
		 $selected_coach = $this->input->post('coach');
		 $coach_vote = $this->Election_Model->add_vote_coach($selected_coach);
		 
		 $selected_gk = $this->input->post('gk');
		 $gk_vote = $this->Election_Model->add_vote_gk($selected_gk);
		 
		 foreach ($this->input->post('mfp') as $selected_mfp){
			 $mfp_vote = $this->Election_Model->add_vote_mfp($selected_mfp);
		 }

		 redirect('Election_controller/vote_success');
		 //$this->index();
>>>>>>> fb1f8269257999f20301fa9c442bb2fbeeab702b
	}

	function vote_success(){
		$this->load->view('vote_success_page');
	}	
}
