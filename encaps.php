<?php

class Fruit{

    private $name;
    private $color;

    function introduce() {
        return $this->name ." - ". $this->color;
    }

    function get_name() {
        return $this->name;
    }

    function set_name($name) {
        $this->name = $name;
    }

    function get_color() {
        return $this->color;
    }
    
    function set_color($color) {
        $this->color = $color;
    }
}

$apple = new Fruit();
$apple->set_name("Apel");
$apple->set_color("Merah");

echo $apple->get_name();
echo $apple->get_color();

?>