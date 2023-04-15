<?php

Abstract class Mobil{ //parent class
    protected $nama, $warna, $harga, $diskon = 0;

    public function __construct($nama = "nama", $warna = "warna", $harga = 0, $diskon = 0){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->harga = $harga;
        $this->diskon = $diskon;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }

    public function setNama($nama){ //mengubah value nama
        $this->nama = $nama;
    }

    public function getNama(){ //mendapatkan value nama
        return $this->nama;
    }

    public function setWarna($warna){
        $this->warna = $warna;
    }

    public function getWarna(){
        return $this->warna;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    abstract public function getInfo();
}