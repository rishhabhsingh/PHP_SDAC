<?php

echo"<h2>SubQ1</h2>";
$fruits = ["apple", "red", "mango"];
for($i = 0; $i < count($fruits); $i++){
    echo "Index $i. $fruits[$i] . <br>";
}

echo"<h2>SubQ2</h2>";
$fruits = ["apple" => "red", "mango" => "yellow", "kiwi" => "green"];
foreach($fruits as $fruit => $color){
    echo "The name of the fruits is $fruit and the color is $color. <br>";
}

echo"<h2>SubQ3</h2>";
$numbers = [10,20,30,40,50];

for($i = 0; $i < count($numbers); $i++){
    echo "Index $i. $numbers[$i] . <br>";
}
echo"<br>";
$numbers = [10,20,30,40,50];
foreach($numbers as $index => $num){
    echo "numbers[$index] = $num <br>";
}

echo"<h2>SubQ4</h2>";
$colors = ["Red", "Green", "Black"];
print_r($colors);

echo"<br>";

array_push($colors, "Yellow", "Purple");
print_r($colors);

echo"<br>";

array_pop($colors);
print_r($colors);

echo"<br>";

$morecolors = ["Hot Pink", "Baby Pink", "Dark Pink"];
$allcolors = array_merge($colors, $morecolors);
print_r($allcolors);

echo"<br>";

$slicedarray = array_slice($allcolors, 1, 3);
print_r($slicedarray);

echo"<br>";

$fruits = ["apple" => "red", "mango" => "yellow", "kiwi" => "green"];
$keys = array_keys($fruits);
print_r($keys);
?>