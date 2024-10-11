<?php
// Include the database connection file
include('dbh.inc.php');

// Check if the form is submitted
if (isset($_POST['submit'])) {

    // Retrieve and sanitize form data
    $firstName = trim($_POST['first_name']);
    $lastName = trim($_POST['last_name']);
    $appointmentDate = trim($_POST['appointment_date']);
    $appointmentTime = trim($_POST['appointment_time']);
    $carColor = trim($_POST['car_color']); // Correctly retrieve the value
    $carSize = trim($_POST['car_size']);
    $carType = trim($_POST['car_type']);
    $washType = trim($_POST['wash_type']);

    // Validate required fields
    if (empty($firstName) || empty($lastName) || empty($appointmentDate) || empty($appointmentTime) || empty($carColor) || empty($carSize) || empty($carType) || empty($washType)) {
        echo "Please fill in all the required fields.";
        exit();
    }

    // Insert user data into the database
    $query = "INSERT INTO bookings (first_name, last_name, appointment_date, appointment_time, car_color, car_size, car_type, wash_type) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt === false) {
        echo "Error preparing statement: " . mysqli_error($conn);
        exit();
    }

    // Bind the parameters (use 's' for all fields since they are strings)
    mysqli_stmt_bind_param($stmt, "ssssssss", $firstName, $lastName, $appointmentDate, $appointmentTime, $carColor, $carSize, $carType, $washType);

    // Execute the query and check if the insertion was successful
    if (mysqli_stmt_execute($stmt)) {
        echo '<script>alert("Booking is successfully.");</script>';
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
    header("Location: ../public/booking.php");
    exit();
}
?>
