<?php
include 'db.php';

// Create table
$conn->query("CREATE TABLE IF NOT EXISTS employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    position VARCHAR(100),
    salary FLOAT
)");

// Insert three records (only if table is empty, so it doesn't duplicate on refresh)
$check = $conn->query("SELECT COUNT(*) as total FROM employees");
$row = $check->fetch_assoc();

if ($row['total'] == 0) {
    $stmt = $conn->prepare("INSERT INTO employees (name, position, salary) VALUES (?, ?, ?)");

    $stmt->bind_param("ssd", $name, $position, $salary);

    $name = "Rohan Mehta";     $position = "Software Engineer"; $salary = 55000;
    $stmt->execute();

    $name = "Priya Nair";      $position = "Data Analyst";      $salary = 48000;
    $stmt->execute();

    $name = "Aman Verma";      $position = "HR Manager";        $salary = 60000;
    $stmt->execute();
}

// Retrieve and display
$result = $conn->query("SELECT * FROM employees");
?>

<h2>Employees List</h2>
<table border="1" cellpadding="10" cellspacing="0" style="font-size:16px; text-align:center;">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Position</th>
        <th>Salary</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['position']; ?></td>
        <td><?php echo $row['salary']; ?></td>
    </tr>
    <?php } ?>
</table>