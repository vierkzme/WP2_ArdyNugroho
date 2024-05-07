<?php

class Model_Sepatu extends CI_Model
{
    public function validateHarga()
    {
        // Ambil merk sepatu dari post data
        $merk = $this->input->post('merk');
        
        // Tentukan harga berdasarkan merk
        $hargaOptions = [
            'Nike' => 375000,
            'Adidas' => 300000,
            'Kickers' => 250000,
            'Eiger' => 275000,
            'Bucheri' => 400000
        ];

        // Cek apakah merk sepatu ada dalam daftar hargaOptions
        if (array_key_exists($merk, $hargaOptions)) {
            return $hargaOptions[$merk];
        } else {
            // Jika merk tidak ditemukan, kembalikan harga default 0 atau sesuai kebutuhan
            return 0;
        }
    }
}
