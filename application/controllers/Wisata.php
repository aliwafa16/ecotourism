<?php
class Wisata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page'] = $this->uri->segment(1);
        $data['headline'] = 'Manajemen Wisata';
        $data['table_name'] = 'Tabel Manajemen Wisata';
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('wisata/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail(){
        $data['page'] = $this->uri->segment(1);
        $data['headline'] = 'Detail Wisata';
        $data['table_name'] = '';
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('wisata/detail', $data);
        $this->load->view('templates/footer');
    }

}