var isPasswordVisible = false; // Flag to track password visibility

function togglePassword() {
  var passwordField = document.getElementById("password");
  var icon = document.getElementById("pass-icon");

  if (isPasswordVisible) {
    // Hide the password
    passwordField.type = "password";
    icon.classList.remove("fa-eye"); // Switch to eye-slash icon
    icon.classList.add("fa-eye-slash");
    isPasswordVisible = false;
  } else {
    // Show the password
    passwordField.type = "text";
    icon.classList.remove("fa-eye-slash"); // Switch to eye icon
    icon.classList.add("fa-eye");
    isPasswordVisible = true;
  }
}
