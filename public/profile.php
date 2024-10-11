<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['userId'])) {
    header("Location: ../public/home.php");
    exit();
}

// Retrieve user details from the session
$userId = $_SESSION['userId'];
$fullName = $_SESSION['userName'];
$email = $_SESSION['userEmail'];
$phone = $_SESSION['userPhone'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>User Profile</title>
    <link rel="stylesheet" href="../style/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet"
  />
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
                        <a href="./profile.php" class="login__btn">Profile</a>
                        <ul  class="dropdown">
                            <li><a href="../includes/logout.php" class="dropdown-item">Logout</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li><a href="./login.php" class="login__btn">Sign In</a></li> <!-- If not logged in, show SignIn -->
                <?php endif; ?>

    </div>
</header>
    <div class="profile-section">
      <div class="container">
        <div class="content-wrapper">
          <aside class="user-menu" id="aside">
            <h2>User Dashboard</h2>
            <div class="menu-buttons">
              <button class="menu-btn active" id="profile-btn">
                Public Profile
             <!-- </button>
              <button class="menu-btn" id="history-btn">Booking History</button>-->
            </div>
            <div class="pricing-info">
              <h3>Service Prices:</h3>
              <ul>
                <li><b>Basic Wash</b></li>
                <li>Small car - R50.00</li>
                <li>Medium car - R70.00</li>
                <li>Large car - R90.00</li>

                <li><b>Premium Wash</b></li>
                <li>Small car - R80.00</li>
                <li>Medium car - R100.00</li>
                <li>Large car - R120.00</li>

                <li><b>Hand Wash</b></li>
                <li>Small car - R30.00</li>
                <li>Medium car - R50.00</li>
                <li>Large car - R70.00</li>

                <li><b>Express Wash</b></li>
                <li>Small car - R40.00</li>
                <li>Medium car - R60.00</li>
                <li>Large car - R80.00</li>

                <li><b>Specialty Wash</b></li>
                <li>Small car - R100.00</li>
                <li>Medium car - R150.00</li>
                <li>Large car - R200.00</li>
              </ul>
            </div>
          </aside>

          <div class="main-content">
        <!-- Profile Details Section -->
        <div class="profile-details" id="profile-section">
            <!-- Profile picture and form goes here -->
            <div class="profile-picture">
                <!-- User profile image -->
                <div class="img-wrapper">
            <img src="" alt="">
                </div>
                <div class="profile-details-btn">
                    <div class="file-upload">
                        <input type="file" name="change-img" id="change-img" hidden />
                        <label for="change-img" class="upload-btn active">Choose Image</label>
                    </div>
                    <button class="delete-photo-btn">Delete picture</button>
                </div>
            </div>
            <div class="user-information">
                <form action="../includes/profile.inc.php" method="post">
                    <!-- Full Name -->
                    <div class="form-group">
                        <label for="fullname">Full Name:</label>
                        <input
                            type="text"
                            name="FullName"
                            id="fullName"
                            placeholder="John Doe"
                            value="<?php echo htmlspecialchars($fullName); ?>" 
                            required
                        />
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input
                            type="email"
                            name="EmailAddress"
                            id="email"
                            placeholder="john.doe@example.com"
                            value="<?php echo htmlspecialchars($email); ?>" 
                            required
                        />
                    </div>

                    <!-- Phone Number -->
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input
                            type="tel"
                            name="phone"
                            id="phone"
                            placeholder="+27 23 456 7890"
                            value="<?php echo htmlspecialchars($phone); ?>" 
                            required
                        />
                    </div>

                    <!-- Save Button -->
                    <div class="form-actions">
                        <button type="submit" class="save-btn">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Booking History Section -->
        <div class="booking-history-section" id="booking-history-section" style="display: none">
            <h2>Booking History</h2>
            <table class="booking-table">
                <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>Date</th>
                        <th>Service</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#12345</td>
                        <td>Sep 20, 2024</td>
                        <td>Deluxe Wash</td>
                        <td><span class="status completed">Completed</span></td>
                        <td>$20</td>
                        <td><button class="view-btn">View Details</button></td>
                    </tr>
                    <tr>
                        <td>#12346</td>
                        <td>Sep 18, 2024</td>
                        <td>Full Detailing</td>
                        <td><span class="status pending">Pending</span></td>
                        <td>$50</td>
                        <td><button class="view-btn">View Details</button></td>
                    </tr>
                    <tr>
                        <td>#12347</td>
                        <td>Sep 15, 2024</td>
                        <td>Basic Wash</td>
                        <td><span class="status cancelled">Cancelled</span></td>
                        <td>$10</td>
                        <td><button class="view-btn">View Details</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        </div>
      </div>
    </div>

    <script>
      // Example script for handling picture upload
      function uploadPicture() {
        const input = document.getElementById("file-upload");
        const picture = document.getElementById("profilePicture");

        if (input.files && input.files[0]) {
          const reader = new FileReader();
          reader.onload = function (e) {
            picture.src = e.target.result;
          };
          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>
    <script src="../js/main.js"></script>
  </body>
</html>
