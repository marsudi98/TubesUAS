<?php

class Election_Model extends CI_Model
{
	function get_votes_president(){
 
   	}

	function get_votes_vice_president(){
 
   	}

	function get_votes_senator(){
 
   	}

   	function add_vote_president($selected_president){
		$this->db->from('presidential_candidate'); //table
    	$this->db->where('candidate_id',$selected_president);
		$this->db->set('votes', 'votes+1', FALSE);
		$this->db->update('presidential_candidate'); 
   	}

	function add_vote_vice_president($selected_vice_president){
		$this->db->from('vice-presidential_candidate'); //table
    	$this->db->where('candidate_id',$selected_vice_president);
		$this->db->set('votes', 'votes+1', FALSE);
		$this->db->update('vice-presidential_candidate'); 
   	}
	
	function add_vote_senator($selected_senator){
		$this->db->from('senatorial_candidate'); //table
    	$this->db->where('candidate_id',$selected_senator);
		$this->db->set('votes', 'votes+1', FALSE);
		$this->db->update('senatorial_candidate'); 
   	}		 
}

?>