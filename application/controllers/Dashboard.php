<?php
class Dashboard extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        if($this->session->userdata('role_id')==1){
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('dashboard/index');
            $this->load->view('templates/footer');
        }else if($this->session->userdata('role_id')==2){

            if($this->session->userdata('wisata')['kategori_pariwisata_id']==35){
                $data['nama_wisata'] = $this->session->userdata('wisata')['nama_wisata'];
                $data['deskripsi_wisata'] = $this->session->userdata('wisata')['deskripsi_wisata'];
            }else if($this->session->userdata('wisata')['kategori_pariwisata_id']==36){
                $data['nama_wisata'] = $this->session->userdata('wisata')['nama_kuliner'];
                $data['deskripsi_wisata'] = $this->session->userdata('wisata')['deskripsi_kuliner'];
            }else if($this->session->userdata('wisata')['kategori_pariwisata_id']==38){
                $data['nama_wisata'] = $this->session->userdata('wisata')['nama_penginapan'];
                $data['deskripsi_wisata'] = $this->session->userdata('wisata')['deskripsi_penginapan'];
            }else if($this->session->userdata('wisata')['kategori_pariwisata_id']==39){
                $data['nama_wisata'] = $this->session->userdata('wisata')['nama_oleh_oleh'];
                $data['deskripsi_wisata'] = $this->session->userdata('wisata')['deskripsi_oleh_oleh'];
            }


            $data['page'] = $this->uri->segment(1);
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('dashboard/wisata_dashboard', $data);
            $this->load->view('templates/footer');
        }
    }

}