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
					  'password' => md5($this->input->post('password'))
					  );
		$this->load->model('User_Model');
		$where = array(
		'username' => $username,
		'password' => md5($password)
		);
		$hasil = $this->User_Model->cek_user($data, $where);
		if ($hasil->num_rows() == 1){
			foreach($hasil->result() as $sess)
            {
              $sess_data['logged_in'] = 'Sudah Login';
              $sess_data['id'] = $sess->id;
              $sess_data['username'] = $sess->username;
              $sess_data['level'] = $sess->level;
              $sess_data['is_voted'] = $sess->is_voted;
            }
            $this->session->set_userdata('logged_in',$sess_data);
            $data = $this->session->userdata('logged_in');
            $level = $data['level'];
			if ($level =='admin'){
				redirect('admin');
			}
			elseif ($level =='user'){
				redirect('voting');
			}
		}
		else
		{
			echo " <script>alert('Login Failed: Check username , password!');history.go(-1);</script>";
		}
		
	}

 	public function logout()
 	{
 		$this->session->unset_userdata('logged_in');
 		$this->session->sess_destroy();
 		redirect('login','refresh');
 	}
}



/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
?>