<?php
//Create a class that uses magic methods to handle property access and modification dynamically.
class DynamicProperties {
    // Private array to hold property values
    private $properties = [];

    // Magic method to get property value
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }
        return "Property '$name' does not exist.";
    }

    // Magic method to set property value
    public function __set($name, $value) {
        $this->properties[$name] = $value;
        echo "Property '$name' has been set to '$value'.\n";
    }

    // Magic method to check if a property is set
    public function __isset($name) {
        return isset($this->properties[$name]);
    }

    // Magic method to unset a property
    public function __unset($name) {
        if (isset($this->properties[$name])) {
            unset($this->properties[$name]);
            echo "Property '$name' has been unset.\n";
        } else {
            echo "Property '$name' does not exist.\n";
        }
    }
}

// Example usage
$obj = new DynamicProperties();

// Dynamically set properties
$obj->name = "Deepak";
$obj->age = 25;

// Get properties dynamically
echo $obj->name ; // Output: Deepak
echo $obj->age ;  // Output: 25

// Check if a property is set
echo isset($obj->name) ? "Name is set.\n" : "Name is not set.\n";

// Unset a property
unset($obj->age);

// Try accessing an unset property
echo $obj->age ; // Output: Property 'age' does not exist.
?>
