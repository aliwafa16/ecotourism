<?php
class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        // $this->load->view('role/index', $data);
        $this->load->view('templates/footer');
    }
}
