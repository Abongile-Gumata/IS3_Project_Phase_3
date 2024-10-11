<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form</title>
    <link rel="stylesheet" href="../style/index.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  </head>
  <body>
    <div class="register-container">
      <div class="form-container">
        <!-- Success message -->
        <div id="successMessage" style="display: none; color: green">
          Account successfully registered! Redirecting to homepage...
        </div>

        <form
          id="registrationForm"

          action="../includes/register.inc.php"
          method="post"

        >
          <h2>Create An Account</h2>
          <div class="input-box">
            <input
              type="text"
              name="FullName"
              placeholder="Full Name"
              required
            />
            <i class="fas fa-user"></i>
          </div>
          <div class="input-box">
            <input
              type="email"
              name="EmailAddress"
              placeholder="Email Address"
              required
            />
            <i class="fas fa-envelope"></i>
          </div>
          <div class="input-box">
            <input
              type="tel"
              name="Phone"
              placeholder="Phone"
              required
            />
            <i class="fas fa-envelope"></i>
          </div>
          <div class="input-box">
            <input type="password" name="Pwd" placeholder="Password" required />
            <i class="fas fa-lock"></i>
          </div>
          <div class="input-box">
            <input
              type="password"
              name="confirmPwd"
              placeholder="Confirm Password"
              required
            />
            <i class="fas far-lock"></i>
          </div>
          <div class="checkbox">
            <input type="checkbox" id="terms" name="terms" required />
            <label for="terms">I agree to the terms of service</label>
          </div>
          <button type="submit" name="submit" class="btn">Register</button>

          <!-- Text for existing users -->
          <p class="already-account">
            Already have an account?
            <a href="./home.php">Login here</a>
          </p>
        </form>
      </div>
    </div>

    <!-- FontAwesome for icons -->
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>

    <!-- JavaScript for handling success message and redirection -->
    <script>
      // const form = document.getElementById("registrationForm");
      // form.addEventListener("submit", function (e) {
      //   e.preventDefault();

      //   const formData = new FormData(form);

      //   fetch("includes/formhandler.inc.php", {
      //     method: "POST",
      //     body: formData,
      //   })
      //     .then((response) => response.text())
      //     .then((data) => {
      //       if (data === "success") {
      //         // Show success message
      //         document.getElementById("successMessage").style.display = "block";

      //         // Redirect after 3 seconds to the home page
      //         setTimeout(() => {
      //           window.location.href = "./home.html";
      //         }, 3000);
      //       } else {
      //         alert("Error: " + data);
      //       }
      //     })
      //     .catch((error) => {
      //       alert("Failed to register. Please try again.");
      //     });
      // });
    </script>
  </body>
</html>
