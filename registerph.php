<?php
    
    include "service/databaseph.php";

    if(isset($_POST['regis'])){
        $usernameND = $_POST["usernameND"];
        $passwordND = $_POST["passwordND"];

        $sql = "INSERT INTO needit (usernameND, passwordND) VALUES ('$usernameND', '$passwordND')";

        if ($db->query($sql)) {
            header("Location: loginph.php");
        } else {
            ;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindIT</title>
    <link rel="stylesheet" href="registrasi.css">
</head>
<body>
    <div class="wrapper">
        <form action="registerph.php" method="POST">
<<<<<<< HEAD
            <h2>Registrasi NeedIT</h2>
            <div class="input-field">
                <input type="text" name="usernameND" required>
                <label>Enter Username</label>
            </div>
            <div class="input-field">
                <input type="password" name="passwordND" required>
=======
            <h2>Registrasi Perusahaan</h2>
            <div class="input-field">
                <input type="text" name="usernameph" required>
                <label>Enter Username</label>
            </div>
            <div class="input-field">
                <input type="password" name="passwordph" required>
>>>>>>> f563c76e9c4f7750ace1571b2f7d02e70bae6f7d
                <label>Enter your Password</label>
            </div>
            <div class="input-field">
                <input type="tel" required>
                <label>Enter your phone number</label>
            </div>
            <div class="input-field">
                <input type="password" required>
                <label>Confirm your password</label>
            </div>

            <div class="forget">
                <label for="remember">
                    <input type="checkbox" id="remember">
                    <p>Remember me</p>
                </label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" name="regis">Register</button>
            <div class="register">
                <p>Already have an account? <a href="loginph.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>