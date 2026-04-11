<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $address = $_POST['address'];

    $stmt = $conn->prepare("INSERT INTO users (name, age, salary, address) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sids", $name, $age, $salary, $address);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>
<h2>Employee Form</h2>
<form action="" method="POST">
    <label>Name:</label><br>
    <input type="text" name="name"><br><br>

    <label>Age:</label><br>
    <input type="number" name="age"><br><br>

    <label>Salary:</label><br>
    <input type="number" name="salary"><br><br>

    <label>Address:</label><br>
    <textarea name="address"></textarea><br><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>