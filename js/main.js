document.addEventListener("DOMContentLoaded", function () {
  const passwordInput = document.getElementById("password");
  const toggleIcon = document.querySelector(".see-password i");

  document
    .querySelector(".see-password")
    .addEventListener("click", function () {
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
      } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
      }
    });
});

/* Booking form */
document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("#bookingForm");

  form.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the default form submission

    // Gather input values
    const firstName = document.getElementById("firstName").value;
    const lastName = document.getElementById("lastName").value;
    const date = document.getElementById("date").value;
    const time = document.getElementById("time").value;
    const washType = document.getElementById("washType").value;

    // Create a summary of the input values
    const summary = `
        First Name: ${firstName}
        Last Name: ${lastName}
        Date: ${date}
        Time: ${time}
        Wash Type: ${washType}
      `;

    // Confirm submission
    if (confirm(`Please confirm your details:\n${summary}`)) {
      form.submit(); // Submit the form if confirmed
    }
  });
});

const loginbtn = document.querySelector("#loginbtn");
loginbtn.addEventListener("click", function () {
  console.log("Submit clicked");
});

/* Contact form*/
if (document.querySelector("#contactForm")) {
  document
    .querySelector("#contactForm")
    .addEventListener("submit", function (event) {
      event.preventDefault(); // Prevent the default form submission

      // Get form values
      const fullname = document.getElementById("fname").value.trim();
      const email = document.getElementById("email").value.trim();
      const phone = document.getElementById("phone").value.trim();
      const subject = document.getElementById("subject").value.trim();
      const message = document.getElementById("message").value.trim();

      // Validate inputs
      if (!fullname || !email || !phone || !subject || !message) {
        alert("Please fill out all fields.");
        return;
      }

      // Display the information (you can also send it to the server here)
      alert(
        `Message Sent!\n\nFullname: ${fullname}\nEmail: ${email}\nPhone: ${phone}\nSubject: ${subject}\nMessage: ${message}`
      );

      // Optionally, reset the form after submission
      this.reset();
    });
}

const resetPassBtn = document.getElementById("resetPasswordForm");
if (resetPassBtn) {
  resetPassBtn.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    const newPassword = document.getElementById("newPassword").value;
    const confirmPassword = document.getElementById("confirmPassword").value;

    if (newPassword !== confirmPassword) {
      alert("Passwords do not match. Please try again.");
    } else {
      // Handle successful password reset logic here
      alert("Password has been reset successfully!");
      // You could submit the form data via AJAX here if needed
    }
  });
}

/*  Register */

if (document.querySelector("#registrationForm")) {
  document
    .querySelector("#registrationForm")
    .addEventListener("submit", function (event) {
      event.preventDefault(); // Prevent form submission

      const fullName = document.querySelector(
        'input[placeholder="Full Name"]'
      ).value;
      const email = document.querySelector(
        'input[placeholder="Email Address"]'
      ).value;
      const password = document.querySelector(
        'input[placeholder="Password"]'
      ).value;
      const confirmPassword = document.querySelector(
        'input[placeholder="Confirm Password"]'
      ).value;
      const termsChecked = document.getElementById("terms").checked;

      if (!fullName || !email || !password || !confirmPassword) {
        alert("Please fill in all fields.");
        return;
      }

      if (password !== confirmPassword) {
        alert("Passwords do not match. Please try again.");
        return;
      }

      if (!termsChecked) {
        alert("You must agree to the terms of service.");
        return;
      }

      // Handle successful registration logic here
      alert("Account created successfully!");
      // You could submit the form data via AJAX here if needed
    });
}

// Change active class

const userMenuBtns = document.querySelectorAll(".menu-buttons button");

userMenuBtns.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    // First, remove the "active" class from all buttons
    userMenuBtns.forEach((button) => {
      button.classList.remove("active");
    });

    // Then add the "active" class to the clicked button
    e.target.classList.add("active");
  });
});

const profileBtn = document.getElementById("profile-btn");
const historyBtn = document.getElementById("history-btn");
const profileSection = document.getElementById("profile-section");
const bookingHistorySection = document.getElementById(
  "booking-history-section"
);
const menuButtons = document.querySelectorAll(".menu-buttons .menu-btn");

// Add click event listeners to the buttons
if (profileBtn && historyBtn) {
  profileBtn.addEventListener("click", () => {
    profileSection.style.display = "block";
    bookingHistorySection.style.display = "none";

    // Update active button styling
    menuButtons.forEach((btn) => btn.classList.remove("active"));
    profileBtn.classList.add("active");
  });

  historyBtn.addEventListener("click", () => {
    profileSection.style.display = "none";
    bookingHistorySection.style.display = "block";

    // Update active button styling
    menuButtons.forEach((btn) => btn.classList.remove("active"));
    historyBtn.classList.add("active");
  });
}

document.addEventListener("DOMContentLoaded", () => {
  const closeForm = document.querySelector(".login-form .x-form");
  const loginForm = document.querySelector(".login-form");
  const loginBtn = document.querySelector(".login__btn");
  const profileBtn = document.querySelector(".profile-btn");

  // Check if the profile button exists and set the login form display accordingly
  if (!profileBtn) {
    loginForm.style.display = "block"; // Show the login form if the profile button does not exist
  } else {
    loginForm.style.display = "none"; // Hide the login form if the profile button exists
  }

  // Add an event listener to the login button to display the login form
  loginBtn.addEventListener("click", () => {
    loginForm.style.display = "block"; // Show the login form when the login button is clicked
  });

  // Add an event listener to the close button to hide the login form
  if (closeForm) {
    // Check if the closeForm element exists before adding the event listener
    closeForm.addEventListener("click", () => {
      loginForm.style.display = "none"; // Hide the login form when the close button is clicked
    });
  }
});
