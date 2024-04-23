<?php

class Mahasiswa extends CI_Controller {
    public function index() {
        $this->load->view('view-form-mahasiswa');
    }

    public function cetak() {
        $this->form_validation->set_rules('nim', 'Nomor Induk Mahasiswa', 'required|numeric|min_length[8]', [
            'required' => 'Nomor Induk Mahasiswa Harus diisi',
            'min_length' => 'NIM harus angka'
        ]);

        $this->form_validation->set_rules('name', 'Nama Mahasiswa', 'required|min_length[2]', [
            'required' => 'Nama Mahasiswa Harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);
        $this->form_validation->set_rules('tanggal', 'Nama Mahasiswa', 'required', [
            'required' => 'Tanggal Lahir Harus diisi'
        ]);

        $this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required|min_length[2]', [
            'required' => 'Tempat Lahir Harus diisi',
            'min_length' => 'Tempat terlalu pendek'
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat Mahasiswa', 'required|min_length[10]', [
            'required' => 'Alamat Mahasiswa Harus diisi',
            'min_length' => 'Alamat terlalu pendek'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-mahasiswa');
        } else {
            $data = [
                'nim' => $this->input->post('nim'),
                'name' => $this->input->post('name'),
                'tanggal' => $this->input->post('tanggal'),
                'tempat' => $this->input->post('tempat'),
                'alamat' => $this->input->post('alamat')
            ];

            $this->load->view('view-data-mahasiswa', $data);
        }
    }
}