<?php

$link = mysqli_connect("localhost", "root","", "marios1");
 
// Check connection
if($link === false){
    // epeidh polles fores to error mporei na emfanisei user kai password apo th database
    die('Could not connect to database.');
    
    //die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>