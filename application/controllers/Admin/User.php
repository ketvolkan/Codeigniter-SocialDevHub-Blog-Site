<?php

class User extends CI_Controller
{
    public $viewFolder = array();
    public function __construct()
    {
        parent::__construct();
        array_push($this->viewFolder, "Kullanıcı İşlemleri");
    }
    public function index()
    {
        array_push($this->viewFolder, "Tüm Kullanıcılar");
        $viewData = [
            "viewFolder" => $this->viewFolder,
        ];
        $this->load->view("admin/user/list_user", $viewData);
    }
    public function lists()
    {
        array_push($this->viewFolder, "Tüm Kullanıcılar");
        $viewData = [
            "viewFolder" => $this->viewFolder,
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
    public function delete()
    {
        array_push($this->viewFolder, "Kullanıcı Sil");
        $viewData = [
            "viewFolder" => $this->viewFolder,
        ];
        $this->load->view("admin/user/delete_user", $viewData);
    }

    public function update()
    {
        array_push($this->viewFolder, "Kullanıcı Düzenle");
        $viewData = [
            "viewFolder" => $this->viewFolder,
        ];
        $this->load->view("admin/user/update_user", $viewData);
    }
}
