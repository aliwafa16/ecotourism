<?php
class Kuliner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page'] = $this->uri->segment(1);
        $data['headline'] = 'Manajemen Kuliner';
        $data['table_name'] = 'Tabel Manajemen Kuliner';
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kuliner/index', $data);
        $this->load->view('templates/footer');
    }
}
