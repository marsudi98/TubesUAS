<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

		if($this->session->userdata('logged_in')['is_voted']  ){
			echo '<script>alert("Sorry, you\'re not logged in!")</script>';
			redirect('login','refresh');
		} elseif($this->session->userdata('logged_in')['level'] == 'user'){
			echo '<script>alert("Sorry, you\'re not admin!")</script>';
			redirect('voting','refresh');
		}
	}

	public function getUserSess()
	{
		$this->load->helper('url','form');
		$this->load->model('Admin_Model');
		$data['user_list'] = $this->Admin_Model->getDataUser();
		$this->load->view('header', $data);
	}

	public function index()
	{	
		$this->load->helper('url','form');
		$this->load->model('Admin_model');
		$this->load->view('admin/index');		
	}

	public function user()
	{
		$this->load->helper('url','form');
		$this->load->model('Admin_Model');
		$data['user_list'] = $this->Admin_Model->getDataUser();
		$this->load->view('admin/user', $data);
	}

	public function createUser()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
 		$this->load->model('Admin_Model');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
 		$this->form_validation->set_rules('username','Username','trim|required');
 		$this->form_validation->set_rules('password','Password','trim|required');
 		if ($this->form_validation->run() == FALSE) {
 			$this->load->view('admin/user_tambahview');
 		} else {
 			$this->Admin_Model->insertUser();
 			$this->load->view('admin/user_tambahdata');
 			// redirect('admin','refresh');
 		}

	}

	public function updateUser($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
 		$this->load->model('Admin_Model');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
 		$this->form_validation->set_rules('username','Username','trim|required');
 		$this->form_validation->set_rules('password','Password','trim|required');
		$data['user'] = $this->Admin_Model->getUser($id);
 		if ($this->form_validation->run() == FALSE) {
 			$this->load->view('admin/user_editview', $data);
 		} else {
 			$this->Admin_Model->updateById($id);
 			$this->load->view('admin/user_editdata');
 			// redirect('admin','refresh');
 		}
	}
	
	public function deleteUser($id)
	{
		$this->load->helper("url");
		$this->load->model("Admin_Model");
		$this->Admin_Model->deleteUser($id);
		redirect('admin/user');
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */