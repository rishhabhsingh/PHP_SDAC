<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 3</title>
</head>
<body>
  <form action="" method="POST">
    Name:
    <input type="text" name="name">
    <br>
    Age:
    <input type="number" name="age">
    <br>
    Gender:
    <select name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
    </select>
    <br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    echo "Hello, $name. You are $age years old and identify as $gender.";
}
?>