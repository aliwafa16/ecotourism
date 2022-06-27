<?php
class Oleh_Oleh extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page'] = $this->uri->segment(1);
        $data['headline'] = 'Manajemen Oleh-oleh';
        $data['table_name'] = 'Tabel Manajemen Oleh-oleh';
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('oleh_oleh/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['page'] = $this->uri->segment(1);
        $data['headline'] = 'Tambah Oleh-oleh';
        $data['table_name'] = '';
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('oleh_oleh/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['page'] = $this->uri->segment(1);
        $data['headline'] = 'Edit Oleh-oleh';
        $data['table_name'] = '';
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('oleh_oleh/edit', $data);
        $this->load->view('templates/footer');
    }

    public function detail()
    {
        $data['page'] = $this->uri->segment(1);
        $data['headline'] = 'Detail Oleh-oleh';
        $data['table_name'] = '';
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('oleh_oleh/detail', $data);
        $this->load->view('templates/footer');
    }
}
