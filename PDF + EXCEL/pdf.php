<?php
include 'db.php';
require 'vendor/autoload.php';

$result = $conn->query("SELECT * FROM users");

$pdf = new TCPDF();

$pdf -> AddPage();

$pdf -> setFont('times', 'B', '12');

$pdf -> cell('0', '10', 'User Details', '0', '1', 'C');

$html = '
    <table border="1" cellpadding="10" cellspacing="0" style="font-size:18px; text-align:center; background-color: black; width:100%; color:aqua; ">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Salary</th>
            <th>Address</th>
        </tr>
';

while ($row = $result->fetch_assoc()) {
    $html .= '
        <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['age'].'</td>
            <td>'.$row['salary'].'</td>
            <td>'.$row['address'].'</td>
        </tr>
    ';
}
$html .= '
    </table>
';

$pdf -> writeHTML($html, true, false, true, false, true, 'C');

$pdf -> output('user_details.pdf', 'D');
?>
