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
    Phone Number:
    <input type="number" name="phnumber">
    <br>
    Preffered Car Brand:
    <select name="brand">
        <option value="Toyota">Toyota</option>
        <option value="Ford">Ford</option>
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
    $phnumber = $_POST["phnumber"];
    $brand = $_POST["brand"];

    echo "Hello, $name. Your phone number is $phnumber and your preffered car brand is $brand.";
}
?>