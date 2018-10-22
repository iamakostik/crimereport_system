<?php
class Login_model extends CI_Model
{

	public function __construct()
	{
		
		$this->load->database();
	}

	public function get_login()
	{
		
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('password', md5($this->input->post('password')));
		
		$query = $this->db->get('users');
		
		if ($query->num_rows() == 1){
			return true;
		}else{
			return false;
		}

		
	}

}

