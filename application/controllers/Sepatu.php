<?php

class Sepatu extends CI_Controller {
    public function index() {
        $this->load->view('view-form-sepatu');
    }

    public function cetak() {
        // Load model
        $this->load->model('Model_Sepatu');
        
        // Validasi form
        $this->form_validation->set_rules('namo', 'Nama', 'required|min_length[2]', [
            'required' => 'Nama Harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);
        $this->form_validation->set_rules('nohp', 'Nomer HP', 'required|numeric|min_length[12]', [
            'required' => 'Nomer HP Harus diisi',
            'min_length' => 'Nomer harus angka'
        ]);
        $this->form_validation->set_rules('merk', 'Merk Sepatu', 'required', [
            'required' => 'Merk Sepatu Harus diisi'
        ]);
        $this->form_validation->set_rules('ukuran', 'Ukuran Sepatu', 'required', [
            'required' => 'Ukuran Sepatu Harus diisi'
        ]);

        // Jalankan validasi form
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-sepatu');
        } else {
            // Ambil harga dari model
            $harga = $this->Model_Sepatu->validateHarga();

            $data = [
                'namo' => $this->input->post('namo'),
                'nohp' => $this->input->post('nohp'),
                'merk' => $this->input->post('merk'),
                'harga' => $harga,
                'ukuran' => $this->input->post('ukuran')
            ];
    
            $this->load->view('view-data-sepatu', $data);
        }
    }
}
