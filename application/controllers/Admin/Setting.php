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
        $this->load->model("setting_model");
    }

    public function index()
    {
        redirect(base_url("Admin/Setting/Site"));
    }

    public function site()
    {
        $settings = $this->setting_model->getById(1);
        array_push($this->viewFolder, "Site Ayarları");
        $viewData = [
            "viewFolder" => $this->viewFolder,
            "setting" => $settings[0],
        ];
        $this->load->view("admin/setting/site_setting", $viewData);
    }
    public function updateSite()
    {
        $update = $this->setting_model->update(
            1,
            array(
                "site_title"         => $this->input->post("site_title"),
                "masthead_title"         => $this->input->post("masthead_title"),
                "masthead_description"         => $this->input->post("masthead_description"),
                "post_title"   => $this->input->post("post_title"),
                "about_title"         => $this->input->post("about_title"),
                "about_description"         => $this->input->post("about_description"),
                "discord_title"         => $this->input->post("discord_title"),
                "discord_description"   => $this->input->post("discord_description"),
                "discord_url"         => $this->input->post("discord_url"),
                "contact_title"         => $this->input->post("contact_title"),
                "instagram"         => $this->input->post("instagram"),
                "github"   => $this->input->post("github"),
                "tiktok"         => $this->input->post("tiktok"),

            )
        );
        if ($update) {
            redirect(base_url("Admin/Setting/Site?status=true"));
        } else {
            redirect(base_url("Admin/Setting/Site?status=false"));
        }
    }
}
