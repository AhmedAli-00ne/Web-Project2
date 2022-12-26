<?php
$serverName = "156.214.74.189"
$username = "root"
$passowrd = ""

try{
    $conn = new PDO("mysql:host=$serverName;dbname=Restaurants", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}