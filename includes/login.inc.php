<?php
session_start();
require_once 'dbh.inc.php';


if (isset($_POST['submit'])) {
    $errors = [];

    // Sanitize and retrieve form data
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Check if the required fields are filled
    if (empty($username) || empty($password)) {
        $errors[] = "Please fill in both username and password.";
    }

    // Proceed if no errors
    if (empty($errors)) {
        // Prepare a SQL query to find the user by email/username
        $query = "SELECT * FROM users WHERE EmailAddress = ?";
        $stmt = mysqli_prepare($conn, $query);

        // Check for preparation failure
        if (!$stmt) {
            $errors[] = "Database error: failed to prepare statement.";
        } else {
            // Bind the parameter (username/email)
            mysqli_stmt_bind_param($stmt, "s", $username);
        
            // Execute the query
            if (!mysqli_stmt_execute($stmt)) {
                $errors[] = "Database error: failed to execute query.";
            } else {
                // Get the result
                $result = mysqli_stmt_get_result($stmt);
        
                // Check if a user with the provided username exists
                if ($row = mysqli_fetch_assoc($result)) {
                    // Verify the hashed password
                    if (password_verify($password, $row['Pwd'])) {
                        // Successful login, set session variables
                        $_SESSION['userId'] = $row['id'];
                        $_SESSION['userEmail'] = $row['EmailAddress'];
                        $_SESSION['userName'] = $row['FullName'];
                        $_SESSION['userPhone'] = $row['phone']; // Store phone for profile
                

                        // Redirect to the profile page
                        header("Location: ../public/home.php");
                        exit();
                    } else {
                        // Invalid password
                        $errors[] = "Incorrect password. Please try again.";
                    }
                } else {
                    // No user found with that email
                    $errors[] = "No account found with that email. Please register.";
                }
            }
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    }

    // Close the database connection
    mysqli_close($conn);

    // If there are errors, store them in session and redirect back to login form
    if (!empty($errors)) {
        $_SESSION['login_errors'] = $errors;
        header("Location: ../public/home.php");
        exit();
    }
} else {
    // If the page is accessed directly, redirect to the login page
    header("Location: ../public/home.php");
    exit();
}
?>
