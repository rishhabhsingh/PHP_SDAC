<?php 
class Student {
    public $id;
    public $name;
    public $grade;

    public function __construct($id, $name, $grade) {
        $this->id = $id;
        $this->name = $name;
        $this->grade = $grade;
    }

    public function displayDetails() {
        echo "ID: " . $this->id . "<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Grade: " . $this->grade . "<br>";
    }
}

$ob = new Student(101, "Rishabh", "A");
$ob -> displayDetails();
?>