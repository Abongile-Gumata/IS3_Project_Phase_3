<?php include 'header.php'; ?>

    <div class="showcase">
      <img src="../img/showcase-1.jpg" alt="" class="showcase-img" />
      <div class="page-header">
        <h2 class="showcase-heading">Contact Us</h2>
        <div class="breadcrumb-navigation">
          <span><a href="./home.php">Home</a> > </span>
          <span><a href="./contact.php">Contact</a></span>
        </div>
      </div>
    </div>
    <section id="contact-details-section">
      <div class="container">
        <span class="contact-subheading"> Get in touch </span>
        <h1 class="contact-heading">See Contact Details</h1>
        <p class="contact-description">
          We're here to help you with all your car wash needs. Feel free to
          reach out to us for inquiries or assistance!
        </p>
        <div class="contact-card-container">
          <div class="card">
            <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
            <h2 class="card-title">Our Address</h2>
            <span class="address">Mdantsane Unit 4, Mdantsane, 5219</span>
          </div>
          <div class="card">
            <span class="icon"><i class="fa-solid fa-phone"></i></span>
            <h2 class="card-title">Phone Number</h2>
            <span class="phone-number">083 764 2457</span>
          </div>
          <div class="card">
            <span class="icon"><i class="fa-solid fa-envelope"></i></span>
            <h2 class="card-title">Email Address</h2>
            <span class="email">minanawe@gmail.com</span>
          </div>
          <div class="card">
            <span class="icon"><i class="fa-solid fa-clock"></i></span>
            <h2 class="card-title">Operating Hours</h2>
            <span class="hours">Mon - Sat: 8 AM - 6 PM</span>
          </div>
        </div>
      </div>
    </section>
    <section id="form-section">
      <div class="container">
        <div class="form-container">
          <h2>Leave your Message</h2>
          <form
           action="../includes/contact.inc.php"  id="contactForm"
           method="post">
            <div class="form-input-flex">
              <div class="form-input">
                <label for="fname">Fullname</label>
                <input type="text" name="fullname" id="fname" />
              </div>
              <div class="form-input">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" />
              </div>
              <div class="form-input">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" />
              </div>
              <div class="form-input">
                <label for="subject">Subject</label>
                <input type="text" name="sub" id="subject" />
              </div>
            </div>
            <div class="form-input message">
              <label for="message">Message</label>
              <textarea name="msg" rows="5" id="message"></textarea>
            </div>
            <input type="submit" class="btn" name = "sendMessage" value="Send Message" />
          </form>
        </div>
      </div>

    </section>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107124.8345122428!2d27.64277001094426!3d-32.96022041086472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e66c2d9bb86be4d%3A0xd4672ccee4a7f396!2sMdantsane!5e0!3m2!1sen!2sza!4v1726839821689!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
