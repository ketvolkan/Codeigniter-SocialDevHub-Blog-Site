<?php

class User extends CI_Controller
{
    public $viewFolder = array();
    public function __construct()
    {
        parent::__construct();
        array_push($this->viewFolder, "Kullanıcı İşlemleri");
        $this->load->model("user_model");
        if ($this->session->userdata("userid") == null) {
            redirect(base_url("Admin/Login"));
        }
    }
    public function index()
    {
        redirect(base_url("Admin/User/Lists"));
    }
    public function lists()
    {
        array_push($this->viewFolder, "Tüm Kullanıcılar");
        $users = $this->user_model->getAll();
        $viewData = [
            "viewFolder" => $this->viewFolder,
            "users" => $users
        ];
        $this->load->view("admin/user/list_user", $viewData);
    }
    public function add()
    {
        array_push($this->viewFolder, "Kullanıcı Ekle");
        $viewData = [
            "viewFolder" => $this->viewFolder,
        ];
        $this->load->view("admin/user/add_user", $viewData);
    }
    public function update()
    {
        array_push($this->viewFolder, "Bilgilerini Güncelle");
        $user = $this->user_model->getById($this->session->userdata("userid"));
        $viewData = [
            "viewFolder" => $this->viewFolder,
            "user" => $user[0],
        ];
        $this->load->view("admin/user/update_user", $viewData);
    }
    public function delete()
    {
        $this->user_model->delete($this->input->get("id"));
        redirect(base_url("Admin/User/Lists"));
    }
    public function insertUser()
    {
        $insert = $this->user_model->insert(
            array(
                "email"         => $this->input->post("email"),
                "password"         => $this->input->post("password"),
                "name"         => $this->input->post("name"),
                "surname"   => $this->input->post("surname"),
                //TODO fotoğraf yükleme düzenlenicek
                "image_url"           => "",
                "createdAt"     => date("Y-m-d H:i:s")
            )
        );
        if ($insert) {
            redirect(base_url("Admin/User/Add?status=true"));
        } else {
            redirect(base_url("Admin/User/Add?status=false"));
        }
    }
    public function updateUser()
    {
        $insert = $this->user_model->update(
            $this->session->userdata("userid"),
            array(
                "email"         => $this->input->post("email"),
                "password"         => $this->input->post("password"),
                "name"         => $this->input->post("name"),
                "surname"   => $this->input->post("surname"),
            )
        );
        if ($insert) {
            redirect(base_url("Admin/User/Update?status=true"));
        } else {
            redirect(base_url("Admin/User/Update?status=false"));
        }
    }
}
