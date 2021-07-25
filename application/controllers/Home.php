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
            // kirim email
            $this->_sendEmail();
            $this->_sendEmailToMe();

            if ($this->_sendEmail() == false) {
                $error =  'Email gagal dikirim, mohon ulangi kembali';

                $this->session->set_flashdata('gagal', $error);
                echo 'gagal';
            } else {

                $data    =
                    [
                        'email'    => $email,
                    ];

                $query  = $this->Sign_up_model->insert('sign_up', $data);

                json_encode($query);
            }
        }
    }

    private function _sendEmail()
    {
        // konfigurasi untuk library email CI
        $config = [
            'protocol'          => 'smtp',
            'smtp_host'         => 'ssl://smtp.googlemail.com',
            'smtp_user'         => 'suryadi.sender@gmail.com',
            'smtp_pass'         => 'mahasiwa',
            'smtp_port'         => 465,
            'mailtype'          => 'html',
            'charset'           => 'utf-8',
            'newline'           => "\r\n",
            'starttls'          => TRUE,
            '_smtp_auth'        => TRUE,
            'send_multipart'    => FALSE,
            'wordwrap'          => TRUE
        ];
        // load library email
        $this->load->library('email', $config);
        // email pengirimnya
        $this->email->from('suryadi.sender@gmail.com', 'Suryadi');
        // email penerima atau email yg digunakan untuk registrasi
        $this->email->to($this->input->post('input'));
        $this->email->subject('Ucapan terima kasih');
        $this->email->message('Terima kasih sudah berkunjung ke halaman website kami');


        // jika email terkirim
        if ($this->email->send()) {
            // mengembalikan jika nilainya benar / email terkirim
            return true;
        } else {
            // email tidak terkirim
            // menghentikan program dan menampilkan pesan kesalahan jika email tidak terkirim
            return false;
        }
    }

    private function _sendEmailToMe()
    {
        // konfigurasi untuk library email CI
        $config = [
            'protocol'      => 'smtp',
            'smtp_host'     => 'ssl://smtp.googlemail.com',
            'smtp_user'     => 'suryadi.sender@gmail.com',
            'smtp_pass'     => 'mahasiwa',
            'smtp_port'     => 465,
            'mailtype'      => 'html',
            'charset'       => 'utf-8',
            'newline'       => "\r\n"
        ];
        // load library email
        $this->load->library('email', $config);
        // email pengirimnya
        $this->email->from('suryadi.sender@gmail.com', 'Suryadi');
        // email penerima atau email yg digunakan untuk registrasi
        $this->email->to('Suryadi_fb@yahoo.com');
        $this->email->subject('Pesanan Baru');
        $this->email->message('Email : ' . $this->input->post('input'));

        // jika email terkirim
        if ($this->email->send()) {
            // mengembalikan jika nilainya benar
            return true;
        } else {
            // menghentikan program dan menampilkan pesan kesalahan jika email tidak terkirim
            return false;
        }
    }
}
