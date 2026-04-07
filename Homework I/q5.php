<?php

echo"<h2>SubQ1</h2>";
$car = ["mustang", "ford", "toyota"];
for($i = 0; $i < count($car); $i++){
    echo "Index $i. $car[$i] . <br>";
}

echo"<h2>SubQ2</h2>";
$cars = ["Mustang" => "Ford",
    "Civic" => "Honda",
    "Model S" => "Tesla",
    "Corolla" => "Toyota",
    "X5" => "BMW"];
foreach($cars as $car => $brand){
    echo "The name of the car is $car and the brand is $brand. <br>";
}

echo"<h2>SubQ3</h2>";
$cars1 = ["Tesla", "MG", "Suzuki"];
print_r($cars1);

echo"<br>";

array_push($cars1, "Yamaha", "OLA");
print_r($cars1);

echo"<br>";

array_pop($cars1);
print_r($cars1);

echo"<br>";

$morecars = ["Skoda", "ROLLS ROYCE"];
$allcars = array_merge($cars1, $morecars);
print_r($allcars);

echo"<br>";

$slicedarray = array_slice($allcars, 1, 3);
print_r($slicedarray);

echo"<br>";

$cars = ["Mustang" => "Ford",
    "Civic" => "Honda",
    "Model S" => "Tesla",
    "Corolla" => "Toyota",
    "X5" => "BMW"];
$keys = array_keys($cars);
print_r($keys);
?>