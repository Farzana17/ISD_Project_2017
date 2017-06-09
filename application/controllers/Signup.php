<?php
class Signup extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->database();
		$this->load->model('user_model');
		//$this->load->helper('');
	}
	
	public function  index()
	{
		
		
		if($this->input->get('submit')==true){
			
			$email=$this->input->get('email');
			$uName=$this->input->get('uName');
			$var=0;
			$temp=0;
			if($email!='') {
				$query=$this->user_model->query('email',$email);
				foreach ($query->result() as $row)
				{
					$temp=$row->email;
				}
				
				if($temp){$this->session->set_flashdata('msg', '<span style="color:red;font-size:80%">this email address is already in use.Please try another.</span>');$var=1;}
			}
			if($uName!='') {
				//echo $var;
				$query=$this->user_model->query('username',$uName);
				foreach ($query->result() as $row)
				{
					$temp=$row->email;
				}
				if($temp){
					
					$var=1;
					$this->session->set_flashdata('msg1', '<span style="color:red;font-size:80%">this name address is not available.Try with another name.</span>');
				}
			}
			if($var==0) {
				$uresult = $this->user_model->add_user($this->input->get('fName'),$this->input->get('lName'),$email,$this->input->get('pwd1'),$this->input->get('uName'));
				$this->session->set_flashdata('item', $uName);
				//Userid($uName);
				redirect('Bookingform','refresh');
				
				
			}
			else {
				
				
				//$referred_from = $this->session->userdata('Signup/index');
				redirect('Signup/index');
				//$this->session->set_userdata('referred_from', current_url());redirect("Signup/index");
			}
			
			
		}
		else $this->load->view('Signup');
		//$this->check();
	}
	public function check()
	{
		
	}
}