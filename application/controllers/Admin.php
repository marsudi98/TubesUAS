<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	if($this->session->userdata('logged_in') == null){
	// 		redirect('login','refresh');
	// 	} 
	// }

	public function index()
	{	
		$this->load->helper('url','form');
		$this->load->model('Admin_model');
		$this->load->view('admin/index');		
	}
	
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */