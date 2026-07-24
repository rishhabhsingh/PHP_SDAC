<?php
$demo = 'demo.txt';

//read
function readData($demo){
    if(file_exists($demo)){
        $data = file_get_contents($demo);
        echo $data;
    }
}

//write
function writeData($demo, $id, $name, $email){
    $data = "ID: $id, Name: $name, Email: $email\n";
    file_put_contents($demo, array($id, $name, $email));
    echo $data;
}

//append
function appendData($demo, $id, $name, $email){
    $data = "ID: $id, Name: $name, Email: $email\n";
    file_put_contents($demo, array($id, $name, $email), FILE_APPEND);
    echo $data;
}

//delete
function deleteData($demo){
    if(file_exists($demo)){
        unlink($demo);
        echo "Deleted Succesfully!";
    }
    else{
        echo "Not Deleted Succesfully!";
    }
}

//readData($demo);
//writeData($demo, 3, 'Junaid Aamir Khan', 200000);
//appendData($demo, 4, 'Aryan Shah Rukh Khan', 200000);
//deleteData($demo);
?>

