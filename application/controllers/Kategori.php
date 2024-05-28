<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load the model for kategori
        $this->load->model('ModelBuku');
    }

    public function index()
    {
        $data['judul'] = 'Data Kategori';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kategori/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Kategori';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
            'required' => 'Nama kategori tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kategori/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->ModelBuku->simpanKategori([
                'kategori' => $this->input->post('kategori')
            ]);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Kategori berhasil ditambahkan!</div>');
            redirect('kategori');
        }
    }

    public function edit($id)
{
    $data['judul'] = 'Edit Kategori';
    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $data['kategori'] = $this->ModelBuku->kategoriWhere(['id' => $id])->row_array();

    $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
        'required' => 'Nama kategori tidak boleh kosong'
    ]);

    if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kategori/edit', $data);
        $this->load->view('templates/footer');
    } else {
        $this->ModelBuku->updateKategori([
            'kategori' => $this->input->post('kategori')
        ], ['id' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Kategori berhasil diubah!</div>');
        redirect('kategori');
    }
}

    public function hapus($id)
    {
        $this->ModelBuku->hapusKategori(['id' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Kategori berhasil dihapus!</div>');
        redirect('kategori');
    }
}