<?php

class Fruit{

    public $name;
    public $color;

    function introduce() {
        return $this->name ." - ". $this->color;
    }
}

$apple = new Fruit();
$apple->name = "Apel";
$apple->color = "Merah";

echo $apple->introduce();

?>