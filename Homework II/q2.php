<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $action = $_POST['action'];

    // a. Insert
    if ($action == "insert") {
        $name = $_POST['name'];
        $job_title = $_POST['job_title'];
        $salary = $_POST['salary'];

        $stmt = $conn->prepare("INSERT INTO employees (name, job_title, salary) VALUES (?, ?, ?)");
        $stmt->bind_param("ssd", $name, $job_title, $salary);

        if ($stmt->execute()) {
            echo "Employee inserted successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    // b. Update salary by ID
    if ($action == "update") {
        $id = $_POST['id'];
        $salary = $_POST['salary'];

        $stmt = $conn->prepare("UPDATE employees SET salary=? WHERE id=?");
        $stmt->bind_param("di", $salary, $id);

        if ($stmt->execute()) {
            echo "Salary updated successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    // c. Delete by ID
    if ($action == "delete") {
        $id = $_POST['id'];

        $stmt = $conn->prepare("DELETE FROM employees WHERE id=?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Employee deleted successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}

// d. Show All (always runs, so the list refreshes after each action)
$result = $conn->query("SELECT * FROM employees");

echo "<h2>Employee List</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0' style='font-size:16px; text-align:center;'>";
echo "<tr><th>ID</th><th>Name</th><th>Job Title</th><th>Salary</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['job_title'] . "</td>
            <td>" . $row['salary'] . "</td>
          </tr>";
}
echo "</table>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q2</title>
</head>
<body>
    <h3>Insert Employee</h3>
<form method="POST">
    <input type="hidden" name="action" value="insert">
    Name: <input type="text" name="name"><br><br>
    Job Title: <input type="text" name="job_title"><br><br>
    Salary: <input type="number" name="salary"><br><br>
    <input type="submit" value="Insert">
</form>

<h3>Update Salary</h3>
<form method="POST">
    <input type="hidden" name="action" value="update">
    ID: <input type="number" name="id"><br><br>
    New Salary: <input type="number" name="salary"><br><br>
    <input type="submit" value="Update">
</form>

<h3>Delete Employee</h3>
<form method="POST">
    <input type="hidden" name="action" value="delete">
    ID: <input type="number" name="id"><br><br>
    <input type="submit" value="Delete">
</form>
</body>
</html>