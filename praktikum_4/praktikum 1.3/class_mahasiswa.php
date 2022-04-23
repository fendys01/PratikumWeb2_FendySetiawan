<?php

class Mahasiswa
{
    var $nim;
    var $nama;
    var $thn_angkatan;
    var $prodi;
    var $ipk;

    public function __construct($nim, $nama, $thn_angkatan, $prodi, $ipk)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->thn_angkatan = $thn_angkatan;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    public function predikat()
    {
        if ($this->ipk < 2.0) {
            return "Cukup";
        } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) {
            return "Baik";
        } elseif ($this->ipk >= 3.0 && $this->ipk < 3.75) {
            return "Sangat Baik";
        } elseif ($this->ipk >= 3.75 && $this->ipk <= 4) {
            return "Cum Laude";
        }
    }
}
