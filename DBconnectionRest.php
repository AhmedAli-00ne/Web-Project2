<?php
$serverName = "156.214.74.189";
$username = "root";
$passowrd = "";
$dbname = "Restaurants";
try{
    $conn = new mysqli($serverName, $username, $password, $dbname);
    echo "Connected successfully";
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}