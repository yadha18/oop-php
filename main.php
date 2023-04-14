<?php

class Buah{

    public $name;
    public $color;

    function introduce() {
        return $this->name ." - ". $this->color;
    }
}

$apple = new Buah();
$apple->name = "Apel";
$apple->color = "Merah";

echo $apple->introduce();

?>