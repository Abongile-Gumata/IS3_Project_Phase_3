<?php
// Start the session to access session variables
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="../style/index.css">
    <title>Mina Nawe CarWash</title>
</head>
<body>
<header>
    <div class="container">
        <div class="logo">MM<span>CarWash</span></div>
        <nav class="menu">
            <ul>
                <li><a href="./home.php">Home</a></li>
                <li><a href="./about.php">About Us</a></li>
                <li><a href="./contact.php">Contact Us</a></li>

            </ul>
        </nav>
        
        <ul> <!-- Added missing <ul> tag -->
        <?php if (isset($_SESSION['userId'])): ?>
            <li>
                <a href="./profile.php" class="login__btn profile-btn">Profile</a>
                <ul class="dropdown">
                    <li><a href="../includes/logout.php" class="dropdown-item">Logout</a></li>
                </ul>
            </li>
        <?php else: ?>
            <li><a href="#" class="login__btn">Sign In</a></li> <!-- If not logged in, show Sign In -->
        <?php endif; ?>
        </ul> <!-- Closing <ul> tag -->
    </div>
</header>
