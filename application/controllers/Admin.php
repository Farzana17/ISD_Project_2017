<?php
class  Admin extends CI_Controller{
	
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
		if ($this->input->get('submit1')==true)
		{
			
			$this->user_model->add_room($this->input->get('choice'),$this->input->get('input1'),$this->input->get('input2'),$this->input->get('date1'),$this->input->get('date2'));
			$data = array(
						
						'heading' => 'Admin',
						//'message' => 'My Message'
				);
			$this->load->view('Sucessmsgadmin',$data);
			
		}
		else $this->load->view('Admin');
		//$this->check();
		
	}
	function check_validity()
	{
		
		$data['message'] = $this->input->post('message');
		$var=$this->input->post('message1');
		$date1 = new DateTime($var);
		$date2 = new DateTime($data['message']);
		if($var==''||$data['message']=='')echo '';
		else if($date1>$date2) echo '    Invaild date';
		else echo '';
		
	}
	
}