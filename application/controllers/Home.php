<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Sign_up_model');
    }

    public function index()
    {
        $data['judul']    = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

    public function sign_up()
    {
        $email    = htmlspecialchars($this->input->post('input', true));

        $this->form_validation->set_rules('input', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
            $error = [
                'email'             => (form_error('input', '<p>', '</p>')),
            ];
            echo json_encode($error);
        } else {
            //berhasil
            $data    =
                [
                    'email'    => $email,
                ];

            $query  = $this->Sign_up_model->insert('sign_up', $data);

            json_encode($query);
        }
    }
}
