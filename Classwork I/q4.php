<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 4</title>
</head>
<body>
    <form action="" method="GET">
        Email:
        <input type="email" name="email">
        <br>
        Password:
        <input type="password" name="password">
        <br>
        Have you Subscribed:
        <input type="checkbox" name="subs" value="no">
        <br>
        <button type="submit">
            Submit
        </button>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] ==="GET"){
    $mail = $_GET["email"];
    $pass = $_GET["password"];
    $subscribe = isset($_GET["subs"]) ? "subscribed" : "not subscribed"; 

    echo "Thank You for signin, $mail. You have $subscribe to the newsletter";
}
?>