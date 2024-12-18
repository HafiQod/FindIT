<?php
    
    include "service/databasewk.php";

    if(isset($_POST['regis'])){
        $usernameWK = $_POST["usernameWK"];
        $passwordWK = $_POST["passwordWK"];

        $sql = "INSERT INTO workit (usernameWK, passwordWK) VALUES ('$usernameWK', '$passwordWK')";

        if ($db->query($sql)) {
            header("Location: loginwk.php");
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
        <form action="registerwk.php" method="POST">
            <h2>Registrasi WorkIT</h2>
            <div class="input-field">
                <input type="text" name="usernameWK" required>
                <label>Enter Username</label>
            </div>
            <div class="input-field">
                <input type="password" name="passwordWK" required>
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
                <p>Already have an account? <a href="loginwk.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>