<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GK extends CI_Controller {

	public function index()
	{	
		$this->load->helper('url','form');
		$this->load->model('GK_Model');
		$data['gk_list'] = $this->GK_Model->getDatagk();
		$this->load->view('admin/data_candidategk', $data);		
	}

	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('GK_Model');
		$this->form_validation->set_rules('fullname', 'fullname', 'trim|required');
		$this->form_validation->set_rules('nation', 'nation', 'trim|required');
		$this->form_validation->set_rules('number', 'number', 'trim|required');
		$this->form_validation->set_rules('birth', 'birth', 'trim|required');

		if ($this->form_validation->run()==FALSE)
		{	
			$this->load->view('admin/data_candidategk_tambah');
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
				$this->load->view('admin/data_candidategk_tambah', $error);
			}
			else
			{
				$this->GK_Model->insertgk();
				$this->load->view('admin/data_candidategk_data');
			}
		}
		
	}

	public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('GK_Model');
		$data['gk'] = $this->GK_Model->getgk($id);
		$this->form_validation->set_rules('fullname', 'fullname', 'trim|required');
		$this->form_validation->set_rules('nation', 'nation', 'trim|required');
		$this->form_validation->set_rules('birth', 'birth', 'trim|required');
		$this->form_validation->set_rules('number', 'number', 'trim|required');
		$this->form_validation->set_rules('votes', 'votes', 'trim|required');

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('admin/data_candidategk_editview', $data);
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
				$this->load->view('admin/data_candidategk_editview', $error);
			}
			else
			{
				$this->GK_Model->updateById($id);
				$this->load->view('admin/data_candidategk_editdata', $data);
			}
		}
	}

	public function deleteData($id)
	{
		$this->load->helper('url');
		$this->load->model('GK_Model');
		$this->GK_Model->delete($id);
		redirect('admin');
	}
}

/* End of file GK_Controller.php */
/* Location: ./application/controllers/GK_Controller.php */