<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];

    header("Location: thankyou.php?name=" . $name);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>
<h2>Student Registration</h2>
<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Age: <input type="number" name="age"><br><br>
    Course: <input type="text" name="course"><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>