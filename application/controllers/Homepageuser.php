<?php
class  Homepageuser extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->database();
		$this->load->model('user_model');
	}
	public function index()
	{
		//echo 12;
		
		
		if ($this->input->get('log')==true){
			//$this->cu
			redirect('Login');
			//$this->load->view('Login');
		}
		else if ($this->input->get('sign')==true){
			redirect('Signup');
		}
		else if ($this->input->get('hotel')==true){
			redirect('Hotellist');
		}
		else if ($this->input->get('book')==true){
			redirect('Login');
		}
		else $this->load->view('Homepageuser');
	}
	
	
}