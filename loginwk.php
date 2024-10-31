<?php
    include "service/databasewk.php";

    if(isset($_POST['login'])){
        $usernamewk = $_POST['usernamewk'];
        $passwordwk = $_POST['passwordwk'];

        $sql = "SELECT * FROM loginwk WHERE usernamewk = '$usernamewk' AND passwordwk = '$passwordwk'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            header("Location: homepageWK.php");
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
    <form action="loginwk.php" method="POST">
         <h2>Login Form Worker</h2>
         <div class="input-field">
             <input type="text" name="usernamewk" required>
             <label>Enter Username</label>
         </div>
         <div class="input-field">
             <input type="password" name="passwordwk" required>
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
             <p>Don't have an account? <a href="registerwk.php" style="color: blue;">Register</a></p>
         </div>
    </form>
    </div>
</body>
</html>