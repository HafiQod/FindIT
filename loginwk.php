<?php
    include "service/databasewk.php";

    if(isset($_POST['login'])){
        $usernameWK = $_POST['usernameWK'];
        $passwordWK = $_POST['passwordWK'];

        $sql = "SELECT * FROM workit WHERE usernameWK = '$usernameWK' AND passwordWK = '$passwordWK'";
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

<video autoplay muted loop id="background-video">
        <source src="643081aab39dc7304f659d03f8d42d71.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
    <div class="wrapper">
    <form action="loginwk.php" method="POST">
         <h2>Login Form WorkIT</h2>
         <div class="input-field">
             <input type="text" name="usernameWK" required>
             <label>Enter Username</label>
         </div>
         <div class="input-field">
             <input type="password" name="passwordWK" required>
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