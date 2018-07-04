<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Election_Controller extends CI_Controller {

	function __construct(){
       parent::__construct();
       $this->load->model('election_model');
 	}

	public function index(){
		$this->load->view('home');
	}

	public function voting_page()
	{
		$this->load->view('election_page');
	}
	
	function cast_vote(){
		 $selected_president = $this->input->post('president');
		 $presidential_vote = $this->election_model->add_vote_president($selected_president);
		 
		 $selected_vice_president = $this->input->post('vice-president');
		 $vice_presidential_vote = $this->election_model->add_vote_vice_president($selected_vice_president);
		 
		 foreach ($this->input->post('senator') as $selected_senator){
			 $senatorial_vote = $this->election_model->add_vote_senator($selected_senator);
		 }

		 redirect('election_controller/vote_success');
		 //$this->index();
	}

	function vote_success(){
		$this->load->view('vote_success_page');
	}	
}
