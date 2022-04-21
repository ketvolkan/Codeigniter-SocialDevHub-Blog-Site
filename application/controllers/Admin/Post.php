<?php

class Post extends CI_Controller
{
    public $viewFolder = array();
    public function __construct()
    {
        parent::__construct();
        $this->load->model("post_model");
        $this->load->model("user_model");
        array_push($this->viewFolder, "Gönderi İşlemleri");
    }

    public function index()
    {
        redirect(base_url("Admin/Post/Lists"));
    }
    public function lists()
    {
        $posts = $this->post_model->getAll();
        $users = $this->user_model->getAll();

        array_push($this->viewFolder, "Tüm Gönderiler");
        $viewData = [
            "viewFolder" => $this->viewFolder,
            "posts" => $posts,
            "users" => $users
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
        $this->post_model->delete($this->input->get("id"));
        redirect(base_url("Admin/Post/Lists"));
    }

    public function update()
    {
        array_push($this->viewFolder, "Gönderi Güncelle");
        $post = $this->post_model->getById($this->input->get("id"));
        $viewData = [
            "viewFolder" => $this->viewFolder,
            "post" => $post[0]
        ];
        $this->load->view("admin/post/update_post", $viewData);
    }
    public function insertPost()
    {
        $insert = $this->post_model->insert(
            array(
                "title"         => $this->input->post("title"),
                "description"   => $this->input->post("description"),
                //TODO fotoğraf yükleme düzenlenicek
                "image"           => $this->input->post("title"),
                "createdAt"     => date("Y-m-d H:i:s")
            )
        );
        if ($insert) {
            redirect(base_url("Admin/Post/Add?status=true"));
        } else {
            redirect(base_url("Admin/Post/Add?status=false"));
        }
    }
    public function updatePost()
    {
        $update = $this->post_model->update($this->input->post("id"), array(
            "title"         => $this->input->post("title"),
            "description"   => $this->input->post("description"),
        ));
        if ($update) {
            redirect(base_url("Admin/Post/Update?id=" . $this->input->post('id') . "&status=true"));
        } else {
            redirect(base_url("Admin/Post/Update?id=" . $this->input->post('id') . "&status=false"));
        }
    }
    public function image_upload()
    {
    }
}
