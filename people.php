<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class People extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('peoplemodel');
	}

	public function index()
	{
		$this->load->model('peoplemodel');
		$this->data['names'] = $this->peoplemodel->getPeoples();
		$this->load->view('name_display', $this->data);
	}
	
	public function person() {
		
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			
			$data = $this->peoplemodel->insertperson($username, $email, $password);
			echo json_encode($data);
		}
		
	}
	
	
	
	
}