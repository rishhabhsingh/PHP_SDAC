<?php

$conn = new mysqli('localhost', 'root', '', 'STUDENTS');

if(!$conn){
    echo "Database Not Connected Succesfully";
}
else{
    echo "Database Connected Succesfully";
}

?>