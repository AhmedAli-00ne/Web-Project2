<?php
$serverName = "156.214.74.189";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$serverName;dbname=Credential", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}