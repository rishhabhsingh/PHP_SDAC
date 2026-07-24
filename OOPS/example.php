<?php 
class Employee {
    public $name;
    public $salary;
    public $age;

    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Name: " . $this->age . "<br>";
        echo "Salary: $" . $this->salary . "<br>";
    }
}

$ob = new Employee("Sushant", 22, 5000000);
$ob -> displayInfo();
?>