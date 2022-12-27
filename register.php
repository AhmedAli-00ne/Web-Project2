<?php
$firstName = $_POST['FirstName'];
$lastName = $_POST['LastName'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$confirmPassword = $_POST['ConfirmPassword'];
$phoneNumber = $_POST['PhoneNumber'];
$age = $_POST['Age'];

if ($password == $confirmPassword) {
    if ($firstName != "" && $lastName != "" && $email != "" && $password != "" && $confirmPassword != "" && $phoneNumber != "" && $age != "") {
        if((int)$age>=16)
        {
            if (strlen($phoneNumber) == 11) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    require('DBconnectionCred.php');
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO user (`FirstName`, `LastName`, `Email`, `Password`, `PhoneNo`, `Age`) VALUES ('$firstName', '$lastName', '$email', '$password', '$phoneNumber', '$age')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "User registered successfully";
                    } else {
                        echo "User registration failed";
                    }
                }
                else
                {
                    echo "Invalid email";
                }
            }
            else
            {
                echo "Phone number must be 11 digits";
            }
        }
        else
        {
            echo "You must be 16 years old or older to register";
        }
    }
    else
    {
        echo "Please fill all the fields";
    }
}
else{
    echo "Passwords don't match";
}