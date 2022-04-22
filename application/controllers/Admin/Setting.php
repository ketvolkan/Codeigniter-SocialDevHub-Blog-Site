<?php

class Setting extends CI_Controller
{
    public $viewFolder = array();
    public function __construct()
    {
        parent::__construct();
        array_push($this->viewFolder, "Ayarlar");
        if ($this->session->userdata("userid") == null) {
            redirect(base_url("Admin/Login"));
        }
    }

    public function index()
    {
        redirect(base_url("Admin/Setting/Panel"));
    }
    public function panel()
    {
        array_push($this->viewFolder, "Panel Ayarları");
        $viewData = [
            "viewFolder" => $this->viewFolder,
        ];
        $this->load->view("admin/setting/panel_setting", $viewData);
    }
    public function site()
    {
        array_push($this->viewFolder, "Site Ayarları");
        $viewData = [
            "viewFolder" => $this->viewFolder,
        ];
        $this->load->view("admin/setting/site_setting", $viewData);
    }
}
