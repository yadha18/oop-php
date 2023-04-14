<?php

class Animal{

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

$apple = new Animal();
$apple->set_name("Cat");
$apple->set_color("Brown");

echo $apple->get_name();
echo $apple->get_color();

?>