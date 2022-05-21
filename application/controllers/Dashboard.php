<?php
class Dashboard extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        if($this->session->userdata('id_role')==1){
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('dashboard/index');
            $this->load->view('templates/footer');
        }else if($this->session->userdata('id_role')==2){
            $data['nama_wisata'] = $this->session->userdata('wisata')['nama_wisata'];
            $data['deskripsi_wisata'] = $this->session->userdata('wisata')['deskripsi'];
            $data['page'] = $this->uri->segment(1);
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('dashboard/wisata_dashboard', $data);
            $this->load->view('templates/footer');
        }
    }

}