<?php
include "service/databasewk.php";

if(isset($_POST['username'])){
    $usernameWK = $_POST['usernameWK'];

    $sql = "SELECT usernameWK FROM workit WHERE id_WorkIT = ?";
    $result = $db->query($sql);

    if ($row = $result->fetch_assoc()) {
        $usernameWK = $row["usernameWK"];
    }
} else {
    $usernameWK = "Guest";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> WorkIT Page </title>
    <link rel="stylesheet" href="workit.css">
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
            </select>
            <i class='bx bx-menu menu-icon'></i>
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
            <div class="card">
                <!-- Card content will go here -->
            </div>
            <div class="card">
                <!-- Card content will go here -->
            </div>
            <div class="card">
                <!-- Card content will go here -->
            </div>
        </div>
    </main>
    
    <script src="workit.js"></script>
</body>
</html>