<?php 


class Login extends CI_Controller{

    public function index()
    {
        $this->load->view("layouts/login");
    }

    public function access(){

		

		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');


		if ($this->form_validation->run()==FALSE) 
		{
			$data = array('errors' => validation_errors());

			$this->session->set_flashdata($data);
			redirect('Login');	
		}
		else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$user_id = $this->users_model->login_user($username,$password);


			if ($user_id) {
				$user_data = array(

					'user_id' => $user_id,
					'username' => $username,
					'password' => $password,
					'logged_in' => true


				);
				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('login_success','anda berhasil login');
				redirect('Dashboard');
			}
			else {
				$this->session->set_flashdata('login_failed','maaf username dan password anda salah');
				redirect('Login/index');
			}




			}

	}

	public function logout()
	{

		$this->session->sess_destroy();
		redirect('Login');
	}

}

?>