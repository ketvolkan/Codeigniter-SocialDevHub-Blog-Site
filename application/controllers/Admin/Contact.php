<?php

class Contact extends CI_Controller
{
    public $viewFolder = array();
    public function __construct()
    {
        parent::__construct();
        array_push($this->viewFolder, "Mesajlar");
        $this->load->model("contact_model");
    }

    public function index()
    {
        array_push($this->viewFolder, "Tüm Mesajlar");
        $messages = $this->contact_model->getAll();
        $viewData = [
            "viewFolder" => $this->viewFolder,
            "messages" => $messages
        ];
        $this->load->view("admin/message/list_message", $viewData);
    }

    public function delete()
    {

        $this->contact_model->delete($this->input->get("id"));
        redirect(base_url("Admin/Contact/"));
    }
}
