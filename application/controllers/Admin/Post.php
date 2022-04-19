<?php

class Post extends CI_Controller
{
    public $viewFolder = array();
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Post_model");
        array_push($this->viewFolder, "Gönderi İşlemleri");
    }

    public function index()
    {
        array_push($this->viewFolder, "Tüm Gönderiler");
        $viewData = [
            "viewFolder" => $this->viewFolder,
        ];
        $this->load->view("admin/post/list_post", $viewData);
    }
    public function lists()
    {
        array_push($this->viewFolder, "Tüm Gönderiler");
        $viewData = [
            "viewFolder" => $this->viewFolder,
        ];
        $this->load->view("admin/post/list_post", $viewData);
    }
    public function add()
    {
        array_push($this->viewFolder, "Gönderi Ekle");
        $viewData = [
            "viewFolder" => $this->viewFolder,
        ];
        $this->load->view("admin/post/add_post", $viewData);
    }
    public function delete()
    {
        array_push($this->viewFolder, "Gönderi Sil");
        $viewData = [
            "viewFolder" => $this->viewFolder,
        ];
        $this->load->view("admin/post/delete_post", $viewData);
    }

    public function update()
    {
        array_push($this->viewFolder, "Gönderi Güncelle");
        $viewData = [
            "viewFolder" => $this->viewFolder,
        ];
        $this->load->view("admin/post/update_post", $viewData);
    }
    public function insertPost()
    {
    }
    public function deletePost()
    {
    }
    public function updatePost()
    {
    }
}
