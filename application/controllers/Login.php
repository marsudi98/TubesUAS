<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login_view');		
	}

	public function cek_login()
	{	
		$data = array('username' => $this->input->post('username'), 
					  'password' => $this->input->post('password')
					  );
		$this->load->model('User_Model');
		$hasil = $this->User_Model->cek_user($data);
		if ($hasil->num_rows() == 1){
			foreach($hasil->result() as $sess)
            {
              //$sess_data['logged_in'] = 'Sudah Login';
              $sess_data['username'] = $sess->username;
              $sess_data['level'] = $sess->level;
            }
            $this->session->set_userdata('logged_in',$sess_data);

            $data = $this->session->userdata('logged_in');
            $level = $data['level'];
			if ($level =='admin'){
				redirect('admin');
			}
			elseif ($level =='user'){
				redirect('Election_Controller');
			}
		}
		else
		{
			echo " <script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
		}
		
	}

 	public function logout()
 	{
 		$this->session->unset_userdata('logged_in');
 		$this->session->sess_destroy();
 		redirect('login','refresh');
 	}
}


	// public function auth()
 // 	{
 // 		$this->load->library('form_validation');
 // 		$this->form_validation->set_rules('username','Username','trim|required');
 // 		$this->form_validation->set_rules('password','Password','trim|required|callback_verify');
 // 		if ($this->form_validation->run() == FALSE) {
 // 			$this->load->view('login_view');
 // 		} else {
 // 			redirect('admin/index','refresh');
 // 		}
 		
 // 	}

 // 	public function register()
 // 	{
 // 		$this->load->library('form_validation');

 // 		$this->form_validation->set_rules('username','Username','trim|required');
 // 		$this->form_validation->set_rules('password','Password','trim|required');
 // 		if ($this->form_validation->run() == FALSE) {
 // 			$this->load->view('register_view');
 // 		} else {
 // 			$this->load->model('User_model');
 // 			$this->user->insert();
 // 			echo '<script>alert("You have successfully registered!")</script>';
 // 			redirect('Login','refresh');
 // 		}
 // 	}
 	
 // // 	public function cek_login()
	// // {
	// // 	$data = array('username' => $this->input->post('username') , 
	// // 				  'password' => $this->input->post('password')
	// // 				  );
	// // 	$hasil = $this->User_Model->cek_user($data);
	// // 	if ($hasil->num_rows() == 1){
	// // 		foreach($hasil->result() as $sess)
 // //            {
 // //              $sess_data['logged_in'] = 'Sudah Login';
 // //              $sess_data['username'] = $sess->username;
 // //              $sess_data['level'] = $sess->level;
 // //              $this->session->set_userdata($sess_data);
 // //            }
	// // 		if ($this->session->userdata('level')=='admin'){
	// // 			redirect('admin');
	// // 		}
	// // 		elseif ($this->session->userdata('level')=='member'){
	// // 			redirect('member');
	// // 		}
	// // 	}
	// // 	else
	// // 	{
	// // 		echo " <script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
	// // 	}
		
	// // }

 // 	public function verify($password)
 // 	{
 // 		$this->load->model('User_model');
 // 		$username = $this->input->post('username');
 // 		$result = $this->User_model->login($username,$password);
 // 		if($result){
 // 			$sess_array = array();
 // 			foreach ($result as $row) {
 // 				$sess_array = array(
 // 					'id'=>$row->id,
 // 					'username'=> $row->username,
 // 					'level' => $row->level
 // 				);
 // 				$this->session->set_userdata('logged_in',$sess_array);
 // 			}
 // 			return true;
 // 			if ($this->session->set_userdata('level')=='admin'){
	// 			redirect('admin/index');
	// 		}
	// 		elseif($this->session->set_userdata('level')=='user'){
	// 			redirect('member');
	// 		}
 // 		}else{
 // 			$this->form_validation->set_message('verify',"Gagal Login: Cek username dan password!");
 // 			return false;
 // 		}
 // 	}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
?>