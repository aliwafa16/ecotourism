<?php
class Kategori_wisata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page'] = $this->uri->segment(1);
        $data['headline'] = 'Manajemen Kategori Wisata';
        $data['table_name'] = 'Tabel Manajemen Kategori Wisata';
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori_wisata/index', $data);
        $this->load->view('templates/footer');
    }
}
