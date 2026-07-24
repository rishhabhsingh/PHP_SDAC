<?php
abstract class StudentRecord {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function calculateGrade();
}

class UndergraduateStudent extends StudentRecord {
    public $assignments;
    public $exams;

    public function __construct($name, $assignments, $exams) {
        parent::__construct($name);
        $this->assignments = $assignments;
        $this->exams = $exams;
    }

    public function calculateGrade() {
        $grade = ($this->assignments + $this->exams) / 2;
        echo $this->name . "'s Grade (Undergraduate): " . $grade . "<br>";
    }
}

class GraduateStudent extends StudentRecord {
    public $research;
    public $exams;

    public function __construct($name, $research, $exams) {
        parent::__construct($name);
        $this->research = $research;
        $this->exams = $exams;
    }

    public function calculateGrade() {
        $grade = ($this->research + $this->exams) / 2;
        echo $this->name . "'s Grade (Graduate): " . $grade . "<br>";
    }
}

$ug = new UndergraduateStudent("Rishabh", 80, 90);
$ug -> calculateGrade();

$gr = new GraduateStudent("Aman", 85, 95);
$gr -> calculateGrade();
?>