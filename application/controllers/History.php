<?php

class  History extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->database();
		$this->load->model('user_model');
	}
	public function index()
	{
		$this->load->view('History');
	}
	
	
}