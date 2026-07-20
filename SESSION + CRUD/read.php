<?php
include 'db.php';

$result = $conn->query("SELECT * FROM products");

echo "<div style='text-align:center;'>";

echo "<h2>Products List</h2> <br>";

echo "<table border='1' cellpadding='10' cellspacing='0' style='margin:auto; font-size:18px; text-align:center;'>";
echo "<tr>
        <th>PID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Category</th>
      </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row['pid']."</td>
            <td>".$row['name']."</td>
            <td>".$row['quantity']."</td>
            <td>".$row['category']."</td>
          </tr>";
}

echo "</table>";
echo "</div>";
?>