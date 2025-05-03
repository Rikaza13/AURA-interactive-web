<?php
session_start();

// If the user is already logged in, redirect to dashboard
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Skin Care</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="landing-body">

<!-- Header Section -->
<header class="header">
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>

<!-- Main Section -->
<main class="main-container">
    <section id="home" class="landing-section has-bg-image" style="background-image: url('assets/images/landing-bg.jpg');">
        <div class="container">
            <h2 class="h1">Welcome to <span class="highlight">Aura Skin Care</span> 🌿</h2>
            <p class="h3">Nurture your skin with the best of nature</p>
            <p class="h3">Join us on your skin care journey ✨</p>
            <div class="auth-buttons">
                <a href="auth/register.php" class="btn btn-primary">Sign Up</a>
                <a href="auth/login.php" class="btn btn-secondary">Login</a>
            </div>
        </div>
    </section>
</main>

<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <p>Made with ❤️ for your healthy and radiant skin</p>
        <p>&copy; 2025 Aura Skin Care. All Rights Reserved.</p>
    </div>
</footer>

<script src="assets/js/script.js"></script>

</body>
</html>




