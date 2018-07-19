<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coach extends CI_Controller {

	public function index()
	{	
		$this->load->helper('url','form');
		$this->load->model('Coach_Model');
		$data['coach_list'] = $this->Coach_Model->getDatacoach();
		$this->load->view('admin/data_candidatecoach', $data);		
	}

	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Coach_Model');
		$this->form_validation->set_rules('fullname', 'fullname', 'trim|required');
		$this->form_validation->set_rules('nation', 'nation', 'trim|required');
		if ($this->form_validation->run()==FALSE)
		{	
			$this->load->view('admin/data_candidatecoach_tambah');
		}	
		else
		{
			$config['upload_path']		= './assets/uploads/';
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= 100000000;
			$config['max_width']		= 10240;
			$config['max_height']		= 7680;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/data_candidatecoach_tambah', $error);
			}
			else
			{
				$this->Coach_Model->insertcoach();
				$this->load->view('admin/data_candidatecoach_data');
			}
		}
		
	}

	public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Coach_Model');
		$data['coach'] = $this->Coach_Model->getcoach($id);
		$this->form_validation->set_rules('fullname', 'fullname', 'trim|required');
		$this->form_validation->set_rules('nation', 'nation', 'trim|required');


		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('admin/data_candidatecoach_editview', $data);
		}
		else
		{
			$config['upload_path']		= './assets/uploads/';
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= 100000000;
			$config['max_width']		= 10240;
			$config['max_height']		= 7680;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/data_candidatecoach_editview', $error);
			}
			else
			{
				$this->Coach_Model->updateById($id);
				$this->load->view('admin/data_candidatecoach_editdata');
			}
		}
	}

	public function deleteData($id)
	{
		$this->load->helper('url');
		$this->load->model('Coach_Model');
		$this->Coach_Model->delete($id);
		redirect('admin');
	}
}

/* End of file Coach_Controller.php */
/* Location: ./application/controllers/Coach_Controller.php */