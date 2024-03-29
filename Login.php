<?php
    ob_start();
    require('DBconnectionCred.php');
    ob_end_clean();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="LoginStyle.css">
    <link rel="stylesheet" href="christmas.css"/>
    <script src="christmas.js"></script>
    <title>Kharagny-Login</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="LoginJquery.js"></script>
</head>
<body>
    <div id="FormWrapper">
        <div id="LoginForm">
            <div id="ButtonsWrapper">
                <div class="LoginButton" id="SignInButton">
                    SIGN IN
                </div>
                <div class="LoginButton ActiveSign" id="SignUpButton">
                    SIGN UP
                </div>
            </div>
            <div id="FormText">
                <h1 class="SignUpText">Create Your Account.</h1>
                <p class="SignUpText">Sign up to get started with Kharagny.</p>
                <h1 class="SignInText">Sign In To Your Account</h1>
                <p class="SignInText">Sign in to continue with Kharagny.</p>
                <hr>
            </div>
            <div id="Form">
                <form name="form1" method="post" action="register.php">
                    <input type="text" name="FirstName" placeholder="First Name" class="SignUpText left" id="firstName"><br>
                    <input type="text" name="LastName" placeholder="Last Name" class="SignUpText right" id="lastName"><br>
                    <input type="number" name="PhoneNumber" placeholder="Phone Number" class="SignUpText left" minlength="11" maxlength="11" id="phoneNumber"><br>
                    <input type="number" name="Age" placeholder="Age" class="SignUpText right" min="16" max="100" id="age"><br>
                    <input type="text" name="Email" placeholder="Email Adress" class="Mutual left" class="email"><br>
                    <input type="password" name="Password" placeholder="Password" class="Mutual right" class="password"><br>
                    <input type="password" name="ConfirmPassword" placeholder="Confirm Password" class="SignUpText left" id="confirmPassword"><br>
                    <input type="submit" value="Sign Up" class="SignUpText SignButton" id="SignUp">
                </form>
                <form name="form2" method="post" action="signIn.php">
                    <input type="text" name="Email" placeholder="Email Adress" class="Mutual left" class="email"><br>
                    <input type="password" name="Password" placeholder="Password" class="Mutual right" class="password"><br>
                    <input type="submit" value="Sign In" class="SignInText SignButton" id="SignIn">
                </form>
            </div>
        </div>
    </div>
</body>
</html>