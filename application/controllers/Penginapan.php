<?php
class Penginapan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page'] = $this->uri->segment(1);
        $data['headline'] = 'Manajemen Penginapan';
        $data['table_name'] = 'Tabel Manajemen Penginapan';
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('penginapan/index', $data);
        $this->load->view('templates/footer');
    }
}
