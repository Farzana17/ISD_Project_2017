<?php
class Hotellist extends  CI_Controller{
	public function index()
	{
		echo $this->config->item('foo');
		//$this->load->library('jquery');
		//$this->load->library('javascript');
		//$this->load->view('Hotellist');
		
	}
	public function insertByajax() {
		
		$data['message'] = $this->input->post('message');
		
		echo 123;
	}
}