<?php
// Include the database connection file
require_once 'dbh.inc.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {

    // Retrieve and sanitize form data
    $fullName = trim($_POST['FullName']);
    $email = trim($_POST['EmailAddress']);
    $phone = trim($_POST['Phone']);
    $password = trim($_POST['Pwd']);
    $confirmPassword = trim($_POST['confirmPwd']);
    $terms = isset($_POST['terms']); // Check if terms are accepted (checkbox)

    // Validate required fields
    if (empty($fullName) || empty($email) ||  empty($phone)|| empty($password) || empty($confirmPassword)) {
        echo "Please fill in all the required fields.";
        exit();
    }

    // Check if terms of service are accepted
    if (!$terms) {
        echo "You must accept the terms of service.";
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit();
    }

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email is already registered
    $emailQuery = "SELECT * FROM users WHERE EmailAddress = ?";
    $stmt = mysqli_prepare($conn, $emailQuery);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        echo "Email address is already registered.";
        exit();
    }

    // Insert user data into the database
    $query = "INSERT INTO users (FullName, EmailAddress,phone, Pwd) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    // Bind the parameters
    mysqli_stmt_bind_param($stmt, "ssss", $fullName, $email,$phone, $hashedPassword);

    // Execute the query and check if the insertion was successful
    if (mysqli_stmt_execute($stmt)) {
        echo '<script>alert("Account successfully registered.");</script>';
        header('Location: ../public/home.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    // Redirect if the form is accessed without submitting
    header("Location: ../public/Register.php");
    exit();
}
