<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('signup_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		//$data['title'] = $data['reports_item']['title'];
		//$this->load->helper('form');
		$data['title'] = 'Sign Up';

		$this->form_validation->set_rules('matnumber', 'Matnumber', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|md5|trim');
		$this->form_validation->set_rules('rpassword', 'Rpassword', 'required|md5|trim|matches[password]');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('location', 'Location', 'required');

		if ($this->form_validation->run()) {
			$this->signup_model->set_data();
			$this->load->view('templates/navigation', $data);
			$this->load->view('templates/header', $data);
			echo " Sign Up Successful, Please Login...";
			$this->load->view('reports/login');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/navigation', $data);
			$this->load->view('templates/header', $data);
			$this->load->view('reports/signup', $data);
			

		}
		
	}
}
