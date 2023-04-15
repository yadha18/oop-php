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

$fruit1 = new Fruit("Apel", "Merah", 5000);
$fruit2 = new Fruit("Jeruk", "Orange", 3500);

echo $fruit1->introduce();
echo "<br>";
echo $fruit2->introduce();
?>