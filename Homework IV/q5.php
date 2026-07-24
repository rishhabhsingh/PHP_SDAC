<?php
interface CourseActions {
    public function enroll();
    public function drop();
    public function completeCourse();
}

class OnlineCourse implements CourseActions {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function enroll() {
        echo "Enrolled in online course: " . $this->name . "<br>";
    }

    public function drop() {
        echo "Dropped online course: " . $this->name . "<br>";
    }

    public function completeCourse() {
        echo "Completed online course: " . $this->name . "<br>";
    }
}

class InPersonCourse implements CourseActions {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function enroll() {
        echo "Enrolled in in-person course: " . $this->name . "<br>";
    }

    public function drop() {
        echo "Dropped in-person course: " . $this->name . "<br>";
    }

    public function completeCourse() {
        echo "Completed in-person course: " . $this->name . "<br>";
    }
}

$oc = new OnlineCourse("PHP Basics");
$oc -> enroll();
$oc -> completeCourse();

$ic = new InPersonCourse("Data Structures");
$ic -> enroll();
$ic -> drop();
?>