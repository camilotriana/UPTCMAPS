<?php

    $server="localhost";
    $user="camilo";
    $pass="mysql";
    $name="uptcmaps";
    $port="3306";
    
    $conn= mysqli_connect($server, $user, $pass, $name,$port);
    
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
    echo "Connected successfully";
    }
?>