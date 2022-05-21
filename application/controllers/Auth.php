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
            'id_user' => $this->session->userdata('id'),
            'id_role' => $this->session->userdata('id_role'),
            'is_logged' => true,
        ];

        if($data['id_role']==2){
            $status['id_wisata'] =  $this->session->userdata('wisata')['id'];
        }

        echo json_encode($status);
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

}