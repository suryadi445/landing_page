<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');

        if ($this->form_validation->run() == false) {
            $data['judul']    = 'Login';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email          = htmlspecialchars($this->input->post('email', true));
        $password       = htmlspecialchars($this->input->post('password', true));

        $user           = $this->Auth_model->get_row($email)->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // berhasil masuk
                $data = [
                    'id'        => $user['id'],
                    'email'     => $user['email'],
                ];

                $this->session->set_flashdata('sukses', 'Selamat datang ' . $data['email']);
                $this->session->set_userdata('email', $user['email']);
                redirect('admin/index');
            } else {
                // password salah
                $this->session->set_flashdata('gagal', 'Password yang anda masukkan salah');

                redirect('auth/login');
            }
        } else {
            // belum registrasi
            $this->session->set_flashdata('gagal', 'Anda belum terdaftar, mohon registrasi terlebih dahulu..');
            redirect('auth/login');
        }
    }

    public function registrasi()
    {
        $email               = htmlspecialchars($this->input->post('email', true));
        $password            = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[data_admin.username]');
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[6]|matches[password2]',
            [
                'matches'    => 'Password tidak sama',
                'min_length' => 'Password minimal 6 karakter'
            ]
        );
        $this->form_validation->set_rules(
            'password2',
            'Konfirmasi Password',
            'required|trim|min_length[6]|matches[password]',
            [
                'matches'    => 'Password tidak sama',
                'min_length' => 'Password minimal 6 karakter'
            ]
        );

        $data = [
            'username'    => $email,
            'password' => $password,
        ];

        if ($this->form_validation->run() == false) {
            $data['judul']    = 'Registrasi';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('flash', 'Terima kasih. Registrasi berhasil dilakukan, Silakan login');
            $this->Auth_model->insert($data);
            redirect('auth/login');
        }
    }
}
