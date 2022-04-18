<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Splash extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('splash');
        $this->output->set_header('refresh:6; url=' . base_url("socialdev"));
    }
    public function socialdev()
    {
        $this->load->view('socialdev');
    }
}