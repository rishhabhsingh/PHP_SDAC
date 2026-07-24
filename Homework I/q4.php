<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 4</title>
</head>
<body>
    <form action="" method="GET">
        Username:
        <input type="name" name="name">
        <br>
        Password:
        <input type="password" name="password">
        <br>
        Do you agree to out T&C?
        <input type="checkbox" name="agree" value="no">
        <br>
        <button type="submit">
            Submit
        </button>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] ==="GET"){
    $name = $_GET["name"];
    $pass = $_GET["password"];
    $agree = isset($_GET["agree"]) ? "Agreed" : "Not Agreed"; 

    echo "Welcome $name, You have $agree to the terms and condition.";
}
?>