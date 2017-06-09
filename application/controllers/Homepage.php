<?php
class  Homepage extends CI_Controller{
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
		$confiq['foo']='bar';
		
		if ($this->input->get('user')==true){
			//$this->cu
			redirect('Homepageuser');
			//$this->load->view('Login');
		}
		else if ($this->input->get('admin')==true){
			redirect('Homepageadmin');
		}
		
		else $this->load->view('Homepage');
	}
	
	
}