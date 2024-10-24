<?php
$servername = "localhost";
$username = "root";  // Fixed the typo from $usernmae to $username
$password = "";
$database = "garden";  // Corrected the database name from "garder" to "garden"

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());  // Displays the actual error message
} else {
    echo "";
}
