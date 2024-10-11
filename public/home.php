<?php include 'header.php'; ?>


<section id="hero">
    <div class="hero__img">
        <img src="../img/img-1.jpg" alt="Car wash service">
        <div class="hero__content">
            <h1 class="heading">Welcome to Mina Nawe Carwash</h1>
            <p class="hero-text">
                Experience the ultimate shine and protection for your vehicle at Mina Nawe Carwash. Our state-of-the-art facilities and eco-friendly products ensure your car looks its best while caring for the environment. Drive in today and let us pamper your ride!
            </p>
            <a href="./booking.php" class="cta__btn">Book Now</a>
        </div>
    </div>

    <!-- ########### Login #############-->
    <div class="login-form">
        <div class="x-form">X</div>
        <span class="form-title">Sign In</span>

        <!-- Display error messages if they exist -->
        <?php if (isset($_SESSION['login_errors']) && !empty($_SESSION['login_errors'])): ?>
            <div class="error-messages">
                <ul>
                    <?php foreach ($_SESSION['login_errors'] as $error): ?>
                        <li class="error-message"><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php unset($_SESSION['login_errors']); // Clear errors after displaying ?>
        <?php endif; ?>
                
        <form action="../includes/login.inc.php" method="POST">
            <div class="input-box">
                <input type="text" name="username" id="username" placeholder="Username" required />
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password" placeholder="Password" required />
                <span class="see-password">
                    <i class="fa-regular fa-eye-slash"></i>
                </span>
            </div>
            <span class="forgot-password"><a href="ResetPassword.php">Forgot Password?</a></span>

            <!-- Add name="submit" for the login button -->
            <input type="submit" name="submit" id="loginbtn" value="Login" />

            <span class="go-register">Don't have an account? <a href="./Register.php">Register</a></span>
        </form>
    </div>
</section>

<section id="about">
    <div class="container">
        <div class="about-flex">
            <div class="about-us__content">
                <h2 class="about-us">About <span>Us</span></h2>
                <span class="sub-title">Lorem ipsum dolor sit amet.</span>
                <p class="about-us__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid vero blanditiis eligendi voluptatibus natus consectetur non illo voluptatem earum magni quasi facilis fuga aut nemo, sunt deserunt corrupti. Laudantium, suscipit.
                </p>
                <p class="about-us__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, exercitationem quia. Cupiditate fuga quia ab ex sed quam officiis corporis eveniet eum, voluptatem sint incidunt laborum, repellendus fugit!
                </p>

                <!-- Time Section -->
                <div class="time-section">
                    <h3>Our Available Times</h3>
                    <div class="time-slots">
                        <div class="time-slot">
                            <span class="day">Monday - Friday:</span>
                            <span class="time">8:00 AM - 6:00 PM</span>
                        </div>
                        <div class="time-slot">
                            <span class="day">Saturday:</span>
                            <span class="time">8:00 AM - 6:00 PM</span>
                        </div>
                        <div class="time-slot">
                            <span class="day">Sunday:</span>
                            <span class="time">Closed</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book-form">
                <div class="book-form__container">
                    <h3>Make An Appointment</h3>
                    <form action="/#" id="bookingForm" method="post">
                        <div class="input-box">
                            <input type="text" id="firstName" name="firstName" placeholder="First name" required />
                        </div>

                        <div class="input-box">
                            <input type="text" id="lastName" name="lastName" placeholder="Last name" />
                        </div>

                        <div class="input-box">
                            <input type="date" id="date" name="date" required />
                        </div>

                        <div class="input-box">
                            <input type="time" id="time" name="time" required />
                        </div>

                        <div class="input-box">
                            <input type="text" id="carColor" name="carColor" placeholder="Car Color" required />
                        </div>

                        <div class="input-box">
                            <input type="text" id="carSize" name="carSize" placeholder="Car Size (e.g., Compact, SUV)" required />
                        </div>

                        <div class="input-box">
                            <input type="text" id="carType" name="carType" placeholder="Car Type (e.g., Sedan, Hatchback)" required />
                        </div>

                        <select id="washType" name="washType" required>
                            <optgroup label="Basic Wash">
                                <option value="basicSmall">Small car - R50.00</option>
                                <option value="basicMedium">Medium car - R70.00</option>
                                <option value="basicLarge">Large car - R90.00</option>
                            </optgroup>
                            <optgroup label="Premium Wash">
                                <option value="premiumSmall">Small car - R80.00</option>
                                <option value="premiumMedium">Medium car - R100.00</option>
                                <option value="premiumLarge">Large car - R120.00</option>
                            </optgroup>
                            <optgroup label="Hand Wash">
                                <option value="handSmall">Small car - R30.00</option>
                                <option value="handMedium">Medium car - R50.00</option>
                                <option value="handLarge">Large car - R70.00</option>
                            </optgroup>
                            <optgroup label="Express Wash">
                                <option value="expressSmall">Small car - R40.00</option>
                                <option value="expressMedium">Medium car - R60.00</option>
                                <option value="expressLarge">Large car - R80.00</option>
                            </optgroup>
                            <optgroup label="Specialty Wash">
                                <option value="specialtySmall">Small car - R100.00</option>
                                <option value="specialtyMedium">Medium car - R150.00</option>
                                <option value="specialtyLarge">Large car - R200.00</option>
                            </optgroup>
                        </select>

                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
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


<script src="../js/main.js"></script>
</body>
</html>
