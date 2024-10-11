<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FullName = $_POST["FullName"];
    $EmailAddress = $_POST["EmailAddress"];
    $Pwd = $_POST["Pwd"];

    // You may want to add some validation here (like confirming passwords match)

    try {
        require_once "dbh.inc.php"; // Your database connection

        $query = "INSERT INTO register (FullName, EmailAddress, Pwd) VALUES (:FullName, :EmailAddress, :Pwd)";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":FullName", $FullName);
        $stmt->bindParam(":EmailAddress", $EmailAddress);
        $stmt->bindParam(":Pwd", $Pwd);

        $query = "INSERT INTO bookings (first_name, last_name, appointment_date, appointment_time, car_color, car_size	car_type, wash_type, created_at) 
        VALUES (:firstName, :lastName, :bookingDate, :bookingTime, :carColor, :carSize, :carType )";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":first_name", $first_name);
        $stmt->bindParam(":last_name", $last_name);
        $stmt->bindParam(":appointment_date", $appointment_date);
        $stmt->bindParam(":appointment_time", $appointment_time);
        $stmt->bindParam(":car_color", $car_color);
        $stmt->bindParam(":car_size", $car_size);
        $stmt->bindParam(":car_type", $car_type);
        $stmt->bindParam(":wash_type", $wash_type);
        $stmt->bindParam(":created_at", $created_at);


        $stmt->execute();

        // Send success message back to the frontend
        echo 'success';
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the database connection
    $pdo = null;
} else {
    echo "Invalid request method!";
}




