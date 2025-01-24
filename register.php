<?php
    if(isset($_POST["submitButton"])){
        echo "Form was submited";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/style/style.css" />
    <title>Register page</title>
</head>

<body>

    <div class="signInContainer">
        <div class="column">
            <div class="header">
                <img src="./assets/images/logo.png" alt="logo" title="Logo">
                <h3>Sign Up</h3>
                <span>Lorem ipsum dolor sit amet.</span>

            </div>
            <form method="POST">
                <input type="text" name="firstName" placeholder="First Name" required>
                <input type="text" name="lasttName" placeholder="Last Name" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="email" name="email2" placeholder="Confirm email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password" placeholder="Confirm Password" required>
                <input type="submit" name="submitButton" value="SUBMIT" required>
            </form>

            <a href="login.php" class="signInMessage">
                Already have an account ? Sign in here!
            </a>
        </div>
    </div>
</body>

</html>