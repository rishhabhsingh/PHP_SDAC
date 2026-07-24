<?php
$conn = new mysqli('localhost', 'root', '', 'project_management');

if(!$conn){
    echo "Database Not Connected Succesfully";
}
else{
    #echo "Database Connected Succesfully";
}
?>