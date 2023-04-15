<?php 

class Vehicle{ //parent class
    private $nama, $warna, $harga, $diskon = 0;

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
    
    public function infoKendaraan(){
        $str = "{$this->nama} warna {$this->warna} dengan harga {$this->harga}";
        return $str;
    }
}

class Car extends Vehicle{  //child class 
    public $jmlhBan;

    public function __construct($nama = "nama", $warna = "warna", $harga = 0, $jmlhBan = 0){

        parent::__construct($nama, $warna, $harga); //mengambil construct parent
        $this->jmlhBan = $jmlhBan;
    }

    public function infoKendaraan() {
        $str = parent::infoKendaraan() . " yang memiliki {$this->jmlhBan} ban adalah sebuah mobil";//mengambil method infoKendaraan() parent
        return $str;
    }
}

class Motor extends Vehicle {   //child class 
    public $jenisKendaraan;

    public function __construct($nama = "nama", $warna = "warna", $harga = 0, $jenisKendaraan = "jenis"){

        parent::__construct($nama, $warna, $harga);
        $this->jenisKendaraan = $jenisKendaraan;
    }

    public function infoKendaraan() {
        $str = parent::infoKendaraan() . " adalah sebuah {$this->jenisKendaraan}";
        return $str;
    }
}

// $vehicle1 = new Vehicle("Kendaraan A", "Kuning");

// echo $vehicle1->greet();
// echo "\n";

$car1 = new Car("Kendaraan", "Hitam", 500000, 4);
$motor1 = new Motor("Kendaraan", "Putih", 150000, "Motor");

echo $car1->infoKendaraan();
echo "\n";
echo $motor1->infoKendaraan();
echo "\n";
echo $car1->setDiskon(50);
echo $car1->getHarga();
echo "\n";
echo $motor1->setDiskon(10);
echo $motor1->getHarga();
?>