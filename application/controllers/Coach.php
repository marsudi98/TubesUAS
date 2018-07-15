<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coach extends CI_Controller {

	public function index()
	{	
		$this->load->helper('url','form');
		$this->load->model('Admin_model');
		$data['pemain_list'] = $this->Admin_model->getDatapemain();
		$data['mvp'] = $this->Admin_model->getpemain();
		$this->load->view('admin/data_candidatecoach', $data);		
	}

	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Admin_model');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('nickname', 'Nickname', 'trim|required');
		$this->form_validation->set_rules('rank', 'Rank', 'trim|required');
		$this->form_validation->set_rules('tanggalGabung', 'Tgl Gabung', 'trim|required');

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
				$this->Admin_model->insertpemain();
				$this->load->view('admin/data_candidatecoach_data');
			}
		}
		
	}

	public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Admin_model');
		$data['pemain'] = $this->Admin_model->getpemain($id);
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('nickname', 'Nickname', 'trim|required');
		$this->form_validation->set_rules('rank', 'Rank', 'trim|required');
		$this->form_validation->set_rules('tanggalGabung', 'Tgl Gabung', 'trim|required');


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
				$this->Admin_model->updateById($id);
				$this->load->view('admin/data_candidatecoach_editdata');
			}
		}
	}

	public function deleteData($id)
	{
		$this->load->helper('url');
		$this->load->model('Admin_model');
		$this->Admin_model->delete($id);
		redirect('admin');
	}
}

/* End of file Coach_Controller.php */
/* Location: ./application/controllers/Coach_Controller.php */