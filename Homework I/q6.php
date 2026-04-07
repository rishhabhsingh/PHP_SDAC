<?php
$name = "Rishabh Singh";

$single = 'Hello $name, Welcome!';
$double = "Hello $name, Welcome!";
echo "$single <br>";
echo "$double";

$fname = "Rishabh";
$lname = "Singh";
$full_name = "$fname " . " " . "$lname";
echo "<br> $full_name"; 

$string = "I love PHP programming!";
$string2 = str_replace("PHP", "JavaScript", $string);
echo "<br> $string2";

echo "<br> The length of the string is: " . strlen($string);
echo "<br> The string in lowercase is: " . strtolower($string);
echo "<br> The string in uppercase is: " . strtoupper($string);
echo "<br> The string after trimming is: " . trim($string); 
echo "<br> The substring is: " . substr($string, 7, 3);
?>