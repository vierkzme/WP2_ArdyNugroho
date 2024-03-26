

<?php
class Latihan1 extends CI_Controller {
	public function index()
	{
		$this->load->view('view-form-matakuliah');
	}

    public function penjumlahan($n1, $n2) 
    {
        $this->load->model('Model_latihan1');

        $data['kode'] = $kd;
        $data['nama'] = $nm;
        $data['sks'] = $sks1;
        $data['hasil'] = $this->Model_Matkul->jumlah($n1, $n2);

        $this->load->view('view-latihan', $data);
    }
}
