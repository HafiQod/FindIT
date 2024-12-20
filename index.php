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
            <div style="position: fixed; margin-bottom: 23.4rem;">
                <h1>Work IT</h1>
                </div>

                <div style="margin-bottom: 8.9rem;">
                <h4 style="font-weight: 360;">Ruang bagi profesional IT untuk memamerkan keahlian mereka, mengunggah profil, dan menemukan peluang kerja yang sesuai dengan spesialisasi mereka.</h4>
                </div>

                <div class="button-container" style="position: fixed; margin-top: 4.3rem;">
                    <button>Continue</button>
                </div>
            </form>
        </div>

        <div class="form-container login-container">
            <form action="loginph.php">
                <div style="margin-bottom: 0rem; margin-top: 0rem;">
                <h1>Need IT</h1>
                </div>

                <div style="margin-bottom: 13rem;">
                    <h4 style="font-weight: 360;">Platform bagi perusahaan untuk menemukan profesional IT dengan cepat dan tepat melalui fitur pencarian berbasis keterampilan, pengalaman, dan lokasi.</h4>
                </div>
                
                <div class="button-container" style="position: fixed; margin-top: 4.3rem;">
                    <button>continue</button>
                </div>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left" style="margin-top: 2rem;">
                    <h1 class="title">Choose this if it suits your preference</h1>
                    <button class="ghost" id="login">Need IT
                        <!-- <i class="fa-solid fa-arrow-rigth login"></i> -->
                    </button>
                </div>
                <div class="overlay-panel overlay-right" style="margin-top: 2rem;">
                    <h1 class="title">Choose this if it suits your preference</h1>
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
