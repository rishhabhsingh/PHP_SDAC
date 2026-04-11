<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $address = $_POST['address'];

    $stmt = $conn->prepare("UPDATE users SET name=?, age=?, salary=?, address=? WHERE id=?");
    $stmt->bind_param("sidsi", $name, $age, $salary, $address, $id);

    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

<!-- Simple HTML Form -->
<form method="POST">
    ID: <input type="number" name="id"><br><br>
    Name: <input type="text" name="name"><br><br>
    Age: <input type="number" name="age"><br><br>
    Salary: <input type="number" name="salary"><br><br>
    Address: <textarea name="address"></textarea><br><br>

    <input type="submit" value="Update">
</form>