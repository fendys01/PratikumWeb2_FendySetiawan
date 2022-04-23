<?php
class Bmi_pasien
{
    private $nama;
    private $umur;
    private $jenis_kelamin;
    private $berat;
    private $tinggi;
    private $tanggal;

    function __construct($nama, $umur, $jenis_kelamin, $berat, $tinggi, $tanggal)
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->tanggal = $tanggal;
    }

    function getNama()
    {
        return $this->nama;
    }

    function getUmur()
    {
        return $this->umur;
    }

    function getJenisKelamin()
    {
        return $this->jenis_kelamin;
    }

    function getBerat()
    {
        return $this->berat;
    }

    function getTinggi()
    {
        return $this->tinggi;
    }

    function getTgl()
    {
        return $this->tanggal;
    }

    function getBmi()
    {
        $bb = $this->berat;
        $tb = $this->tinggi;

        $a = $tb * 0.01;
        $b = $a * 2;
        $c = $bb / $b;
        $angka = number_format($c, 2);

        return $angka;
    }

    function getStatus($massa)
    {
        if ($massa >= 30.0) {
            $status = "Obesitas";
        } elseif ($massa >= 25.0 && $massa <= 29.0) {
            $status = "Gemuk";
        } elseif ($massa >= 18.5 && $massa <= 24.9) {
            $status = "Normal";
        } elseif ($massa <= 18.4) {
            $status = "Kurus";
        }

        return $status;
    }
}
