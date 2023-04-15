<?php

class MobilSport extends Mobil implements InfoMobil {  //child class 
    public $turbo;

    public function __construct($nama = "nama", $warna = "warna", $harga = 0, $turbo = true){

        parent::__construct($nama, $warna, $harga); //mengambil construct parent
        $this->turbo = $turbo;
    }

    public function getInfo(){
        
        $str = "{$this->nama} | warna {$this->warna} (Rp.{$this->harga})";
        return $str;
    }

    public function getInfoMobil() {
        $str = $this->getInfo() . " yang memiliki sistem turbo";//mengambil method getInfoMobil() parent
        return $str;
    }
}