<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct(){


		parent::__construct();
		$dil=$this->session->userdata('dil');
		if(!$dil){
			$dil=$this->session->set_userdata('dil','tr');
		}
		$this->lang->load($dil,$dil);
	}

}