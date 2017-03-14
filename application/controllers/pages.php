<?php

/**
* Created by Akash Gaurav
* practice while learning CodeIgniter
*/


class Pages extends CI_Controller
{
	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('person_model');	
		$this->load->helper('url');		
	}

	public function home(){
		if (!file_exists(APPPATH.'/views/pages/home.php')) {
			show_404();
		}

		$data['title'] = ucfirst("home");

		$this->load->view('templates/header', $data);
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer', $data);
	}


	public function about(){
		if (!file_exists(APPPATH.'/views/pages/about.php')) {
			show_404();
		}

		$data['title'] = ucfirst("about");

		$this->load->view('templates/header', $data);
		$this->load->view('pages/about', $data);
		$this->load->view('templates/footer', $data);
	}


	public function add(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = "Add new";

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('pages/add');
			$this->load->view('templates/footer');

		}
		else
		{
			$this->person_model->add_new();
			$this->load->view('templates/header', $data);
			$this->load->view('pages/home');
			$this->load->view('templates/footer');
		}
	}

	public function view($extra){
		if (!file_exists(APPPATH.'/views/pages/view.php')) {
			show_404();
		}
		$data['title'] = ucfirst("view");
		
		if($extra==='initial')
		$data['persons'] = $this->person_model->get_person();

		elseif ($extra==='name' || $extra==='date_joined')
		$data['persons'] = $this->person_model->get_person('', $extra);

		


		$this->load->view('templates/header', $data);
		$this->load->view('pages/view', $data);
		$this->load->view('templates/footer', $data);
	}
}


?>