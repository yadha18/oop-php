<?php

class CetakInfoMobil {
    public $daftarMobil = [];

    public function tambahMobil(Mobil $mobil) {
        $this->daftarMobil[] = $mobil;
    }

    public function cetak() {
        $str = "DAFTAR MOBIL : <br>";

        foreach ($this->daftarMobil as $k) {
            $str .= "- {$k->getInfoMobil()}<br>"; 
        }
        return $str;
    }
    
}