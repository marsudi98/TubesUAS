<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voting extends CI_Controller {

	function __construct(){
       parent::__construct();
 	}

	public function index(){
		$this->load->helper('url','form');
		$this->load->model('Election_Model');
		$data['coach_list'] = $this->Election_Model->getDatacoach();
		$data['gk_list'] 	= $this->Election_Model->getDatagk();
		$data['mfp_list'] 	= $this->Election_Model->getDatamfp();
		$data['maxmfp'] 	= $this->Election_Model->maxvoteMFP();
		$data['maxcoach'] 	= $this->Election_Model->maxvoteCoach();
		$data['maxgk'] 		= $this->Election_Model->maxvoteGK();
		$data['dua'] 		= $this->Election_Model->count_vote();
		$this->load->view('index', $data);
	}


	public function candidate_data()
	{
		$this->load->model('Election_Model');
		$data['coach_data'] = $this->Election_Model->getDatacoach();
		$data['gk_data'] = $this->Election_Model->getDatagk();
		$data['mfp_data'] = $this->Election_Model->getDatamfp();
		$this->load->view('candidate_data', $data);
	}

	public function voting_page()
	{	
		$this->load->model('Election_Model');
		$data['coach_vote'] = $this->Election_Model->getDatacoach();
		$data['gk_vote'] = $this->Election_Model->getDatagk();
		$data['mfp_vote'] = $this->Election_Model->getDatamfp();
		$data['data_session'] = $this->Election_Model->getDataSession();
		$this->load->view('election_page', $data);
	}
	
	public function cast_vote()
	{
		$this->load->model('Election_Model');
		$data['coach_vote'] = $this->Election_Model->getDatacoach();
		$data['gk_vote'] = $this->Election_Model->getDatagk();
		$data['mfp_vote']= $this->Election_Model->getDatamfp();

		//cast vote
		$selected_coach = $this->input->post('coach');
		$coach_vote		= $this->Election_Model->add_vote_coach($selected_coach);
		 
		$selected_gk 	= $this->input->post('gk');
		$gk_vote 		= $this->Election_Model->add_vote_gk($selected_gk);

		$selected_mfp 	= $this->input->post('mfp');
		$mfp_vote 		= $this->Election_Model->add_vote_mfp($selected_mfp);

		$voted_id = $this->input->post('voted');
		$voted		= $this->Election_Model->is_voted($voted_id);

		

		//update session after vote
		
		// $sess_data['logged_in'] = 'Sudah Login';
  //       $sess_data['id'] = $this->session->userdata('logged_in')['id'];
  //       $sess_data['username'] = $this->session->userdata('logged_in')['username'];
  //       $sess_data['level'] = $this->session->userdata('logged_in')['level'];
  //       $sess_data['is_voted'] = $voted_id;
        // $this->session->set_userdata('logged_in', $sess_data);

        // $this->session->unset_userdata('logged_in');

		
		

		$this->load->view('election_page', $data);

		redirect('voting/vote_success');
	}

	public function vote_success()
	{

		$this->load->view('vote_success_page');
	}	

	public function count_vote_page()
	{
		$this->load->model('Election_Model');
		$data['jumlah'] = $this->Election_Model->maxvote();
		$data['dua'] = $this->Election_Model->count_vote();
		$this->load->view('vote', $data);

	}
}