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

        $file_name = pathinfo($_FILES["file"]["name"], PATHINFO_FILENAME) . "." . pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
        $uploaded_file = "";
        $config["allowed_types"] = "jpg|jpeg|png";
        $config["upload_path"]   = base_url("assets/img/post-image/");
        $config["file_name"] = $file_name;

        $this->load->library("upload", $config);
        $upload = $this->upload->do_upload("file");
        echo ($upload);
        if ($upload) {
            $uploaded_file = $this->upload->data("file_name");
            $insert = $this->post_model->insert(
                array(
                    "title"         => $this->input->post("title"),
                    "description"   => $this->input->post("description"),
                    "image"           => $this->input->post("title"),
                    "createdAt"     => date("Y-m-d H:i:s")
                )
            );
            if ($insert) {
                array_push($this->viewFolder, "Gönderi Sil");
                $viewData = [
                    "viewFolder" => $this->viewFolder,
                ];
                $this->load->view("admin/post/add_post?add=true", $viewData);
            } else {

                array_push($this->viewFolder, "Gönderi Sil");
                $viewData = [
                    "viewFolder" => $this->viewFolder,
                ];
                $this->load->view("admin/post/add_post?add=false", $viewData);
            }
        } else {
            echo "islem basarisiz";
        }
    }
    public function deletePost()
    {
    }
    public function updatePost()
    {
    }
    public function image_upload()
    {
    }
}
