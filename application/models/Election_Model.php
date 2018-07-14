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

	// public function getDataCandidate()
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('coach_candidate');
	// 	$this->db->join('gk_candidate', 'coach_candidate.candidate_id = gk_candidate.candidate_id');
	// 	$this->db->where('kandidat.no_kandidat', $id);
	// 	$query = $this->db->get();
	// 		if($query->num_rows() >0){
	// 			return $query->result();
	// 		}
	// 		else{
	// 			return false;
	// 		}
	// }

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
}

?>