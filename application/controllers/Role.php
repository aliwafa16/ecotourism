<?php
class Role extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page'] = $this->uri->segment(1);
        $data['headline'] = 'Manajemen Role';
        $data['table_name'] = 'Tabel Manajemen Role';
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('role/index', $data);
        $this->load->view('templates/footer');
    }
}
