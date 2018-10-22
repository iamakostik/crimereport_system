<?php
class Signup_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
		
	}


	public function set_data()
	{

		$this->load->helper('url');
		
		$data = array(
			'matnumber' => $this->input->post('matnumber'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'rpassword' => $this->input->post('rpassword'),
			'phone' => $this->input->post('phone'),
			'location' => $this->input->post('location')
		);

		return $this->db->insert('users', $data);
	}
}
