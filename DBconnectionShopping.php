<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "Shopping";

try{
    $conn = new mysqli($serverName, $username, $password, $dbname);
    echo "Connected successfully";
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}