<?php include 'header.php'; ?>

      <div class="showcase">
        <img src="../img/showcase-1.jpg" alt="" class="showcase-img" />
        <div class="page-header">
          <h2 class="showcase-heading">Booking</h2>
          <div class="breadcrumb-navigation">
            <span><a href="./home.php">Home</a> > </span>
            <span><a href="./booking.php">Book</a></span>
          </div>
        </div>
      </div>
    <div class="container booking-container">
      <div class="book-form">
        <div class="book-form__container">
          <h3>Make An Appointment</h3>


          <form 
          id = "bookingForm"
          action="../includes/booking.inc.php" 
          method="post">

            <div class="input-box">
              <input
                type="text"
                id="firstName"
                name="first_name"
                placeholder="First name"
                required
              />
            </div>
          
            <div class="input-box">
              <input
                type="text"
                id="lastName"
                name="last_name"
                placeholder="Last name"
              />
            </div>
          
            <div class="input-box">
              <input type="date" id="date" name="appointment_date" required />
            </div>
          
            <div class="input-box">
              <input type="time" id="time" name="appointment_time" required />
            </div>
          
            <div class="input-box">
              <input
                type="text"
                id="carColor"
                name="car_color"
                placeholder="Car Color"
                required
              />
            </div>
          
            <div class="input-box">
              <input
                type="text"
                id="carSize"
                name="car_size"
                placeholder="Car Size (e.g., Compact, SUV)"
                required
              />
            </div>
          
            <div class="input-box">
              <input
                type="text"
                id="carType"
                name="car_type"
                placeholder="Car Type (e.g., Sedan, Hatchback)"
                required
              />
            </div>
          
            <select id="washType" name="wash_type" required>
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
          
            <button type="submit" name="submit">Submit</button>

          </form>
          
        </div>
      </div>
    </div>
  </body>
</html>
