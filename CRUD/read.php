<?php
include 'db.php';

$result = $conn->query("SELECT * FROM users");

echo "<h2>Users List</h2>";

echo "<table border='1' cellpadding='10' cellspacing='0' style='font-size:18px; text-align:center;'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Salary</th>
        <th>Address</th>
      </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['age']."</td>
            <td>".$row['salary']."</td>
            <td>".$row['address']."</td>
          </tr>";
}

echo "</table>";
?>