<?php
$conn = mysqli_connect("localhost", "root", "", "g7_database");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Database connected successfully!";
?>
