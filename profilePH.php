<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> NeedIT Page </title>
    <link rel="stylesheet" href="profile_needit.css">
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
        <div class="profile-container">
            <div class="profile-header">
                <img src="1.jpeg" alt="Profile Avatar" class="profile-avatar">
                <div class="profile-info">
                    <h2>John Doe</h2>
                    <p><i class='bx bx-envelope'></i> johnyyespapa@gmail.com</p>
                    <p><i class='bx bx-phone'></i> +62 812-3456-7890</p>
                    <button class="profile-edit-btn">Edit Profile</button>
                </div>
            </div>

            <div class="profile-details">
                <div class="profile-section">
                    <h3>Personal Information</h3>
                    <p><strong>Full Name :</strong> John Doe</p>
                    <p><strong>Date of Birth :</strong> January 15, 1990</p>
                    <p><strong>Gender :</strong> Male</p>
                </div>

                <div class="profile-section">
                    <h3>Professional Details</h3>
                    <p><strong>Occupation :</strong> Software Developer</p>
                    <p><strong>Company :</strong> Tech Innovations Inc.</p>
                    <p><strong>Experience :</strong> 5+ Years</p>
                </div>
            </div>
        </div>
    </main>
    
    <script src="needit.js"></script>
</body>
</html>