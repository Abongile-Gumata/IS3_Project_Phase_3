

<?php
// Database connection
$server = 'localhost';
$username = 'root';
$password = '';
$dbName = 'minanawedb';

$conn = mysqli_connect($server, $username, $password, $dbName);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the email from the form input
    $email = $_POST['EmailAddress'];

    // Query to check if the email exists in the database
    $query = "SELECT * FROM users WHERE EmailAddress = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        // Bind the email to the query
        mysqli_stmt_bind_param($stmt, 's', $email);

        // Execute the query
        mysqli_stmt_execute($stmt);

        // Get the result
        mysqli_stmt_store_result($stmt);

        // Check if any row is returned (i.e., email exists)
        if (mysqli_stmt_num_rows($stmt) > 0) {
            // Email exists, redirect to the reset password page
            session_start();
            $_SESSION['email'] = $email; // Store email in session to use in the reset form
            header('Location:../public/Reset Password.php'); // Redirect to reset-password.php
            exit();
        } else {
            echo "This email is not registered.";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: Could not prepare the SQL statement.";
    }
}

// Close the database connection
mysqli_close($conn);
?>
