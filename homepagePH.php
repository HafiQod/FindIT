<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="homepagePH.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav class="sidebar">
        <div class="logo-menu">
            <h2 class="logo">FindIT</h2>
            <i class='bx bx-menu toggle-btn'></i>
        </div>
        <ul class="list">
            <li class="list-item active">
                <a href="#">
                    <i class='bx bx-home-alt-2'></i>
                    <span class="link-name" style="--i:1;">Home</span>
                </a>
            </li>
            <li class="list-item">
                <a href="#">
                    <i class='bx bx-user-circle'></i>
                    <span class="link-name" style="--i:2;">Profile</span>
                </a>
            </li>
            <li class="list-item">
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="link-name" style="--i:3;">Setting</span>
                </a>
            </li>
            <li class="list-item">
                <a href="#">
                    <i class='bx bx-info-circle'></i>
                    <span class="link-name" style="--i:4;">About</span>
                </a>
            </li>
            <li class="list-item">
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span class="link-name" style="--i:5;">Feedback</span>
                </a>
            </li>
        </ul>
    </nav>

    <main class="main-content">
        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" placeholder="Find Your IT...">
            <select>
                <option>Shots</option>
                <option>Designers</option>
                <option>UI/UX</option>
            </select>
        </div>

        <!-- Banner Section -->
        <div class="banner">
            <div class="banner-content">
                <h1>Cara Membuat<br>Iklan Google Ads<br>Untuk Promosi</h1>
                <div class="banner-dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
        </div>

        <!-- Cards Container -->
        <div class="cards-container">
            <div class="card" data-target="buku.php">
                <img src="gambar/card1.jpg" alt="Card 1">
                <h3>Card 1</h3>
                <p>Description for Card 1</p>
            </div>
            <div class="card" data-target="buku.php">
                <img src="gambar/card2.jpg" alt="Card 2">
                <h3>Card 2</h3>
                <p>Description for Card 2</p>
            </div>
            <div class="card" data-target="buku.php">
                <img src="gambar/card3.jpg" alt="Card 3">
                <h3>Card 3</h3>
                <p>Description for Card 3</p>
            </div>
        </div>
    </main>

    <script src="needit.js"></script>
</body>
</html>