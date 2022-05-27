<?php 

class Auth extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('auth/index');
    }

    public function verify()
    {
        $data = $this->input->post();
        
        $this->session->set_userdata($data);

        $status = [];

        $status = [
            'id_user' => $this->session->userdata('id_pengguna'),
            'id_role' => $this->session->userdata('role_id'),
            'is_logged' => true,
        ];

        if($data['role_id']==2){
            if($data['wisata']['kategori_pariwisata_id']==35){
                $status['id_wisata'] =  $this->session->userdata('wisata')['id_wisata'];
            }else if($data['wisata']['kategori_pariwisata_id']==36){
                $status['id_wisata'] =  $this->session->userdata('wisata')['id_kuliner'];
            }else if($data['wisata']['kategori_pariwisata_id']==38){
                $status['id_wisata'] =  $this->session->userdata('wisata')['id_penginapan'];
            }else if($data['wisata']['kategori_pariwisata_id']==39){
                $status['id_wisata'] =  $this->session->userdata('wisata')['id_oleh_oleh'];
            }
        }

        echo json_encode($status);
    }

    public function registrasi()
    {
        $this->load->view('registrasi/index');
    }

    public function aktivasi()
    {
        $this->load->view('aktivasi/index');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }



}