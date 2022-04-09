<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    public function __construct()
    {


        parent::__construct();

        if (empty($this->session->userdata('dil'))) {
            $this->lang->load('turkish', 'turkish');
            $this->session->set_userdata('dil', 'turkish');
        } else {
            $dil = $this->session->userdata('dil');
            $this->lang->load($dil, $dil);
        }

    }

}
