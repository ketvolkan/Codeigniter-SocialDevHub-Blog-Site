<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
    }

    public function index()
    {

        $this->load->view("admin/login/login");
    }
    public function checkUser()
    {
        $user = $this->user_model->getByEmailAndPassword($this->input->post("email"), $this->input->post("password"));
        if ($user[0] != null) {
            $this->session->set_userdata("userid", $user[0]->id);
            $this->session->set_userdata("username", $user[0]->name);
            $this->session->set_userdata("usersurname", $user[0]->surname);
            $this->session->set_userdata("userimage", $user[0]->image_url);
            $this->session->set_userdata("useremail", $user[0]->email);
            $this->session->set_userdata("userpassword", $user[0]->password);


            redirect(base_url("Admin/Panel"));
        } else {
            redirect(base_url("Admin/Login?hata=ok"));
        }
    }
    public function LogOut()
    {
        $this->session->sess_destroy();
        redirect(base_url("Admin/Login"));
    }
}
