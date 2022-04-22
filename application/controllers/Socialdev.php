<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Socialdev extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("post_model");
    }

    public function index()
    {
        $posts = $this->post_model->getAll();
        $viewData = [
            "posts" => $posts,
        ];
        $this->load->view('socialdev', $viewData);
    }
}
