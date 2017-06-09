<?php
class  Login extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('Help');
		$this->load->database();
		$this->load->model('user_model');
		$this->load->library('session');
	}
	public function index()
	{
		if ($this->input->get('submit')==true)
		{
			
			$username = $this->input->get("user");
			$password = $this->input->get("pass");
			$uresult = $this->user_model->get_user($username, $password);
			if($uresult)  {
				$this->session->set_flashdata('item', $username);
				//Userid($username);
				$this->session->set_flashdata('msg', '');
				redirect('Bookingform','refresh');
			}
			else {$this->session->set_flashdata('msg', '<p style="color:red;font-size:80%">*Wrong User-ID or Password!</p>');redirect('login/index');}
		}
		else $this->load->view('Login');
		//$this->check();
		
	}
	public function check()
	{
		
		
		
		//redirect('login/index');
	}
	
}