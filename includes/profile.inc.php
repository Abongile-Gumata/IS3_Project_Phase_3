<?php
// Start session to retrieve logged-in user data
session_start();

// Include the database connection file
require_once 'dbh.inc.php';

// Check if the user is logged in (assuming userId is stored in the session)
if (isset($_SESSION['userId'])) {
    // Get the userId from session
    $userId = $_SESSION['userId'];

    // Query to fetch user data from the database
    $query = "SELECT FullName, EmailAddress, phone FROM users WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    
    // Bind the userId parameter
    mysqli_stmt_bind_param($stmt, "i", $userId);

    // Execute the query
    mysqli_stmt_execute($stmt);

    // Fetch the result
    $result = mysqli_stmt_get_result($stmt);

    // Check if user data exists
    if ($row = mysqli_fetch_assoc($result)) {
        // Retrieve the user data
        $fullName = $row['FullName'];
        $email = $row['EmailAddress'];
        $phone = $row['phone'];
    } else {
        echo "Error: User not found.";
        exit();
    }

    // Close the statement
    mysqli_stmt_close($stmt);

} else {
    // Redirect to login if the user is not logged in
    header("Location: ../public/login.php");
    exit();
}

// // Close the database connection
// mysqli_close($conn);

// Handle form submission for updating user details
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form inputs
    $newFullName = $_POST['FullName'];
    $newEmail = $_POST['EmailAddress'];
    $newphone = $_POST['phone'];

    // Validate inputs (you can add more validation as needed)
    if (!empty($newFullName) && !empty($newEmail) && !empty($phone)) {
        // Update query
        $updateQuery = "UPDATE users SET FullName = ?, EmailAddress = ?, phone =? WHERE id = ?";
        $updateStmt = mysqli_prepare($conn, $updateQuery);
        
        // Bind new values and userId
        mysqli_stmt_bind_param($updateStmt, "sssi", $newFullName, $newEmail, $newphone, $userId);

        // Execute the update query
        if (mysqli_stmt_execute($updateStmt)) {
            echo "Profile updated successfully!";
            // Optionally update session data as well
            $_SESSION['userName'] = $newFullName;
            $_SESSION['userEmail'] = $newEmail;
            $_SESSION['userphone'] = $newphone;
        } else {
            echo "Error updating profile.";
        }

        // Close the statement
        mysqli_stmt_close($updateStmt);
    } else {
        echo "Please fill in all the fields.";
    }
}

// Close the database connection
mysqli_close($conn);
?>
