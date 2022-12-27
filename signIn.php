<?php
require('DBconnectionCred.php');
$email = $_POST['Email'];
$password = $_POST['Password'];
$sql = "SELECT * FROM user WHERE Email = '$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['Password'])) {
            echo "Login successful";
            session_start();
            $_SESSION['Email'] = $email;
            $_SESSION['Name'] = $row['FirstName'];
            header("Location: index.php");
        } else {
            echo $password . " AND " . $row['Password']. "AND " . $row['Email'];
        }
    }
} else {
    echo "Login failed";
}