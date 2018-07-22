<?php

class Election_Model extends CI_Model
{
	public function getDatacoach()
	{
		$query = $this->db->get("coach_candidate");
		return $query->result();
	}

	public function getDatagk()
	{
		$query = $this->db->get("gk_candidate");
		return $query->result();
	}

	public function getDatamfp()
	{
		$query = $this->db->get("mfp_candidate");
		return $query->result();
	}


	public function getDataSession()
	{
		$idSession = $this->session->userdata('logged_in')['id'];
		$query = $this->db->query("SELECT is_voted FROM user WHERE id = $idSession");
		return $query->result();
	}

	public function maxvoteCoach()
	{
		return $this->db->query("SELECT fullname, nation, MAX(votes) as maxcoach FROM coach_candidate ")->result();
	}

	public function maxvoteMFP()
	{
		return $this->db->query("SELECT fullname, nation, MAX(votes) as maxmfp FROM mfp_candidate ")->result();
	}

	public function maxvoteGK()
	{
		return $this->db->query("SELECT fullname, nation, MAX(votes) as maxgk FROM gk_candidate ")->result();
	}

	public function count_vote()
	{		
		return $this->db->query("SELECT nation,votes FROM coach_candidate ORDER BY nation DESC")->result_array();
	}



	function get_votes_coach(){
 
   	}

	function get_votes_vice_gk(){
 
   	}

	function get_votes_mfp(){
 
   	}

   	function add_vote_coach($selected_coach){
		$this->db->from('coach_candidate'); //tabel woi
    	$this->db->where('candidate_id',$selected_coach);
		$this->db->set('votes', 'votes+1', FALSE);
		$this->db->update('coach_candidate'); 
   	}

	function add_vote_gk($selected_gk){
		$this->db->from('gk_candidate'); //tabel woi
    	$this->db->where('candidate_id',$selected_gk);
		$this->db->set('votes', 'votes+1', FALSE);
		$this->db->update('gk_candidate'); 
   	}
	
	function add_vote_mfp($selected_mfp){
		$this->db->from('mfp_candidate'); //tabel woi
    	$this->db->where('candidate_id',$selected_mfp);
		$this->db->set('votes', 'votes+1', FALSE);
		$this->db->update('mfp_candidate'); 
   	}		 

   	function is_voted($voted_id)
   	{
   		$this->db->from('user'); //tabel woi
    	$this->db->where('id',$voted_id);
		$this->db->set('is_voted', 'is_voted+1', FALSE);
		$this->db->update('user'); 
   	}
}
	
?>