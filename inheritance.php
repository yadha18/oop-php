<?php 

class Vehicle{
    public $nama, $warna, $harga;

    function __construct($nama = "nama", $warna = "warna", $harga = 0){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->harga = $harga;
    }
    
    function infoKendaraan(){
        $str = "{$this->nama} warna {$this->warna} dengan harga {$this->harga}.";
        return $str;
    }
}

class Car extends Vehicle{
    public function infoMobil() {
        $str = "{$this->nama} warna {$this->warna} dengan harga (Rp. {$this->harga}) adalah sebuah mobil";
        return $str;
    }
}

class Motor extends Vehicle {
    public function infoMotor() {
        $str = "{$this->nama} warna {$this->warna} dengan harga (Rp. {$this->harga}) adalah sebuah motor";
        return $str;
    }
}

// $vehicle1 = new Vehicle("Kendaraan A", "Kuning");

// echo $vehicle1->greet();
// echo "\n";

$car1 = new Car("Kendaraan", "Hitam", 500000);
$motor1 = new Motor("Kendaraan", "Putih", 150000);

echo $car1->infoKendaraan();
echo "\n";
echo $motor1->infoKendaraan();
?>