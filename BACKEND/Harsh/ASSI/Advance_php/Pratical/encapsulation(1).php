<?php
/*Create a simple class in PHP that demonstrates encapsulation by using private and public
properties and methods.*/


class Student {
    // Private properties
    private $name;
    private $age;
    private $grade;

    // Public method to set student details
    public function setDetails($name, $age, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    // Public method to get student details
    public function getDetails() {
        return "Name: {$this->name}, Age: {$this->age}, Grade: {$this->grade}";
    }

    // Public method to check if the student is eligible for promotion
    
}

// Example usage
$student = new Student();

// Set student details
$student->setDetails("prasad", 20, 75);

// Get and display student details
echo $student->getDetails() ."<br>";

// Check promotion eligibility


?>

