<?php
$servername = "laon-app.cibgqw0uga7s.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "admin123";
$dbname = "quickloan_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

