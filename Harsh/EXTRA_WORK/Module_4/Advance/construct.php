<?php
class Car {
    public $name;
    public $color;

    // Constructor
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function display() {
        echo "The car is a " . $this->name . " and the color is " . $this->color . ".";
    }
}

// Object creation
$myCar = new Car("Toyota", "Red");
$myCar->display(); // Output: The car is a Toyota and the color is Red.
?>
