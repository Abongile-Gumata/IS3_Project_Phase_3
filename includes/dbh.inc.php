<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbName = 'minanawedb';

$conn = mysqli_connect($server, $username, $password, $dbName);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
