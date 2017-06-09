<?php
class  Homepageadmin extends CI_Controller{
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
		
		
		if ($this->input->get('history')==true){
			$query=$this->user_model->history();
			$var='<table border="1" style="width:100%"><tr><th>Name</th><th>Room Type</th><th>Room No</th><th>Check-in</th><th>Check-out</th></tr>';
			foreach ($query->result() as $row)
			{
				$var=$var."<tr><td>".$row->username."</td><td>".$row->room."</td><td>".$row->roomno."</td><td>".$row->sDate."</td><td>".$row->eDate."</td></tr>";
			}
			$var=$var."</table>";
			$this->session->set_flashdata('item', $var);
			
			redirect('History');
		}
		else if ($this->input->get('admin')==true){
			redirect('Admin');
		}
		else $this->load->view('Homepageadmin');
	}
	
	
}