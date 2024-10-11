<?php
// Check if the request method is POST (i.e., form was submitted)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Output success message and print form values for debugging
    echo "Form Submitted Successfully!<br>";

    // Output form data to check what values are being passed
    echo "Full Name: " . htmlspecialchars($_POST['FullName']) . "<br>";
    echo "Email Address: " . htmlspecialchars($_POST['EmailAddress']) . "<br>";
    echo "Password: " . htmlspecialchars($_POST['Pwd']) . "<br>";
    echo "Confirm Password: " . htmlspecialchars($_POST['confirmPwd']) . "<br>";
} else {
    // If accessed without form submission, print message
    echo "This page only accepts POST requests.";
}
?>
