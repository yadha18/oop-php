<?php 

interface InfoMobil{
    
    public function getInfoMobil();
}

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

class CetakInfoMobil {
    public $daftarMobil = [];

    public function tambahMobil(Mobil $mobil) {
        $this->daftarMobil[] = $mobil;
    }

    public function cetak() {
        $str = "DAFTAR MOBIL : \n";

        foreach ($this->daftarMobil as $k) {
            $str .= "- {$k->getInfoMobil()}\n"; 
        }
        return $str;
    }
    
}

$mobil1 = new MobilSport("Ferrari", "Merah", 500000);
$mobil2 = new MobilSUV("Avanza", "Hitam", 150000);

$cetakMobil = new CetakInfoMobil();
$cetakMobil->tambahMobil($mobil1);
$cetakMobil->tambahMobil($mobil2);
echo $cetakMobil->cetak();

?>