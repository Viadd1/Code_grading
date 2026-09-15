<?php
$servername = "localhost"; //hej
$username = "root";
$password = "root";
$dbname = "things";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname); 
if (mysqli_connect_error()) { 
    die("Connection failed: " . mysqli_connect_error());  
}
?>