<?php
class  Bookingform extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->database();
		$this->load->model('user_model');
		$this->load->library('session');
		$this->site_data = array('name' => 'value');
	}
	public function index() {
		
		
		
		if($this->input->get('submit1')==true)
		{
			
			$tel = $this->input->get("tel");
			$room = $this->input->get("choice");
			$roomNo=$this->input->get("room_number");
			$date1=$this->input->get("date1");
			$date2=$this->input->get("date2");
			$query=$this->user_model->update($date1,$date2,$room,$roomNo,$tel);
			
			
			if($query<intval($roomNo)) 
			{
				//echo $this->input->get("help");
				$var="<span style='font-size:100%'>Sorry only ".$query." rooms are available from ".$date1." to ".$date2 .".</span>";
				$data = array(
						'title' => $var,
						'heading' => $this->input->get("help"),
						//'message' => 'My Message'
				);
				//$this->session->set_flashdata('msg1', ');
				//redirect('wronginfo/'.$this->input->get("help"));
				$this->load->view('wronginform',$data);
			}
			else {
				
				$data = array(
						
						'heading' => $this->input->get("help"),
						//'message' => 'My Message'
				);
				$this->user_model->update_now($date1,$date2,$room,$roomNo,$tel,$this->input->get("help"));
				//$this->session->flashdata('item','Baal');
				//redirect('Sucessmsg',$data);
				$this->load->view('Sucessmsg',$data);
			}
			
			
			
		}
		//else $this->load->view('Homepage');
		else $this->load->view('Bookingform');
	}
	public function result($a,$b)
	{
		
		$uresult = $this->user_model->room($a, $b);
		$uresult2=$this->user_model->cost($a, $b);
		$this->session->set_flashdata('msg4', $uresult2);
		$this->session->set_flashdata('msg3', $uresult);//redirect('login/index');
	}
	public function get_cost()
	{
		$data['message'] = $this->input->post('message');
		$query=$this->user_model->cost( $data['message']);
		$temp=0;
		foreach ($query->result() as $row)
		{
			$temp= $row->cost;
			
		}
		echo $temp;
		
	}
	public function get_room()
	{
		$data['message'] = $this->input->post('message');
		$var = $this->input->post('msg');
		$query=$this->user_model->room( $data['message'],$var);
		$temp=0;
		foreach ($query->result() as $row)
		{
			$temp= $row->freeroom;
			
		}
		echo $temp;
		
	}
	function check()
	{
		
		$data['message'] = $this->input->post('message');
		$date1=date("Y-m-d");
		//$date1 = date ("Y-m-d", strtotime("-1 day", strtotime($date1)));
		$date1 = new DateTime($date1);
		$date2 = new DateTime($data['message']);
		
		if($date1>$date2) echo '   Invaild date';
		else echo '';
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
	
	function cal_cost_form()
	{
		
		$var=$this->input->post('message');
		$var1=$this->input->post('message1');
		$var2=$this->input->post('message2');
		$var3=$this->input->post('message3');
		$date1 = new DateTime($var);
		$date2 = new DateTime($var1);
		$var4=$var1;
		
		if($var=='') echo 'Please give check-in date';
		else if ($var1='')echo 'Please give check-out date';
		else if($date1>$date2)echo 'Please give correct check-in and check-out date';
		else  echo  $this->user_model->cost_calculation_form($var3,$var2,$var,$var4);
		
	}
	
	function go()
	{
		$var=$this->input->post('msg1');
		$data = array(
				'title' => $var,
				
				//'message' => 'My Message'
		);
		$this->session->set_flashdata('item', $var);
		echo $var;
		$this->load->view('Homepage',$data);
	}
	

}