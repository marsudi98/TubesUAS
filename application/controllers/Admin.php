<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{	
		$this->load->helper('url','form');
		$this->load->model('Admin_model');
		$data['pemain_list'] = $this->Admin_model->getDatapemain();
		$data['mvp'] = $this->Admin_model->getpemain();
		$this->load->view('admin/index', $data);		
	}
	
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */