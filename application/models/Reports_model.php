<?php
class Reports_model extends CI_Model {

	public function __construct()
	{
			$this->load->database();
	}

	public function get_reports($slug = FALSE)
	{
		if ($slug === false) {
			$query = $this->db->get('reports');
			return $query->result_array();
		}

		$query = $this->db->get_where('reports', array('slug' => $slug));
		return $query->row_array();
	}
	
	public function set_reports()
	{
		$this->load->helper('url');

		$slug = url_title($this->input->post('title'), 'dash', true);

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text')
		);

		return $this->db->insert('reports', $data);
	}

}

