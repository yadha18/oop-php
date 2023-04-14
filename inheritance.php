<?php 

class Vehicle{
    private $nama;
    private $warna;

    function __construct($nama, $warna){
        $this->nama = $nama;
        $this->warna = $warna;
    }
    
    function greet(){
        return $this->nama . " " . $this->warna;
    }
}

class Car extends Vehicle{}

$car = new Car("Mobil A", "Kuning");
echo $car->greet();
?>