
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MFP extends CI_Controller {

	public function index()
	{	
		$this->load->helper('url','form');
		$this->load->model('MFP_Model');
		$data['mfp_list'] = $this->MFP_Model->getDatamfp();
		$this->load->view('admin/data_candidatemfp', $data);		
	}

	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('MFP_Model');
		$this->form_validation->set_rules('fullname', 'fullname', 'trim|required');
		$this->form_validation->set_rules('birth', 'birth', 'trim|required');
		$this->form_validation->set_rules('nation', 'nation', 'trim|required');
		$this->form_validation->set_rules('number', 'number', 'trim|required');
		$this->form_validation->set_rules('position', 'position', 'trim|required');
		// $this->form_validation->set_rules('votes', 'votes', 'trim|required');

		if ($this->form_validation->run()==FALSE)
		{	
			$this->load->view('admin/data_candidatemfp_tambah');
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
				$this->load->view('admin/data_candidatemfp_tambah', $error);
			}
			else
			{
				$this->MFP_Model->insertmfp();
				$this->load->view('admin/data_candidatemfp_data');
			}
		}
		
	}

	public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('MFP_Model');
		$data['mfp'] = $this->MFP_Model->getmfp($id);
		$this->form_validation->set_rules('fullname', 'fullname', 'trim|required');
		$this->form_validation->set_rules('nation', 'nation', 'trim|required');
		$this->form_validation->set_rules('position', 'position', 'trim|required');
		$this->form_validation->set_rules('number', 'number', 'trim|required'); 

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('admin/data_candidatemfp_editview', $data);
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
				$this->load->view('admin/data_candidatemfp_editview', $error);
			}
			else
			{
				$this->MFP_Model->updateById($id);
				$this->load->view('admin/data_candidatemfp_editdata', $data);
			}
		}
	}

	public function deleteData($id)
	{
		$this->load->helper('url');
		$this->load->model('MFP_Model');
		$this->MFP_Model->delete($id);
		redirect('admin');
	}
}

/* End of file MFP_Controller.php */
/* Location: ./application/controllers/MFP_Controller.php */