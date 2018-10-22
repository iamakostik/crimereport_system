<?php
class Reports extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('reports_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['reports'] = $this->reports_model->get_reports();
		$data['title'] = 'All Reports';

		$this->load->view('templates/navigation', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('reports/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug = NULL)
	{
		$data['reports_item'] = $this->reports_model->get_reports($slug);

		if (empty($data['reports_item'])) {
			show_404();
		}

		$data['title'] = $data['reports_item']['title'];

		$this->load->view('templates/navigation', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('reports/view', $data);
		$this->load->view('templates/footer');
	
	}

	public function about()
	{
		//$data['title'] = $data['reports_item']['title'];
		//$this->load->helper('form');
		$data['title'] = 'ABOUT';

		$this->load->view('templates/navigation', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('pages/about', $data);
		$this->load->view('templates/footer', $data);
	} 


	
	public function create()
	{
		

		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Report A Crime';

		

		if ($this->session->userdata('is_logged_in')) {
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('text', 'Text', 'required');

			if ($this->form_validation->run() === false) {
				$this->load->view('templates/navigation2', $data);
				$this->load->view('templates/header', $data);
				$this->load->view('reports/create');
				$this->load->view('templates/footer');

			} else {
				$this->reports_model->set_reports();
				$this->load->view('reports/success');
				$this->load->view('templates/navigation2', $data);
				$this->load->view('templates/header', $data);
				$this->load->view('reports/create');
				$this->load->view('templates/footer');
			}
		} else {
			$this->load->view('templates/navigation', $data);
			$this->load->view('templates/header', $data);
			$this->load->view('reports/login');
			$this->load->view('templates/footer');
		}
		
		
	}
}

	
