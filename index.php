<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindIT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="indexx.css">
</head>
<body>
    <div class="container" id="container">

        <div class="form-container register-container">
            <form action="loginwk.php">
                <h1>Work IT</h1>
                
                <div class="button-container">
                    <button>Continue</button>
                </div>
            </form>
        </div>

        <div class="form-container login-container">
            <form action="loginph.php">
                <h1 style="margin-bottom: 5">Need IT</h1>
                
                <div class="button-container">
                    <button>continue</button>
                </div>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left" style="margin-top: 2rem;">
                    <button class="ghost" id="login">Need IT
                        <!-- <i class="fa-solid fa-arrow-rigth login"></i> -->
                    </button>
                </div>
                <div class="overlay-panel overlay-right" style="margin-top: 2rem;">
                    <h1 class="title">Start your <br> journey here,</h1>
                    <button class="ghost" id="register"> Work IT
                        <!-- <i class="fa-solid fa-arrow-left register"></i> -->
                    </button>
                </div>
            </div>
        </div>

    </div>
    <script src="login.js"></script>
</body>
</html>