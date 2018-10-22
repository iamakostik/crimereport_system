<?php
class Login extends CI_Controller
{

	public function members(){
		if($this->session->userdata('is_logged_in'))
		{
			$data['title'] = 'Welcome, You can Now Report a crime';
			$this->load->view('templates/navigation2', $data);
			$this->load->view('templates/header', $data);
			$this->load->view('reports/members');
			$this->load->view('templates/footer', $data);
		}else{
			redirect('reports/create');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('reports/login');
	}
	public function login_method()
	{

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$data['title'] = 'Login';

		$this->form_validation->set_rules('email', 'Email', 'required|trim|callback_validate_credentials');
		$this->form_validation->set_rules('password', 'Password', 'required|md5|trim');

		if ($this->form_validation->run()) {
			$data = array(
				'email'=> $this->input->post('email'),
				'is_logged_in' => 1
			);
			$this->session->set_userdata($data);
			redirect('reports/members');
		} else {
			$this->load->view('templates/navigation', $data);
			$this->load->view('templates/header', $data);
			$this->load->view('reports/login', $data);
			$this->load->view('templates/footer', $data);
		}
	}
	public function validate_credentials()
	{
		$this->load->model('login_model');
		if ($this->login_model->get_login()) {
			return true;
		} else {
			$this->form_validation->set_message('validate_credentials', 'Incorrect Email/Password');
			return false;
		}
	}

}

	
