<?php

class Fruit{

    private $name;
    private $color;
    private $price;

    function __construct($name, $color, $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    function introduce() {
        return $this->name ." - ". $this->color ." - ". $this->price;
    }
}

$apple = new Fruit("Apel", "Merah", 5000);

echo $apple->introduce();
?>