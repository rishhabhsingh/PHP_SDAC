<?php
$conn = new mysqli('localhost', 'root', '', 'students');

if(!$conn){
    echo "Database Not Connected!";
}
else{
    echo "Database Connected!!!";
}
?>