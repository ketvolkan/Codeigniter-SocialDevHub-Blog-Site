<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Socialdev extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("post_model");
        $this->load->model("setting_model");
    }

    public function index()
    {
        $posts = $this->post_model->getAll();
        $setting = $this->setting_model->getById(1);
        $viewData = [
            "posts" => $posts,
            "setting" => $setting[0],
        ];
        $this->load->view('socialdev', $viewData);
    }
}
