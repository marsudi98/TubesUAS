<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{	
		$this->load->helper('url','form');
		$this->load->model('Pemain_model');
<<<<<<< HEAD
		$this->load->view('admin/data_candidate', $data);
		$data['pemain_list'] = $this->Pemain_model->getDatapemain();
=======
		$data['pemain_list'] = $this->Pemain_model->getDatapemain();
		$data['mvp'] = $this->Pemain_model->getpemain();
		$this->load->view('admin/data_candidate', $data);		
>>>>>>> fb1f8269257999f20301fa9c442bb2fbeeab702b
	}

	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Pemain_model');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('nickname', 'Nickname', 'trim|required');
		$this->form_validation->set_rules('rank', 'Rank', 'trim|required');
		$this->form_validation->set_rules('tanggalGabung', 'Tgl Gabung', 'trim|required');

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('admin/data_candidate_tambah');
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
				$this->load->view('admin/data_candidate_tambah', $error);
			}
			else
			{
				$this->Pemain_model->insertpemain();
				$this->load->view('admin/data_candidate_data');
			}
		}
		
	}

	public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Pemain_model');
		$data['pemain'] = $this->Pemain_model->getpemain($id);
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('nickname', 'Nickname', 'trim|required');
		$this->form_validation->set_rules('rank', 'Rank', 'trim|required');
		$this->form_validation->set_rules('tanggalGabung', 'Tgl Gabung', 'trim|required');


		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_pemain_view', $data);
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
				$this->load->view('edit_pemain_view', $error);
			}
			else
			{
				$this->pemain_model->updateById($id);
				$this->load->view('edit_pemain_data');
			}
		}
	}

	public function deleteData($id)
	{
		$this->load->helper('url');
		$this->load->model('Pemain_model');
		$this->Pemain_model->delete($id);
		redirect('admin');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */