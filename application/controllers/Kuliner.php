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

    public function tambah()
    {
        $data['page'] = $this->uri->segment(1);
        $data['headline'] = 'Tambah Kuliner';
        $data['table_name'] = '';
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kuliner/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['page'] = $this->uri->segment(1);
        $data['headline'] = 'Edit Kuliner';
        $data['table_name'] = '';
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kuliner/edit', $data);
        $this->load->view('templates/footer');
    }

    public function detail()
    {
        $data['page'] = $this->uri->segment(1);
        $data['headline'] = 'Detail Kuliner';
        $data['table_name'] = '';
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kuliner/detail', $data);
        $this->load->view('templates/footer');
    }
}
