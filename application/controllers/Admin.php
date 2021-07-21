<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['judul']    = 'Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }

    // data table

    function get_data_user()
    {
        $list = $this->Admin_model->get_datatables();

        $data = array();
        $no = $_POST['start'];

        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->judul_artikel;
            $row[] = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Isi Artikel</button>';
            $row[] = '<img src="' . base_url('assets/upload_images/') . $field->thumbnail_artikel . '" style="height:70px;width:70px;">';
            $row[] = $field->tag_artikel;
            $row[] = $field->kategori_artikel;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Admin_model->count_all(),
            "recordsFiltered" => $this->Admin_model->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
    // akhir datatable



    public function insert()
    {
        $judul_artikel          = htmlspecialchars($this->input->post('judul_artikel', true));
        $isi_artikel            = htmlspecialchars($this->input->post('isi_artikel', true));
        $kategori_artikel       = htmlspecialchars($this->input->post('kategori_artikel', true));
        $tag_artikel            = htmlspecialchars($this->input->post('tag_artikel', true));
        $thumbnail_artikel      = $_FILES['thumbnail_artikel']['name'];

        $this->form_validation->set_rules('judul_artikel', 'Judul Artikel', 'required|trim');
        $this->form_validation->set_rules('isi_artikel', 'isi Artikel', 'required|trim');
        $this->form_validation->set_rules('kategori_artikel', 'Kategori Artikel', 'required|trim');
        $this->form_validation->set_rules('tag_artikel', 'Tag Artikel', 'required|trim');

        if (empty($_FILES['thumbnail_artikel']['name'])) {
            $this->form_validation->set_rules('thumbnail_artikel', 'Thumbnail Artikel', 'required');
        }

        if ($this->form_validation->run() == false) {
            $error = [
                'judul_artikel'       => (form_error('judul_artikel', '<p>', '</p>')),
                'isi_artikel'         => (form_error('isi_artikel', '<p>', '</p>')),
                'kategori_artikel'    => (form_error('kategori_artikel', '<p>', '</p>')),
                'tag_artikel'         => (form_error('tag_artikel', '<p>', '</p>')),
                'thumbnail_artikel'   => (form_error('thumbnail_artikel', '<p>', '</p>')),
            ];
            echo json_encode($error);
            die;
        } else {
            // upload file
            $config['upload_path']      = './assets/upload_images';
            $config['allowed_types']    = 'jpg|png|jpeg';
            $config['max_size']         = 2000;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('thumbnail_artikel')) {
                // gagal upload
                echo $this->upload->display_errors();
            } else {
                // berhasil upload
                $data                 =   [
                    'judul_artikel'     => $judul_artikel,
                    'isi_artikel'       => $isi_artikel,
                    'kategori_artikel'  => $kategori_artikel,
                    'tag_artikel'       => $tag_artikel,
                    'thumbnail_artikel' => $thumbnail_artikel
                ];
                $this->session->set_flashdata('sukses', 'Jenis layanan berhasil ditambahkan');
                $data = $this->Admin_model->insert($data);
                echo json_encode($data);
            }
        }
    }
}
//     // crud menggunakan ajax
//     public function get_ajax()
//     {
//         $data =  $this->Admin_model->getAll();
//         echo json_encode($data);
//     }

//     public function insert_ajax()
//     {
//         $kode       = $this->input->post('kode');
//         $nama       = $this->input->post('nama');
//         $kota       = $this->input->post('kota');
//         $alamat     = $this->input->post('alamat');

//         $this->form_validation->set_rules('kode', 'Kode Customer', 'required|trim|is_unique[customer.kode_kustomer]');
//         $this->form_validation->set_rules('nama', 'Nama Customer', 'required|trim');
//         $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
//         $this->form_validation->set_rules('kota', 'Kota', 'required|trim');

//         $data['judul']      = 'Tambah Data';
//         if ($this->form_validation->run() == false) {
//             $data = array('error_message' => validation_errors());
//         } else {
//             $data                 =   [
//                 'kode_kustomer'   => $kode,
//                 'nama_customer'   => $nama,
//                 'kota'            => $kota,
//                 'alamat'          => $alamat
//             ];
//             $data = $this->Admin_model->insert($data);
//         }
//         echo json_encode($data);
//     }

//     public function get_id()
//     {
//         $id = $this->input->post('id');

//         $query = $this->Admin_model->getRow($id);

//         echo json_encode($query);
//     }

//     public function edit_ajax()
//     {
//         $id = $this->input->post('id');
//         $kode = $this->input->post('kode');
//         $nama = $this->input->post('nama');
//         $kota = $this->input->post('kota');
//         $alamat = $this->input->post('alamat');

//         $row = $this->Admin_model->getRow($id);
//         $kode_kustomer = $row['kode_kustomer'];

//         if ($kode == $kode_kustomer) {
//             $this->form_validation->set_rules('kode', 'Kode Customer', 'required|trim');
//         } else {
//             $this->form_validation->set_rules('kode', 'Kode Customer', 'required|trim|is_unique[customer.kode_kustomer]');
//         }

//         $this->form_validation->set_rules('nama', 'Nama Customer', 'required|trim');
//         $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
//         $this->form_validation->set_rules('kota', 'Kota', 'required|trim');

//         $data['judul']      = 'Edit Data';
//         if ($this->form_validation->run() == false) {
//             $data = array('error_message' => validation_errors());
//         } else {
//             $data                 =   [
//                 'kode_kustomer'   => $kode,
//                 'nama_customer'   => $nama,
//                 'kota'            => $kota,
//                 'alamat'          => $alamat
//             ];
//             $data = $this->Admin_model->update($data);
//         }
//         echo json_encode($data);
//     }

//     public function delete_ajax()
//     {
//         $id = $this->input->post('id');

//         $query = $this->Admin_model->delete($id);

//         echo json_encode($query);
//     }
// }
