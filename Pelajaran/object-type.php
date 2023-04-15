<?php

class Fruit{

    public $name, $color, $price;

    public function __construct($name = "nama", $color = "warna", $price = 0)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    function introduce() {
        return "{$this->name} - {$this->color} - {$this->price}";
    }
}

class CetakInfoBuah{
    public function cetak(Fruit $fruit) {
        $str = "Nama: {$fruit->name} | Warna: {$fruit->color}, Harga: {$fruit->price}";
        return $str;
    }
}

$fruit1 = new Fruit("Apel", "Merah", 5000);
$fruit2 = new Fruit("Jeruk", "Orange", 3500);

echo $fruit1->introduce();
echo "\n";
echo $fruit2->introduce();
echo "\n";

$infoBuah1 = new CetakInfoBuah();
echo $infoBuah1->cetak($fruit1);
?>