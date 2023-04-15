<?php

class MobilSUV extends Mobil implements InfoMobil {   //child class 
    public $jenisMobil;

    public function __construct($nama = "nama", $warna = "warna", $harga = 0, $jenisMobil = "jenis"){

        parent::__construct($nama, $warna, $harga);
        $this->jenisMobil = $jenisMobil;
    }

    public function getInfo(){
        
        $str = "{$this->nama} | warna {$this->warna} (Rp.{$this->harga})";
        return $str;
    }

    public function getInfoMobil() {
        $str = $this->getInfo() . " yang tidak memiliki sistem turbo";
        return $str;
    }
}