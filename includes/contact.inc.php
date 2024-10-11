<?php
// Include the database connection file
include('dbh.inc.php');

// Check if the form is submitted
if (isset($_POST['sendMessage'])) {

    // Retrieve and sanitize form data
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $subject = trim($_POST['sub']);
    $message = trim($_POST['msg']);
   

    // Validate required fields
    if (empty($fullname) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
        echo "Please fill in all the required fields.";
        exit();
    }

    // Insert user data into the database
    $query = "INSERT INTO contact (fullname, email, phone,	sub, msg) 
              VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt === false) {
        echo "Error preparing statement: " . mysqli_error($conn);
        exit();
    }

    // Bind the parameters (use 's' for all fields since they are strings)
    mysqli_stmt_bind_param($stmt, "sssss", $fullname, $email, $phone, $subject, $message);

    // Execute the query and check if the insertion was successful
    if (mysqli_stmt_execute($stmt)) {
        echo '<script>alert("Message sent.");</script>';
        header('Location: ../public/contact.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    // Redirect if the form is accessed without submitting
    header("Location: ../public/contact.php");
    exit();
}
?>
