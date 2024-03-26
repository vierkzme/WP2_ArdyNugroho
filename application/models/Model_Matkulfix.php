<?php
class Model_latihan1 extends CI_Model {

	public $kd, $nm, $sks1;
    public function jumlah($n1 = null, $n2 = null)
	{
		$this->nilai1 = $n1;
        $this->nilai2 = $n2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
	}
}
