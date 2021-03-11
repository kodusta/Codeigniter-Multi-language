<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function dildegis($dil){
		$this->session->set_userdata('dil',$dil);
		redirect($_SERVER['HTTP_REFERER']);
	}
}
