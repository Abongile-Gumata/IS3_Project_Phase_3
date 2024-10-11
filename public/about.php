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
    <title>Mina Nawe CarWash | About Us</title>
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
        

        <?php if (isset($_SESSION['userId'])): ?>
                    <li>
                        <a href="./profile.php" class="login__btn profile-btn">Profile</a>
                        <ul  class="dropdown">
                            <li><a href="../includes/logout.php" class="dropdown-item">Logout</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li><a href="#" class="login__btn">Sign In</a></li> <!-- If not logged in, show SignIn -->
                <?php endif; ?>

    </div>
</header>
    <div class="showcase">
      <img src="../img/showcase-1.jpg" alt="" class="showcase-img" />
      <div class="page-header">
        <h2 class="showcase-heading">About Us</h2>
        <div class="breadcrumb-navigation">
          <span><a href="./home.php">Home</a> > </span>
          <span><a href="./about.php">About Us</a></span>
        </div>
      </div>
    </div>
    <div class="about-img">
      <div class="container">
        <div class="img-flex-container">
          <div class="card-img">
            <img src="../img/about-1.jpg" />
          </div>
          <div class="card-img">
            <img src="../img/about-2.jpg" />
          </div>
        </div>
        <div class="about-content">
          <div class="about-content-left">
            <h3 class="about-subheading">Write a Message</h3>
            <h2 class="about-heading">
              We’re the Leading Carwash Center For You
            </h2>
          </div>
          <div class="about-content-right">
            <p>
            We're your trusted partner for keeping your vehicle clean and shiny!
            At Mina Nawe Car Wash, we take pride in delivering top-notch car cleaning services tailored to 
            meet your needs. Founded in 2014, we’ve been serving Mdantsane with a commitment to excellence, 
            attention to detail, and a passion for cars. 
            </p>
            <p>
            Our goal is to provide high-quality car wash services 
            that leave your vehicle looking its absolute best, inside and out. We aim to save your time and deliver 
            exceptional results, all while ensuring eco-friendly practices.
            </p>
          </div>
        </div>
        <div class="call-to-action">
          <p>
          <b>Book Your Car Wash Today!:</b>
           Experience the best car wash services that ensure your vehicle gets the care it deserves.
          </p>
          <a href="./booking.php" class="cta">Book Now</a>
        </div>
      </div>
    </div>
    <footer id="footer">
        <div class="container">
          <ul class="footer-content">
            <li class="about-car-wash">
              <h3>About Us</h3>
              <h3>MM<span>CarWash</span></h3>
              <p>
                Your trusted partner for keeping your vehicle clean and shiny!
              </p>
              <div class="social">
                <span class="icon">
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                </span>
                <div class="icon">
                  <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
              </div>
            </li>
            <li class="quick-links">
              <h3>Quick links</h3>

              


              <span><a href="./booking.php">Booking</a></span>
              <span><a href="./about.php">About Us</a></span>
              <span><a href="./contact.php">Contact Us</a></span>
            </li>
            <li class="open-hours">
              <h3>Opening Hours</h3>
              <div>
                <span class="time">
                  <span class="day">Monday</span>
                  <span class="open-time"> 08:00 AM - 18:00 PM</span>
                </span>
                <span class="time">
                  <span class="day">Tuesday</span>
                  <span class="open-time"> 08:00 AM - 18:00 PM</span>
                </span>
                <span class="time">
                  <span class="day">Wednesday</span>
                  <span class="open-time"> 08:00 AM - 18:00 PM</span>
                </span>
                <span class="time">
                  <span class="day">Thursday</span>
                  <span class="open-time"> 08:00 AM - 18:00 PM</span>
                </span>
                <span class="time">
                  <span class="day">Friday</span>
                  <span class="open-time"> 08:00 AM - 18:00 PM</span>
                </span>
                <span class="time">
                  <span class="day">Saturday</span>
                  <span class="open-time"> 08:00 AM - 18:00 PM</span>
                </span>
                <span class="time">
                  <span class="day">Sunday</span>
                  <span class="time">Closed</span>
                </span>
              </div>
            </li>
          </ul>
        </div>
      </footer>

  </body>
</html>
