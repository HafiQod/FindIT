<?php
    include "service/databaseph.php";

    if(isset($_POST['login'])){
        $usernameND = $_POST['usernameND'];
        $passwordND = $_POST['passwordND'];

        $sql = "SELECT * FROM needit WHERE usernameND = '$usernameND' AND passwordND = '$passwordND'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            header("Location: homepagePH.php");
    }
    else {
            echo "Login gagal! Username atau password salah.";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindIT</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="wrapper">
    <form action="loginph.php" method="POST">
         <h2>Login Form NeedIT</h2>
         <div class="input-field">
             <input type="text" name="usernameND" required>
             <label>Enter Username</label>
         </div>
         <div class="input-field">
             <input type="password" name="passwordND" required>
             <label>Enter your password</label>
         </div>
         <div class="forget">
             <label for="remember">
                 <input type="checkbox" id="remember">
                 <p>Remember me</p>
             </label>
             <a href="#">Forgot password?</a>
         </div>
         <button type="submit" name="login">Log In</button>
         <div class="register">
             <p>Don't have an account? <a href="registerph.php" style="color: blue;">Register</a></p>
         </div>
    </form>
    </div>
</body>
</html>