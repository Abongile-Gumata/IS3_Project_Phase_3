<?php
session_start(); // Ensure session is started
require_once 'dbh.inc.php'; // Assuming your db connection is handled in dbh.inc.php

// Handle form submission for resetting the password
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form inputs
    $email = $_POST['EmailAddress']; // Get the email from the form
    $newPassword = $_POST['Pwd'];
    $confirmPassword = $_POST['PwdConfirm']; // Ensure the 'name' for confirm password is different in your form


    // Validate inputs
    if (!empty($email) && !empty($newPassword) && !empty($confirmPassword)) {
        if ($newPassword === $confirmPassword) {
            // Check if the email exists in the users table
            $query = "SELECT id FROM users WHERE EmailAddress = ?";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) > 0) {
                // Email exists, get the user ID
                mysqli_stmt_bind_result($stmt, $userId);
                mysqli_stmt_fetch($stmt); // Fetch the user ID
                mysqli_stmt_close($stmt); // Close the statement

                // Hash the new password before storing it
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

                // Update query
                $updateQuery = "UPDATE users SET Pwd = ? WHERE id = ?";
                $updateStmt = mysqli_prepare($conn, $updateQuery);
                
                // Bind the hashed password and userId
                mysqli_stmt_bind_param($updateStmt, "si", $hashedPassword, $userId);

                // Execute the update query
                if (mysqli_stmt_execute($updateStmt)) {
                    // Optionally, you can send a success message or redirect
                    echo "Password updated successfully!";
                    header('Location: ../public/home.php');
                    exit();
                } else {
                    echo "Error updating password.";
                }

                // Close the statement
                mysqli_stmt_close($updateStmt);
            } else {
                echo "Email not found.";
            }
        } else {
            echo "Passwords do not match!";
        }
    } else {
        echo "Please fill in all the fields.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
